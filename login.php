<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Parkinsans:wght@300..800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('backlogin.png'); 
            background-size: cover; 
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white; 
        }
        .container {
            text-align: center;
            background-color: rgba(148, 195, 143, 1); 
            padding: 40px;
            border-radius: 35px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 100%;
            max-width: 400px;
            max-height: 400px;
        }
        h1 {
            font-size: 40px;
            margin-bottom: 20px;
            font-family: 'Parkinsans';
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            color: grey ; 
            background-color: white;
            font-family: 'Parkinsans';
        }
        input:focus {
            border-color: #ff6f61;
        }
        button {
            background-color: white;
            color: #94c38f;
            padding: 15px 25px;
            margin-top: 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            font-family: 'Parkinsans';
        }
        button:hover {
            background-color: #94c38f;
            box-shadow: 0 2px 4px black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="save_login.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
