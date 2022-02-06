
<!DOCTYPE html>
<html lang="en">
<head>
<title>RAILWAY MANAGEMENT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the content */
.content {
  background-color: #ddd;
  opacity: 0.9;
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
}

body {
  background-image: url("pic.jpg");
  background-size:cover;

  }
  /* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
	padding: 14px 16px;
  overflow: hidden;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.topnav button {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav button:hover {
  background-color: #ddd;
  color: black;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: Black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/* Right-aligned section inside the top navigation */
.topnav-right {
  float: right;
}
.dropdown.btn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-decoration: none;
  display: block;
  text-align: center;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  text-align: left;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
.topnav .btn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 7px 14px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
</style>
</head>
<body>

<div class="topnav">
<a class="btn"  href="indexnew.php" ><button class="btn" >HOME</button></a>
 </div>
  <div class="topnav-right">
    <a href="aboutus.php">ABOUT US</a>
  </div>
</div>



<div class="content" align='center' >
  <h2>RAILWAY MANAGEMENT SYSTEM</h2>
 
 
<h2>Registration Form</h2>

<div class="container">
  <form>
  <div class="row">
    <div class="col-25">
      <label for="name">Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="fname" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">EMAIL</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="area">area</label>
    </div>
    <div class="col-75">
      <select id="area" name="area">
        <option value="dhaka">DHAKA</option>
        <option value="chottogram">CHOTTOGRAM</option>
        <option value="sylhet">SYLHET</option>
		<option value="khulna">KHULNA</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="password">PASSWORD</label>
    </div>
    <div class="col-75">
      <input type="password" placeholder="Enter Password" name="password" required>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
 </div>

  <div class="container signin">
    <p>Already have an account? <a href="indexnew.php">Sign in</a>.</p>

  </div>

</form> 
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>

</body>
</html>

