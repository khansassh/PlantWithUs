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

        /* Navbar Styles */
        nav {
            position: sticky;
            top: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(148, 195, 143, 1);
            padding: 20px 40px;
            z-index: 100;
        }
        .logo img {
            width: 70px;
        }
        .navbar-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        .navbar-links li {
            position: relative; /* Makes the dropdown position relative to the parent */
        }
        .navbar-links a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: color 0.3s ease;
        }
        .navbar-links a:hover {
            color: #94C38F; /* Change color on hover */
        }

        /* Dropdown Styles */
        .dropdown {
            position: absolute;
            background-color: rgba(148, 195, 143, 1);
            top: 100%; /* Position dropdown below the parent element */
            left: 0;
            display: none;
            padding: 10px;
            border-radius: 5px;
            width: 200px; /* Adjust the width of the dropdown */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: opacity 0.3s, transform 0.3s, visibility 0.3s;
        }
        .dropdown a {
            display: block;
            padding: 8px 15px;
            transition: background-color 0.3s ease;
        }
        .dropdown a:hover {
            background-color: rgba(148, 195, 143, 0.7); /* Subtle hover effect */
        }
        .navbar-links li:hover .dropdown {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        /* About Us Section */
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

        /* Image Gallery */
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

        /* Responsive Design */
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

    <!-- Navbar -->
    <nav>
        <div class="logo">
            <img src="platwithuslogo.png" alt="Logo"> <!-- Replace with your logo image -->
        </div>
        <ul class="navbar-links">
            <li>
                <a href="#">Menu</a>
                <div class="dropdown">
                    <a href="home.html">Home</a>
                    <a href="settings.html">Settings</a>
                    <a href="profile.html">Profile</a>
                    <a href="about.html">About Us</a>
                    <a href="plant-with-us.html">Plant with Us</a>
                    <a href="community-forum.html">Community Forum</a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- About Us Section -->
    <div class="about-container">
        <h2>About Us</h2>

        <!-- Image Gallery -->
        <div class="image-gallery">
            <img src="kalla.png" alt="Person 1"> <!-- Replace with your image -->
            <img src="khansa.png" alt="Person 2"> <!-- Replace with your image -->
            <img src="fali.png" alt="Person 3"> <!-- Replace with your image -->
        </div>

        <!-- Description Paragraph -->
        <p>
            In today’s world, creativity and curiosity drive us to explore new ideas, yet fear of failure often holds us back. To address this, we’re creating an app to guide and inspire users in plant care and gardening, offering clear, accessible guidance and encouragement. Designed for beginners, it provides a supportive space to learn, grow, and celebrate small successes. Beyond being a tool, the app fosters community and aims to empower individuals, organizations, and communities worldwide to embrace gardening with confidence and joy, making plant care achievable and rewarding for everyone.
        </p>
    </div>

</body>
</html>
