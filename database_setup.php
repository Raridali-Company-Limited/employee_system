<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database
    $conn->exec("CREATE DATABASE IF NOT EXISTS employee_db");
    $conn->exec("USE employee_db");
    
    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS employees (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        position VARCHAR(50) NOT NULL,
        salary DECIMAL(10,2) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    $conn->exec($sql);
    echo "Database and table created successfully!";
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}
$conn = null;
?> 
