<?php
include '../db/config.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST['email'];

$sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$username, $password, $email]);

header('Location: ../login/login.php');
exit;
?>