<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'PlantWithUs');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password == $user['password']) { 
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            header("Location: startpage.php");
            exit();
        } else {
            echo "<script>
                alert('Invalid password. Please try again.');
                window.location.href='login.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('No account found with this email.');
            window.location.href='login.php';
        </script>";
    }

    $conn->close();
}
?>
