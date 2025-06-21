<html>
<head>
    <title>Sign UP</title>
</head>
<body>
    <h2>Signup Page</h2>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>".$_GET['error']."</p>";
    }
    ?>

    <form action="signup.php" method="post">
        Username: <input type="text" name="user" required><br><br>
        Password: <input type="password" name="pass" required><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>