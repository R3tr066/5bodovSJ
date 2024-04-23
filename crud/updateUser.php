<?php
session_start();

include '../db/config.php';

$id = $_SESSION['user']['id'];
$name = $_POST['name'];
$email = $_POST['email'];

if (empty($name) || empty($email)) {
    echo "Name and Email are required.";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit();
}

$sql = "UPDATE users SET name=?, email=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$name, $email, $id]);

if ($stmt->rowCount() > 0) {
    $_SESSION['user']['name'] = $name;
    $_SESSION['user']['email'] = $email;
    echo "User information updated successfully.";
} else {
    echo "Error updating user information: " . $conn->errorInfo()[2];
}
