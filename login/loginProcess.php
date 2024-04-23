<?php
session_start();

include '../db/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user;
    header('Location: ../index.php');
    exit;
} else {
    header('Location: login.php?error=1');
    exit;
}