<?php

include 'connection_login.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM username WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    session_start();
    header("Location: landing_page.php");
    exit();

} else {
  
    header("Location: index.php?error=Invalid username or password");
    exit();
}

$conn->close();
?>