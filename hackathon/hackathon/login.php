<?php
session_start();
?>

<!DOCTYPE html>
<head>
<title>HACKATHON 1.0</title>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	 <link rel="stylesheet" href="fest/css/bootstrap.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #33;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
 #navbar {
  overflow: hidden;
  background-color: #33;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 10;
  border: none;
  border-radius: 4px ;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 300px;
}
body {
 background-image: url("img/bg.jpg");
 background-color: #cccccc;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head><ul class='topnav'>
  <li><a href="mainpage.php"><i class="fa fa-fw fa-home"></i>HOME</a></li>
  <li><a href="ss.php"><i class="fa fa-fw fa-send"></i>REGISTRATION</a></li>
  <li><a href="login.php"><i class="fa fa-fw fa-user"></i>COORDINATOR LOGIN</a></li>
  <li><a href="results_data.php"><i class="fa fa-fw fa-search"></i>RESULTS</a></li>
  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>CONTACT US</a></li>
  <li style="float:right"><a href="about.html">ABOUT</a></li></ul></ul>
<body><BR>

<h1 align="center"><B>HACKATHON 1.0</B></h1>


  
</ul>
</head><br>
<body>
<div align="center"><br>
 <h1 align="center">COORDINATOR LOGIN</h1>
 
   <form action="#" method="post">
   
   
   <input type="text" name="uname" placeholder="USER NAME"><br /><br />
   <input type="password" name="pwd" placeholder="PASSWORD"><br /><br />
    
   <input type="submit" name="login" value="LOGIN"><br><br></form>
   
   </div><br><br><br><br>
</body>
</html>
