<?php
include('includes/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];

    if ($id) {
        // Update existing record
        $stmt = $conn->prepare("UPDATE employees SET name=?, email=?, position=?, salary=? WHERE id=?");
        $stmt->execute([$name, $email, $position, $salary, $id]);
    } else {
        // Insert new record
        $stmt = $conn->prepare("INSERT INTO employees (name, email, position, salary) VALUES (?, ?, ?, ?)");
        $stmt->execute([$name, $email, $position, $salary]);
    }
    
    header("Location: index.php");
    exit;
}
?> 
