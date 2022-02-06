<?php
include('db_connection.php');
session_start();
$user_check=$_SESSION['login_user'];
$conn = OpenCon();
$ses_sql=mysqli_query($conn,"select username from admin where username='$user_check' ");

$row= mysqli_fetch_assoc($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
header("Location: indexnew.php");
}
?>
