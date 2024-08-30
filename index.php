<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Giveaway</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden; /* Prevent scrollbars from appearing */
        }
        .container {
            max-width: 600px;
            width: 100%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            position: relative; /* Position relative to allow absolute positioning of falling money */
            z-index: 1;
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
        /* Style for falling money */
        .falling-money {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }
        .falling-money img {
            position: absolute;
            width: 60px;
            height: auto;
            opacity: 0.8;
            transform: rotate(-30deg);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
        </div>
        <h1>🎉 Exciting Money Giveaway! 🎉</h1>
        <p>
            Congratulations! You are eligible for our exclusive money giveaway event. 
            We are thrilled to reward our users with a generous cash prize. 
            Don't miss out on this incredible opportunity to claim your share of the giveaway!
        </p>
        <p>
            Click the button below to claim your giveaway prize now. 
            This is your chance to boost your balance and enjoy the benefits of our special promotion!
        </p>
        <!-- Cash Out button -->
        <a href="login.php" class="btn">Cash Out</a>
        <!-- Falling money container -->
        <div class="falling-money" id="fallingMoney"></div>
    </div>

</body>
</html>
