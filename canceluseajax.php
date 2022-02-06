<?php
$username = "root"; 
$password = ""; 
$database = "rail_manage"; 
$conn = new mysqli("localhost:3307", $username, $password, $database); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$field1 = mysqli_real_escape_string($conn, $_REQUEST['username']);
$field2 = mysqli_real_escape_string($conn, $_REQUEST['email']);
$field3 = mysqli_real_escape_string($conn, $_REQUEST['train_no']);
$field4 = mysqli_real_escape_string($conn, $_REQUEST['ticket_no']);
$sql ="INSERT INTO cancel (username,email,train_no,ticket_no)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}')";
 
if(mysqli_query($conn, $sql)){
    echo "cancellation requested sucessfully for Ticket no {$field4} ";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
$conn->close();
?>

