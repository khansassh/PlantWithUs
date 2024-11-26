<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain-text password

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'plant_with_us');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch user
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if ($password == $user['password']) { // Direct comparison
            // Start a session to track the logged-in user
            session_start();
            $_SESSION['user_id'] = $user['id']; // Store user ID in session
            $_SESSION['user_name'] = $user['name']; // Optionally store user name

            // Redirect to the home page
            header("Location: startpage.php");
            exit(); // Ensure no further code is executed
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with this email.";
    }

    $conn->close();
}
?>
