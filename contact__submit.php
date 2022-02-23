<?php
$dbhost = "localhost:3306";
$dbuser = "darylboy_user1";
$dbpass = "76hWXu]H%[4j";
$first__name = $_POST['first__name'];
$last__name = $_POST['last__name'];
$email__address = $_POST['email__address'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`id`, `first__name`, `last__name`,  `email__address`, `subject`, `message`) VALUES ('0', '$first_name', '$last_name', '$email','$subject', '$message')";

// insert in database 
$add__data = mysqli_query($con, $sql);
?>