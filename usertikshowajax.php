
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
$sql = "SELECT * FROM ticket where username='{$field1}' and email='{$field2}' and train_no='{$field3}'";
$result = $conn->query($sql);
$display_string = "<h2>Booked ticket</h2><style>
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
$display_string .= "<th>ticket_no</th>";
$display_string .= "<th>train_no</th>";
$display_string .= "<th>username</th>";
$display_string .= "<th>email</th>";
$display_string .= "<th>fare</th>";
$display_string .= "<th>t_amount</th>";
$display_string .= "<th>class</th>";
$display_string .= "<th>source</th>";
$display_string .= "<th>destination</th>";
$display_string .= "</tr>";
while($row = $result->fetch_assoc()){
	$display_string .= "<tr>";
	$display_string .= "<td>$row[ticket_no]</td>";
	$display_string .= "<td>$row[train_no]</td>";
	$display_string .= "<td>$row[username]</td>";
	$display_string .= "<td>$row[email]</td>";
	$display_string .= "<td>$row[fare]</td>";
	$display_string .= "<td>$row[t_amount]</td>";
	$display_string .= "<td>$row[class_type]</td>";
	$display_string .= "<td>$row[source]</td>";
	$display_string .= "<td>$row[destination]</td>";
	$display_string .= "</tr>";
}
$display_string .= "</table>";
echo $display_string;
$conn->close();
?>
