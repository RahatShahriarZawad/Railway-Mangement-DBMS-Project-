<?php
$username = "root"; 
$password = ""; 
$database = "rail_manage"; 
$conn = new mysqli("localhost:3307", $username, $password, $database); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$field1 = mysqli_real_escape_string($conn, $_REQUEST['train_no']);
$field2 = mysqli_real_escape_string($conn, $_REQUEST['username']);
$field3 = mysqli_real_escape_string($conn, $_REQUEST['email']);
$field4 = mysqli_real_escape_string($conn, $_REQUEST['t_amount']);
$field5 = mysqli_real_escape_string($conn, $_REQUEST['class_type']);
$field6 = mysqli_real_escape_string($conn, $_REQUEST['source']);
$field7 = mysqli_real_escape_string($conn, $_REQUEST['destination']);
$field8 = mysqli_real_escape_string($conn, $_REQUEST['date']);

$sql ="INSERT INTO ticket (train_no,username,email,t_amount,class_type,source,destination,date)
            VALUES ('{$field1}','{$field2}','{$field3}','{$field4}','{$field5}','{$field6}','{$field7}','{$field8}');";
 $sql2 = "UPDATE ticket, class
SET ticket.fare = class.fare
WHERE ticket.train_no = class.train_no AND ticket.class_type = class.class_type;";
 
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
    echo "Ticket booked sucessfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$conn->close();
?>
