<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <link rel="stylesheet" href="/css/delete.css">
</head>
<body>
<h1>Delete User</h1>

<p>Are you sure you want to delete this user?</p>

<form action="deleteProcess.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <button class="delete-button" type="submit">Yes, delete user</button>
</form>

<p><a href="../index.php">Cancel</a></p>
</body>
</html>