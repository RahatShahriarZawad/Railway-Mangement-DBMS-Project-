<?php
$error= "";
include("db_connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

	$myusername=addslashes($_POST['uname']); 
	$mypassword=addslashes($_POST['psw']); 

	$conn = OpenCon();

	$sql="SELECT id FROM admin WHERE username='$myusername' and passcode='$mypassword'";
	$result = mysqli_query($conn, $sql);

	$count= mysqli_num_rows($result);

	echo $count;
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
		$_SESSION['login_user']=$myusername;
		header("location: welcome.php");
	}
	else 
	{
		$error="Your Login Name or Password is invalid";
	}
}
?>

