<?php
include 'connection_signup.php';

$new_username = $_POST['user'];
$new_password = $_POST['pass'];

$sql = "INSERT INTO username (username,password)
VALUES ('$new_username', '$new_password' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


