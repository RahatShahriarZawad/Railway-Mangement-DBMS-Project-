<?php
$username = "root"; 
$password = ""; 
$database = "rail_manage"; 
$conn = new mysqli("localhost:3307", $username, $password, $database); 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$field1 = mysqli_real_escape_string($conn, $_REQUEST['source']);
$field2 = mysqli_real_escape_string($conn, $_REQUEST['destination']);
$sql = "SELECT * FROM train WHERE source='{$field1}' AND destination='{$field2}' ";
$result = $conn->query($sql);
$display_string = "<h2>Available Trains:</h2><style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}</style><table style=\"background:black;color:white; width: 100%;\">";
$display_string .= "<tr>";
$display_string .= "<th>Train_No.</th>";
$display_string .= "<th>departurer_Time</th>";
$display_string .= "<th>Arrival_time</th>";
$display_string .= "<th>source</th>";
$display_string .= "<th>Destination</th>";
$display_string .= "</tr>";
while($row = $result->fetch_assoc()){
	$display_string .= "<tr>";
	$display_string .= "<td>$row[train_no]</td>";
	$display_string .= "<td>$row[departure_time]</td>";
	$display_string .= "<td>$row[arrival_time]</td>";
	$display_string .= "<td>$row[source]</td>";
	$display_string .= "<td>$row[destination]</td>";
	$display_string .= "</tr>";
}
$display_string .= "</table>";
echo $display_string;
$conn->close();
?>
