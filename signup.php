<?php
include 'connection_signup.php';

$new_username = $_POST['user'];
$new_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO username (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $new_username, $new_password);
if ($stmt->execute()) {
  echo "New record created successfully";
  header("Location: login_page.php");
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
