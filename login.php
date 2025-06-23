<?php

include 'connection_login.php';


$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT password FROM username WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        session_start();
        $stmt->close();
        $conn->close();
        header("Location: landing_page.php");
        exit();
    }
}

$stmt->close();
$conn->close();
header("Location: index.php?error=Invalid username or password");
exit();
?>
