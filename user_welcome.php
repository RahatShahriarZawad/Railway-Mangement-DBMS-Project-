<?php

include('lock_user.php');
//session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>RAILWAY MANAGEMENT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Lucida Bright;
 
  background-image: url("picuser.jpg");
  background-size:cover;
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


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}



/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
* {
  box-sizing: border-box;
}


body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
 
  background-image: url("picuser.jpg");
  background-size:cover;
}

/* Style the side navigation */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:rgb(156, 190, 71);
  overflow-x: hidden;
}


/* Side navigation links */
.sidenav a {
  color: white;
  padding: 16px;
  text-decoration: none;
  display: block;
}

/* Change color on hover */
.sidenav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
  
}

}
</style>
</head>
<body>
<div id="main">
  <h1>RAILWAY MANAGEMENT</h1>
   <div style="background-color:#ddd">
   <span style="font-size:30px;cursor:pointer" onclick="openNav()"style="background-color:#ddd;">&#9776;Menu </span>
</div>

<div id="mySidenav" class="sidenav">
  
<h1>USER PANEL</h1><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
<h2><a href="searchfinalv4.php">Search train</a></h2>

<h2><a href="booking.php">book ticket</a></h2>

<h2><a href="usertikajax.php">check booking</a></h2>

<h2><a href="userreqcanajax.php">Request Cancellation</a></h2>

<h2><a href="logout.php">Sign Out</a></h2>

</div>



<div id="main">

<h2>Welcome USER</h2>
 
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
