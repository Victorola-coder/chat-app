<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS chat_app";
    $conn->exec($sql);
    echo "Database created successfully\n";

    // Switch to the created database
    $conn->exec("USE chat_app");

    // Create users table
    $sql = "CREATE TABLE IF NOT EXISTS users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL
            )";
    $conn->exec($sql);
    echo "Table 'users' created successfully\n";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
