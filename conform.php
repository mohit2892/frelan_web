<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add your styles here -->
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="login_process.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


<?php
// include "db_connect.php";

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = mysqli_real_escape_string($conn, $_POST['email']);
//     $password = mysqli_real_escape_string($conn, $_POST['password']);

//     // Check credentials
//     $sql = "SELECT * FROM users WHERE email = '$email' AND password = MD5('$password')";
//     $res = mysqli_query($conn, $sql);

//     if (mysqli_num_rows($res) > 0) {
//         // Start session and redirect
//         session_start();
//         $_SESSION['user'] = $email;
//         header("Location: profile.php"); // Redirect to a dashboard or profile page
//         exit();
//     } else {
//         echo "Invalid email or password.";
//     }
// }
?>
