<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('backlogin.png'); /* Replace with your image URL */
            background-size: cover; /* Ensures the image covers the entire page */
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white; /* Sets default text color to white */
        }
        .container {
            text-align: center;
            background-color: rgba(148, 195, 143, 1); /* Slightly transparent background color */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            transition: transform 0.2s;
        }
        .container:hover {
            transform: scale(1.03);
        }
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            color: white; /* Set input text color to white */
            background-color: rgba(0, 0, 0, 0.5); /* Dark background for inputs */
        }
        input:focus {
            border-color: #ff6f61;
        }
        button {
            background-color: #F8FDFF;
            color: black;
            padding: 15px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, box-shadow 0.3s;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        button:hover {
            background-color: #ff4081;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1> Login</h1>
        <form action="save_login.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Save</button>
        </form>
    </div>
</body>
</html>
