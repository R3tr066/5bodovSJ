<!DOCTYPE html>
<html>
<head>
    <title>update user info</title>
    <link rel="stylesheet" href="../css/update.css">
</head>
<body>

<form action="updateUser.php" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
    <br>
    <button type="submit">Update Info</button>
</form>

<br>
<a href="../index.php" class="btn-main-page">Return to Main Page</a>
<br>
<br>
<form action="delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <button type="submit">Delete User</button>
</form>

</body>
</html>