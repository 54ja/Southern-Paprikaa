<?php
session_start();
include ('setup.php');

print_r ($_POST);

$name = $_POST["name"];
$email = $_POST["email"];
$subject = addslashes($_POST["subject"]);
$message = addslashes($_POST["message"]);

$sql = "INSERT INTO messages (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  $_SESSION['messages'] = "message sent!";
  header('Location: contact.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>