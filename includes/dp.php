<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "chat_app";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully\n";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
