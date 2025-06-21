<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red;'>".$_GET['error']."</p>";
    }
    ?>

    <button onclick="window.location.href='login_page.php'">
        Login 
    </button>
    <button onclick ="window.location.href='signup_page.php'">
        Signup 
    </button>

</body>
</html>
