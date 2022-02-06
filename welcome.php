<?php

include('lock.php');
//session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>RAILWAY MANAGEMENT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Lucida Bright;
 
  background-image: url("picadmin.jpg");
  background-size:cover;
  transition: background-color .5s;
}
.container {
  border-radius: 5px;
  padding: 20px;
  background: white;
  opacity: 0.85;
  border: 20px solid rgba(0, 0, 0, 0.3);
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:  #e9e9e9;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: black;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
* {
  box-sizing: border-box;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}




/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
pre span { display: block; }
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  
<h1> ADMIN PANEL</h1> 
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<h2><a href="adminshowtrain.php">Show trains</a></h2>
<h2><a href="adminshowticket.php">Show tickets</a></h2>
<h2><a href="adminshowcancel.php">Show cancels</a></h2>
<h2><a href="adminconfirmcanajax.php">confirm cancels</a></h2>

<h2><a href="adminupdatefareajax.php">Update Train Fare</a></h2>
<h2><a href="logout.php">Sign Out</a></h2>

</div>
<div id="main">
  <h1>RAILWAY MANAGEMENT</h1>
   <div style="background-color:#ddd">
   <span style="font-size:30px;cursor:pointer" onclick="openNav()"style="background-color:#ddd;">&#9776;MENU</span>
</div>
<div class="container">
  
  <p>WELCOME ADMIN</p>
</div>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
</body>

</html>

