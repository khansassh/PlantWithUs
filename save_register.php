<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'PlantWithUs');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Registration successful! Redirecting to login page.');
            window.location.href='login.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: Registration failed. Please try again.');
            window.location.href='register.php';
        </script>";
    }

    $conn->close();
}
?>
