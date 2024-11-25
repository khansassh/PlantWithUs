<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant With Us</title>

    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('startbg.jpg'); 
            background-size: cover; 
            background-position: center; 
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .center-image {
            position: fixed;
            width: 1000px;
            height: 500px;
            background-image: url('bumibagus.png'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .center-image button {
            padding: 20px 40px;
            font-size: 40px;
            background-color: #94c38f; 
            color: white;
            border: none;
            border-radius: 50px; 
            cursor: pointer;
            transition: background-color 0.5s ease;
            font-family: 'Parkinsans';
        }
        .center-image button:hover {
            background-color: white; 
            color: #94c38f;
        }
    </style>
</head>
<body>
    <div class="center-image">
        <a href="homepage.php">
            <button type="button">Plant With Us</button>
        </a>
    </div>
</body>
</html>
