<?php
include('includes/db_connection.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->execute([$id]);
    
    header("Location: index.php");
    exit;
}
?> 
