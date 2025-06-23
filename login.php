<?php

include 'connection_login.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM username WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    session_start();
    header("Location: landing_page.php");
    exit();

} else {

    header("Location: index.php?error=Invalid username or password");
    exit();
}

$stmt->close();
$conn->close();
?>
