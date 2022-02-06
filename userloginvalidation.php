<?php
$error= "";
include("db_connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// username and password sent from form 

	$myusername=addslashes($_POST['uname1']); 
	$mypassword=addslashes($_POST['psw1']); 

	$conn = OpenCon();

	$sql="SELECT username FROM user WHERE username='$myusername' and password='$mypassword'";
	$result = mysqli_query($conn, $sql);

	$count= mysqli_num_rows($result);

	echo $count;
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1)
	{
		$_SESSION['login_user']=$myusername;
		header("location: user_welcome.php");
	}
	else 
	{
		$error="Your Login Name or Password is invalid";
	}
}
?>