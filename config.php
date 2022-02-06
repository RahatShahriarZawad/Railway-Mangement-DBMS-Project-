<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "bank";

$conn = mysql_connect($hostname, $user, $password) or die("Connect failed: %s\n". $conn -> error);
mysql_select_db($database, $conn) or die("Opps some thing went wrong");

?>
