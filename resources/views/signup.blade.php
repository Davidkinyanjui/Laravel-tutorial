<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sign-up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center; /* Center the content horizontally */
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        .top-nav {
            text-align: center;
            padding: 10px 0;
        }

        .top-nav li {
            display: inline;
            margin: 0 20px;
        }

        .top-nav a {
            text-decoration: none;
            color: #333;
        }

        h1 {
            margin: 30px 0;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1> Sign-Up </h1>
    </header>

    <nav class="top-nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/signup">Sign up</a></li>
        </ul>
    </nav>

    <h2>Sign up here...</h2>

    <form action="">
        <div>
            <input type="text" name="username" placeholder="Enter Your Username...">
        </div>
        <div>
            <input type="email" name="email" placeholder="Enter Your Email...">
        </div>
        <div>
            <input type="password" name="password" placeholder="Enter Your Password...">
        </div>
        <div>
            <input type="submit" name="Sign-Up" value="Sign-Up">
        </div>
    </form>
</body>
</html>
