<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"contact");

$user = $_POST['user'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$message = $_POST['message'];

$query = "INSERT INTO `mess`(`user`,`phone`,`email`,`message`) VALUES ('$user','$phone','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>
