<?php
function OpenCon()
 {
	 $dbhost = "localhost:3307";
	 $dbuser = "root";
	 $dbpass = "";
	 $db = "rail_manage";
	 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
	 
	 return $conn;
 }
 
function CloseCon($conn)
 {
	$conn -> close();
 }
   
?>
