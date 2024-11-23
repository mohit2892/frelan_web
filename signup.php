<?php
require 'db.php'; // Make sure this file contains your PDO connection setup

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        echo 'Email is already registered. Please use a different email address.';
    } else {
        // Insert new user into the database with plain text password
        try {
            $stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES (?, ?, ?)');
            $stmt->execute([$name, $email, $password]);
            echo 'Sign up successful. <a href="login-signup.php">Login</a>';
            header('Location: login-signup.php');
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}
?>
