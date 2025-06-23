<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md text-center space-y-4">
        <h2 class="text-xl font-semibold">Login Page</h2>

        <?php
        if (isset($_GET['error'])) {
            echo "<p class='text-red-500'>".$_GET['error']."</p>";
        }
        ?>

        <div class="space-x-4">
            <button class="px-4 py-2 bg-blue-500 text-white rounded" onclick="window.location.href='login_page.php'">
                Login
            </button>
            <button class="px-4 py-2 bg-green-500 text-white rounded" onclick="window.location.href='signup_page.php'">
                Signup
            </button>
        </div>
    </div>
</body>
</html>
