<?php


$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$db = "contact__portfolio";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

$first__name = $_POST['first__name'];
$last__name = $_POST['last__name'];
$email__address = $_POST['email__address'];
$subject = $_POST['subject'];
$message = $_POST['message'];



// or die("Connect failed: %s\n". $conn -> error);

// database insert SQL code
$sql = "INSERT INTO contact__form__data ( name, name_last, email, subject, message ) VALUES ( '$first__name', '$last__name', '$email__address', '$subject', '$message')";

// insert in database 
mysqli_query($conn, $sql);





?>