<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: startpage.php"); // Redirect to login if not logged in
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Plant With Us</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f5f3;
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

        .hero {
            background-image: url('backall.png');
            background-size: cover;
            background-position: center;
            height: 700px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-content {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
        }

        .hero img {
            height: 100px;
        }

        .hero h1 {
            margin: 10px 0;
            color: #4CAF50;
            font-size: 2.5rem;
        }

        .hero p {
            margin: 10px 0;
            color: #333;
            font-size: 1.2rem;
        }

        footer {
            background-color: #355e35;
            color: white;
            text-align: center;
            padding: 20px;
        }

        footer img {
            height: 50px;
            margin-bottom: 10px;
        }

        footer a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer a:hover {
            text-decoration: underline;
        }

        footer .social-icons {
            margin-top: 10px;
        }

        footer .social-icons img {
            height: 20px;
            margin: 0 5px;
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

    <main>
        <div class="hero">
            <div class="hero-content">
                <img src="logo.png" alt="Plant With Us Logo">
                <h1>PlantWithUs</h1>
                <p>This Mobile Gardening App helps gardeners with tools like step-by-step planting guides, 
                    care reminders, and a community forum. It provides advice tailored to users' plants and 
                    conditions, making it beginner-friendly. The searchable plant care library offers quick 
                    access to information and grows over time to support more users without frequent updates.</p>
            </div>
        </div>
    </main>

    <footer>
        <img src="logo.png" alt="Plant With Us Logo"> 
        <div>
            <a href="searchpage.php">Plant With Us</a>
            <a href="forumpage.php">Community Forum</a>
            <a href="homepage.php">Home Page</a>
            <a href="aboutus.php">About Us</a>
            <a href="forumpage.php">QnA</a>
        </div>
        <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank">
                <img src="instagram.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <img src="facebook.png" alt="Facebook">
            </a>
        </div>
        <p>Reserved by Plant With Us Team</p>
    </footer>

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
