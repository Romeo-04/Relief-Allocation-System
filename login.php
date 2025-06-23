<?php

include 'connection_login.php';

$username = $_POST['username'];
$password = $_POST['password'];


// Retrieve the stored hash for the given username
$sql = "SELECT password FROM username WHERE username='$username'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        session_start();
        header("Location: landing_page.php");
        exit();
    }
}

header("Location: index.php?error=Invalid username or password");
exit();

$conn->close();
?>