<?php
$host = 'localhost';
$dbname = 'bead_jewelry';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Successfully connected to datatabase: $dbname.";
} catch (PDOException $e) {
    die("Error connecting to database: " . $e->getMessage());
}
