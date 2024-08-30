<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook_clone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // No hashing here as per your requirement

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format. <a href="index.php">Back to Login</a>';
        exit();
    }

    // Check if the user already exists in the database
    $check_query = "SELECT * FROM users WHERE email = ?";
    $stmt_check = $conn->prepare($check_query);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // If user exists, verify the password
        $user = $result_check->fetch_assoc();
        if ($password === $user['password']) {
            // Password matches, log the user in
            $_SESSION['email'] = $email;
            header("Location: welcome.php");
            exit();
        } else {
            echo 'Invalid password. <a href="index.php">Back to Login</a>';
            exit();
        }
    } else {
        // If user does not exist, insert the user into the database
        $insert_query = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt_insert = $conn->prepare($insert_query);
        $stmt_insert->bind_param("ss", $email, $password);

        if ($stmt_insert->execute()) {
            $_SESSION['email'] = $email;
            header("Location: welcome.php");
            exit();
        } else {
            echo 'An error occurred. Please try again. <a href="index.php">Back to Login</a>';
            exit();
        }

        $stmt_insert->close();
    }

    $stmt_check->close();
}

$conn->close();
?>

