<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-sm">
        <h2 class="text-xl font-semibold mb-4 text-center">Signup Page</h2>

        <?php
        if (isset($_GET['error'])) {
            echo "<p class='text-red-500 mb-2'>".$_GET['error']."</p>";
        }
        ?>

        <form action="signup.php" method="post" class="space-y-4">
            <div>
                <label class="block mb-1">Username</label>
                <input type="text" name="user" required class="w-full p-2 border rounded" />
            </div>
            <div>
                <label class="block mb-1">Password</label>
                <input type="password" name="pass" required class="w-full p-2 border rounded" />
            </div>
            <input type="submit" value="Sign Up" class="w-full bg-green-500 text-white p-2 rounded" />
        </form>
    </div>
</body>
</html>
