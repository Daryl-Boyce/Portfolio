<?php
function OpenCon()
 {
 $dbhost = "localhost:3306";
 $dbuser = "darylboy_user1";
 $dbpass = "76hWXu]H%[4j";
 $db = "darylboy_portfolio";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 } 
?>