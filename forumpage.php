<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: startpage.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Forum - Plant With Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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
            color: #4CAF50
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
                <label for="comment">Question and answer with other users:</label><br>
                <textarea id="comment" name="comment" rows="4" cols="50" placeholder="PUT YOUR COMMENT IN HERE"></textarea><br><br>
                <input type="submit" value="Submit">
            </form>
            <div>
                <h2>Previous Comments</h2>
              
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