<?php
$site_title = "Plant With Us";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
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
            position: relative;
        }

        header img {
            height: 50px;
        }

        header .menu {
            font-size: 2rem;
            cursor: pointer;
            display: none;
            position: absolute;
            top: 15px;
            right: 20px;
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

        header .menu:hover + .dropdown {
            display: block;
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
        <div class="menu">&#8942;</div>
        <div class="dropdown">
            <a href="aboutus.php">About Us</a>
            <a href="forumpage.php">Community Forum</a>
            <a href="homepage.php">Home Page</a>
            <a href="plantpage.php">Plant With Us</a>
        </div>
    </header>

    <main>
        <div class="hero">
            <div class="hero-content">
                <img src="logo.png" alt="Plant With Us Logo">
                <h1>PlantWithUs</h1>
                <p>This Mobile Gardening App helps gardeners with tools like step-by-step planting guides, care reminders, and a community forum. It provides advice tailored to users' plants and conditions, making it beginner-friendly. The searchable plant care library offers quick access to information and grows over time to support more users without frequent updates.</p>
            </div>
        </div>
    </main>

    <footer>
        <img src="logo.png" alt="Plant With Us Logo"> 
        <div>
            <a href="plantpage.php">Plant With Us</a>
            <a href="forumpage.php">Community Forum</a>
            <a href="homepage.php">Home Page</a>
            <a href="aboutus.php">About Us</a>
            <a href="forumpage.php">QnA</a>
        </div>
        <div class="social-icons">
        <a href="https://www.instagram.com" target=" ">
            <img src="instagram.png" alt="Instagram">
        </a>
        <a href="https://www.facebook.com" target=" ">
            <img src="facebook.png" alt="Facebook">
        </a>
    </div>
        <p>Reserved by Plant With Us Team</p>
    </footer>
</body>
</html>
