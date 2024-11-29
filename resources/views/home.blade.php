<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
        }
        .input-field {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .password-container {
            position: relative;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form id="login-form">
            <div class="password-container">
                <input type="password" class="input-field" name="password" id="password" placeholder="Password" required>
                <span class="eye-icon" id="toggle-password">
                    👁️
                </span>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>

    <script>
        // Get the password field and eye icon
        const passwordField = document.getElementById('password');
        const eyeIcon = document.getElementById('toggle-password');
        const loginForm = document.getElementById('login-form');

        // Predefined password for validation (this should be handled securely in production)
        const correctPassword = "123";

        // Toggle password visibility
        eyeIcon.addEventListener('click', () => {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.textContent = '🙈'; // Change to closed eye emoji
            } else {
                passwordField.type = 'password';
                eyeIcon.textContent = '👁️'; // Change to open eye emoji
            }
        });

        // Form submission handling
        loginForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent form submission

            const enteredPassword = passwordField.value;

            // Check if the entered password is correct
            if (enteredPassword !== correctPassword) {
                alert('Incorrect password!'); // Show alert if password is incorrect
            } else {
            
                window.location.href = '/dashboard';
                alert('Login successful!');
            }
        });
    </script>
</body>
</html>
