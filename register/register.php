<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
<h1>Register</h1>

<form action="registerProcess.php" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <button type="submit">Register</button>
</form>

<p><a href="../login/login.php">Login</a></p>
</body>
</html>