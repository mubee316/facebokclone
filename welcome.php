<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            width: 100%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            width: 150px;
        }
        h1 {
            color: #1877f2;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }
        .btn {
            padding: 15px 25px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
        </div>
        <h1>🎉 Congratulations! 🎉</h1>
        <p>
            You have successfully logged in and won your money! 
            We are excited to reward you with this special promotion.
        </p>
        <p>
            Enjoy your prize and thank you for being a valued user!
        </p>
        <!-- Optionally, you can add a button to go back to the index page -->
        <a href="index.php" class="btn">Go Back to giveaway</a>
    </div>
</body>
</html>
