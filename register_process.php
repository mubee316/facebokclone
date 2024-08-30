<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook_clone";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email and password from POST request
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if the email already exists in the database
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Email is already registered
        echo "<p style='color: red;'>Email already registered. Please use a different email. <a href='register.php'>Back to Registration</a></p>";
    } else {
        // Insert new user into the database
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);

        if ($stmt->execute()) {
            // Registration successful
            echo "Registration successful. <a href='login.php'>Login</a>";
        } else {
            // Error inserting user
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>

