<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign Up</title>
    <style>
        /* Basic Reset */
        body, h2, p, form, input, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f06, #f79);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            width: 100%;
            max-width: 480px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .form-container {
            padding: 2rem;
        }

        .tabs {
            display: flex;
            border-bottom: 2px solid #f06;
        }

        .tab-button {
            color: #000;
            flex: 1;
            padding: 1rem;
            background: #f9f9f9;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .tab-button.active, .tab-button:hover {
            background: #f06;
            color: #fff;
        }

        .form-content {
            display: none;
        }

        .form-content.active {
            display: block;
        }

        h2 {
            text-align: center;
            margin-bottom: 1rem;
            color: #333;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #555;
        }

        input[type="email"], input[type="password"], input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        input:focus {
            border-color: #f06;
            outline: none;
        }

        button {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 4px;
            color: #fff;
            background: #f06;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #e05d5d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- Tabs for switching between Login and Sign Up -->
            <div class="tabs">
                <button class="tab-button active" onclick="showForm('login')">Login</button>
                <button class="tab-button" onclick="showForm('signup')">Sign Up</button>
            </div>
            <!-- Login Form -->
            <div id="login-form" class="form-content active">
                <h2>Login</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="login-email">Email</label>
                        <input type="email" id="login-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Password</label>
                        <input type="password" id="login-password" name="password" required>
                    </div>
                    <button type="submit" class="btn-primary">Login</button>
                </form>
            </div>

            <!-- Sign Up Form -->
            <div id="signup-form" class="form-content">
                <h2>Sign Up</h2>
                <form action="signup.php" method="POST">
                    <div class="form-group">
                        <label for="signup-name">Name</label>
                        <input type="text" id="signup-name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-email">Email</label>
                        <input type="email" id="signup-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="signup-password">Password</label>
                        <input type="password" id="signup-password" name="password" required>
                    </div>
                    <button type="submit" class="btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function showForm(formType) {
            const loginForm = document.getElementById('login-form');
            const signupForm = document.getElementById('signup-form');
            const tabButtons = document.querySelectorAll('.tab-button');

            if (formType === 'login') {
                loginForm.classList.add('active');
                signupForm.classList.remove('active');
                tabButtons[0].classList.add('active');
                tabButtons[1].classList.remove('active');
            } else {
                loginForm.classList.remove('active');
                signupForm.classList.add('active');
                tabButtons[0].classList.remove('active');
                tabButtons[1].classList.add('active');
            }
        }

        // Set default to login form
        document.addEventListener('DOMContentLoaded', () => {
            showForm('login');
        });
    </script>





</body>
</html>
