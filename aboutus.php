<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        
        
        .about-container {
            background-color: #94C38F; /* New background color */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px;
            margin: 50px auto;
            max-width: 900px;
            border-radius: 15px;
        }
        .about-container img {
            width: 300px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .about-container h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .about-container p {
            font-size: 18px;
            max-width: 800px;
            line-height: 1.6;
        }


        .image-gallery {
            display: flex;
            gap: 30px;
            justify-content: center;
            margin-bottom: 40px;
        }
        .image-gallery img {
            width: 250px;
            height: 250px;
            border-radius: 8px;
            object-fit: cover;
        }

        
        @media (max-width: 768px) {
            .about-container {
                padding: 20px;
            }
            .about-container h2 {
                font-size: 24px;
            }
            .about-container p {
                font-size: 16px;
            }
            .image-gallery {
                flex-direction: column;
                gap: 20px;
            }
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
        </div>
    </header>

   
    <div class="about-container">
        <h2>About Us</h2>

        
        <div class="image-gallery">
            <img src="kalla.png" alt="Person 1"> 
            <img src="khansa.png" alt="Person 2"> 
            <img src="fali.png" alt="Person 3"> 
        </div>

        
        <p>
            In today’s world, creativity and curiosity drive us to explore new ideas, yet fear of failure often holds us back. To address this, we’re creating an app to guide and inspire users in plant care and gardening, offering clear, accessible guidance and encouragement. Designed for beginners, it provides a supportive space to learn, grow, and celebrate small successes. Beyond being a tool, the app fosters community and aims to empower individuals, organizations, and communities worldwide to embrace gardening with confidence and joy, making plant care achievable and rewarding for everyone.
        </p>
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
