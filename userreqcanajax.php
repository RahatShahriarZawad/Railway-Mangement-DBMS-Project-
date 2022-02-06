
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



.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
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

table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr{background-color: #f2f2f2}

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
<h2>Request Cancellation:</h2>

<div class="container">
  <form action="bookingcon.php">
  
  <div class="row">
    <div class="col-25">
      <label for="username">username</label>
    </div>
    <div class="col-75">
      <input type="text" id="username" name="username" placeholder="enter username...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="enter email...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="train_no">train_no</label>
    </div>
    <div class="col-75">
      <input type="text" id="train_no" name="train_no." placeholder="enter train_no...">
    </div>
  </div>
   <div class="row">
    <div class="col-25">
      <label for="ticket_no">ticket_no</label>
    </div>
    <div class="col-75">
      <input type="text" id="ticket_no" name="ticket_no" placeholder="enter ticket no...">
    </div>
  </div>
  
  
  <div class="row">
<input type='button' onclick='ajaxFunction()' value='Request Cancellation'/>
<div id='ajaxDiv'>
</div>

  </div>
   
  </form>

</form> 
</div>


</body>
</html>
<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!
	
 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 }
 // Create a function that will receive data 
 // sent from the server and will update
 // div section in the same page.
 ajaxRequest.onreadystatechange = function(){
   if(ajaxRequest.readyState == 4){
      var ajaxDisplay = document.getElementById('ajaxDiv');
      ajaxDisplay.innerHTML = ajaxRequest.responseText;
   }
 }
 // Now get the value from user and pass it to
 // server script.
 var username = document.getElementById('username').value;

 var email = document.getElementById('email').value;
 var train_no = document.getElementById('train_no').value;
 var ticket_no = document.getElementById('ticket_no').value;
 
 var queryString = "?username=" + username ;
 queryString +=  "&email=" +email+"&train_no=" + train_no+"&ticket_no=" + ticket_no;
 ajaxRequest.open("GET", "canceluseajax.php" + queryString, true);
 ajaxRequest.send(null); 
}
//-->
</script>
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

