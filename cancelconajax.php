
<?php
$username = "root"; 
$password = ""; 
$database = "rail_manage"; 
$conn = new mysqli("localhost:3307", $username, $password, $database); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$field1 = mysqli_real_escape_string($conn, $_REQUEST['ticket_no']);
$sql = "DELETE FROM ticket WHERE ticket_no='{$field1}';";
$sql2 = "DELETE FROM cancel WHERE ticket_no='{$field1}';";
 
if(mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)){
    echo "Cancelltion confirmed.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
$conn->close();
?>

