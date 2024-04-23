<nav>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li>
            <span>Welcome, <?php echo htmlspecialchars($user['name']); ?>!</span>
            <form action="logout.php" method="post">
                <button type="submit">Logout</button>
            </form>
        </li>
    </ul>
</nav>