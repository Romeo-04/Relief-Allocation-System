<?php
include 'connection_signup.php';

$new_username = $_POST['user'];

// Hash the incoming password before storing
$new_password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$sql = "INSERT INTO username (username,password)
VALUES ('$new_username', '$new_password' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header("Location: login_page.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


