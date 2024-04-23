<?php
include '../db/config.php';

$id = $_POST['id'];

if (!is_numeric($id)) {
    die('Invalid user ID.');
}

$sql = "DELETE FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die('Error preparing SQL statement.');
}

if (!$stmt->execute([$id])) {
    die('Error executing SQL statement.');
}

header('Location: ../index.php');
exit;