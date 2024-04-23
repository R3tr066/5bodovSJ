<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<h1>Login</h1>

<form action="loginProcess.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <button type="submit">Login</button>
</form>

<p><a href="../register/register.php">Register</a></p>
</body>
</html>