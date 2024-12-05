<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: startpage.php");
    exit();
}

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'plant_with_us'); // Update with your database credentials

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment'])) {
    $comment = $conn->real_escape_string($_POST['comment']);
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO comments (user_id, comment) VALUES ('$user_id', '$comment')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Comment submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error submitting comment: " . $conn->error . "');</script>";
    }
}

// Fetch all comments
$comments = $conn->query("SELECT * FROM comments ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Forum - Plant With Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Parkinsans', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('backall.png');
            background-size: cover; 
            background-position: center;
            color: white;
        }

        header {
            background-color: #7fc17f; 
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        header img {
            height: 50px;
        }

        header .menu {
            font-size: 2rem;
            cursor: pointer;
            display: block;
        }

        header .dropdown {
            display: none;
            position: absolute;
            top: 40px; 
            right: 20px;
            background-color: #7fc17f;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 10px;
            width: 200px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        header .dropdown a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 8px 15px;
            font-size: 1rem;
        }

        header .dropdown a:hover {
            background-color: #355e35;
        }

        header.active .dropdown {
            display: block;
            opacity: 1;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            color: black; 
            padding: 20px; 
            border-radius: 10px; 
            max-width: 800px; 
            margin: 50px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #4CAF50;
            text-align: center;
            font-size: 40px;
        }

        h2 {
            color: #4CAF50;
            text-align: left;
            font-size: 22px;
        }

        .chat-bubble-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: -13px;
        }

        .chat-bubble {
            padding: 10px 15px;
            border-radius: 18px;
            max-width: 70%;
            word-wrap: break-word;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            font-size: 1rem;
        }

        .chat-bubble.user {
            background-color: #4caf50;
            color: white;
            align-self: flex-start;
        }

        .chat-bubble.reply {
            background-color: #4caf50;
            color: white;
            align-self: flex-end;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .social-icons a {
    color: #4CAF50; /* Green color */
    font-size: 2rem;
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-icons a:hover {
    color: #2e7d32; /* Darker green on hover */
}

    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Plant With Us Logo">
        <div class="menu" onclick="toggleDropdown()">&#8942;</div>
        <div class="dropdown">
            <a href="aboutus.php">About Us</a>
            <a href="forumpage.php">Community Forum</a>
            <a href="homepage.php">Home Page</a>
            <a href="searchpage.php">Plant With Us</a>
            <a href="logout.php">Logout</a>
        </div>
    </header>

    <div class="container">
        <main>
            <h1>Community Forum</h1>
            <form method="post">
                <label for="comment" style="color: #4CAF50;">Insert your comments here</label><br>
                <textarea id="comment" name="comment" rows="8" cols="80"></textarea><br><br>
                <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; border-radius: 10px; cursor: pointer; margin-top: -10px; margin-bottom: 50px; font-size: 15px; font-weight: bold;">

            </form>
            <div>
                <h2>Previous Comments</h2>
                <div class="chat-bubble-container">
                    <?php
                    if ($comments->num_rows > 0) {
                        while ($row = $comments->fetch_assoc()) {
                            echo "<div class='chat-bubble user'>" . htmlspecialchars($row['comment']) . "</div>";
                        }
                    } else {
                        echo "<p>No comments yet. Be the first to comment!</p>";
                    }
                    ?>
                </div>
            </div>
            <p style="text-align: center; font-size: 1.5rem; color: #4caf50;font-weight: bold; margin-top: 70px; margin-bottom: -25px">Join Our Community</p>
        <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook-f"></a>
            <a href="https://wa.me/yourphonenumber" target="_blank" class="fab fa-whatsapp"></a>
        </div>
    </main>
    </div>

    <script>
        function toggleDropdown() {
            document.querySelector('header').classList.toggle('active');
        }

        window.addEventListener('click', function(e) {
            const dropdown = document.querySelector('.dropdown');
            const menu = document.querySelector('.menu');
            const header = document.querySelector('header');
            if (!header.contains(e.target)) {
                header.classList.remove('active');
            }
        });

        const header = document.querySelector('header');
        header.addEventListener('mouseleave', function() {
            header.classList.remove('active');
        });
    </script>
</body>
</html>
