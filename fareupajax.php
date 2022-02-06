
<?php
$username = "root"; 
$password = ""; 
$database = "rail_manage"; 
$conn = new mysqli("localhost:3307", $username, $password, $database); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$field1 = mysqli_real_escape_string($conn, $_REQUEST['fare']);
$field2 = mysqli_real_escape_string($conn, $_REQUEST['train_no']);
$field3 = mysqli_real_escape_string($conn, $_REQUEST['class_type']);
$sql = "UPDATE class
SET fare = '{$field1}'
WHERE train_no = '{$field2}' and class_type = '{$field3}'";
 
if(mysqli_query($conn, $sql)){
    echo "Fare updated sucessfully for train no. {$field2}";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
$conn->close();
?>