<?php
include '../db/connection.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$name, $email]);

if ($stmt->rowCount() > 0) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->errorInfo()[2];
}