<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        nav {
            position: absolute;
            top: 20px;
            width: 100%;
            text-align: center;
        }

        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #000;
            font-size: 16px;
        }

        .login-container {
            background-color: #FFFFFF;
            border: 1px solid #CCC;
            padding: 20px 40px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        .login-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #CCC;
            border-radius: 5px;
            font-size: 14px;
        }

        .login-container button {
            background-color: rgb(169, 169, 169); /* Warna merah hati */
            color: #FFF;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #A0136D;
        }

        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <nav>
        <a href="/home">Home</a>
        <a href="/login">Login</a>
        <a href="/register">Register</a>
    </nav>

    <div class="login-container">
        <h1>Login</h1>
        <form action="/login" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <footer>
            © 2025 Booking System. All rights reserved.
        </footer>
    </div>
</body>
</html>
