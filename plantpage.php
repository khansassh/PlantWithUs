<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
    <title>Document</title>
    <style>
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
=======
>>>>>>> Stashed changes
    <title>Plant Page</title>
</head>
<body>
    
<<<<<<< Updated upstream
=======
>>>>>>> b3406a00cb5f19c6452ee41ccbf0610f49ed8a5f
>>>>>>> Stashed changes
</body>
</html>