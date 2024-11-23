<?php
session_start();
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    
    // Validate the email against the database to find the user
    $query = "SELECT sno, pass FROM qualification_sign WHERE email = '$email' And pass = '$pass'";
    $result = mysqli_query($conn, $query);
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['sno']; // Set user ID in the session
        header("Location: profile.php?id=" . $row['sno']); // Redirect to profile
        exit();
    } else {
        $message = "Invalid email. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .container {
            margin-top: 100px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        .container h2 {
            margin-bottom: 30px;
            color: #343a40;
        }
        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (isset($message)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($message); ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
            <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            <br>
            <label for="pass">Password:</label>
                <input type="pass" class="form-control" id="pass" name="pass" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <a href="profile_signup.php" class="d-block mt-3">Don't have an account? Register here.</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
