<?php

include 'connection_login.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM username WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login successful! Welcome, " . htmlspecialchars($username);
} else {
  
    header("Location: index.php?error=Invalid username or password");
    exit();
}

$conn->close();
?>