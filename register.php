<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Basic styling for the registration page */
        body { font-family: Arial, sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .container { max-width: 360px; width: 100%; background: white; border-radius: 6px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); padding: 20px; }
        .logo { text-align: center; margin-bottom: 20px; }
        .logo img { width: 200px; }
        .form-group { margin-bottom: 15px; position: relative; }
        .form-group input { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; }
        .btn { width: 100%; padding: 10px; background-color: #1877f2; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        .btn:hover { background-color: #165eab; }
        .eye-icon { position: absolute; right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; font-size: 18px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
        </div>
        <h2>Create New Account</h2>
        <form action="register_process.php" method="post">
            <!-- Input field for email -->
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <!-- Input field for password with toggle visibility -->
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
                <span id="toggle-password" class="eye-icon">&#128065;</span>
            </div>
            <!-- Submit button for registration -->
            <button type="submit" class="btn">Sign Up</button>
        </form>
        <p><a href="login.php">Back to Login</a></p>
    </div>

    <script>
        // JavaScript to toggle password visibility
        document.addEventListener('DOMContentLoaded', () => {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('toggle-password');

            togglePassword.addEventListener('click', () => {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';  // Show password
                    togglePassword.textContent = '👁️';  // Eye icon for visibility
                } else {
                    passwordInput.type = 'password';  // Hide password
                    togglePassword.textContent = '👁️';  // Eye icon for hidden
                }
            });
        });
    </script>
</body>
</html>
