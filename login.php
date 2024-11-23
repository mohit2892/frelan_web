<?php
session_start();
require 'db.php'; // Make sure this file contains your PDO connection setup

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the query to check user credentials
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
    $stmt->execute([$email, $password]);
    $user = $stmt->fetch();

    if ($user) {
        // Store user ID in session and redirect
        // $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_id'] = $user['id'];
        header('Location: index.php'); // Redirect to a protected page
        exit;
    } else {
        echo 'Invalid email or password';
    }
}
?>
