<!DOCTYPE html>
<head>
<title>HACKATHON 1.0</title>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	 <link rel="stylesheet" href="fest/css/bootstrap.css">
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
.about{
height:px;
  padding:20px;
}
 .col-sm-4 {
  border: 2px solid #C70039;
  padding: 10px;
 border-radius: 50px 20px;}
  .col-sm-3 {
  border: 2px solid #C70039;
  
  padding: 10px;
  border-radius: 50px 20px;}

body {
 background-image: url("img/bg.jpg");
 background-color: #cccccc;
}
 #navbar {
  overflow: hidden;
  background-color: #333;
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
  padding: 10px 50px;
  margin: 8px 10;
  border: none;
  border-radius: 4px ;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

#a {
  border-radius: 100px 100px;
  background-color: #f2f2f2;
  padding: 0px 300px;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->



<!--<center><img src="img/111.jpg"><center><br>-->
<div class="w3-top">
<div class="w3-bar">
<ul>
  <li><a href="mainpage.php"><i class="fa fa-fw fa-home" class="w3-bar-item w3-button w3-padding-large"></i>HOME</a></li>
  <li><a href="ss.php"><i class="fa fa-fw fa-send"></i>REGISTRATION</a></li>
  <li><a href="login.php"><i class="fa fa-fw fa-user"></i>COORDINATOR LOGIN</a></li>
  <li><a href="results_data.php"><i class="fa fa-fw fa-search"></i>RESULTS</a></li>
  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>CONTACT US</a></li>
  <li style="float:right"><a href="about.html">ABOUT</a></li></ul></div></div><br><br>
  </head>
  <body><br>
<h1 align="center"><b>HACKATHON 1.0</b></h1>


  
<br>
<div id='a'>
      <br> <h1 align="center">REGISTRATION FORM</h1>
	   



<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("events").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("events").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getevents.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form action="ss.php" method="post" align='center'>
<select name="event_type" onchange="showUser(this.value)">
  <option value="">Select a event type:</option>
  <option value="HACKATHON">HACKATHON</option>
  
  
  </select>

<br><br>

<select id="events" name="events"><b>Events info will be listed here...</b></select>


	
	
	
<br><br>	<input type="text" name="tname" placeholder="NAME OF TEAM" required ><br ><br >
	<input type="text" name="name" placeholder="NAME OF TEAM LEADER" required ><br ><br >
	<input type="text" name="usn" placeholder="COLLEGE" required><br ><br >
	<select name="branch">
	
    <option>BRANCH</option>
    <option value="IS">IS</option>
    <option value="CS">CS</option>
    <option value="MECH">MECH</option>
    <option value="CIVIL">CIVIL</option>
    <option value="EC">EC</option>
    <option value="BT">BT</option>
    <option value="MBA">MBA</option>
	</select><br /><br />
	<select name="sem" required>
    <option >SEM</option>
    <option value="2">2</option>
    <option value="4">4</option>
    <option value="6">6</option>
    <option value="8">8</option>
    

 </select><br /><br />
       <input type="text" placeholder="MOBILE NUMBER" name="mobile" pattern="[1-9][0-9]{9}" required><br /><br /> 
	   <input type="text" name="email" placeholder="E-MAIL ID" required ><br ><br >
	   <textarea  name="msg" rows="4" cols="60" placeholder="TEAM MEMBERS NAME"></textarea><br><br>
	   <br><b><h3>REGISTRATION FEE : 250 rs<h3><img src="img/upi.jpeg"><br><br>
	   <input type="text" name="tid" placeholder="TRANSACTION ID" required ><br ><br >
	   <input type="submit" name="submit" value="REGISTER" ><br><br>
   </div>
</form>	   
</body>
</html>

<?php

include("db_conection.php");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if(isset($_POST['submit']))
 {
$event_type = mysqli_real_escape_string($link, $_POST['event_type']);
$events = mysqli_real_escape_string($link, $_POST['events']);
$tname = mysqli_real_escape_string($link, $_POST['tname']);
$name = mysqli_real_escape_string($link, $_POST['name']);
$usn = mysqli_real_escape_string($link, $_REQUEST['usn']);
$branch = mysqli_real_escape_string($link, $_REQUEST['branch']);
$sem = mysqli_real_escape_string($link, $_REQUEST['sem']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$msg = mysqli_real_escape_string($link, $_POST['msg']);
$tid = mysqli_real_escape_string($link, $_REQUEST['tid']);

$check_user="select * from info WHERE events='$events' and usn='$usn' and tid='$tid'";

    $run=mysqli_query($link,$check_user);

    if(mysqli_num_rows($run)>0){     
		echo '<script>';
		echo 'alert("USN already exist")';
		echo '</script>';
    }else{
		  $query ="select count(*) as total from info where event_type='$event_type' and events='$events'";
		  $result=mysqli_query($link,$query);
		  $data=mysqli_fetch_assoc($result);
		  $count=$data['total'];
			$count=$count+1;
			
		$query2="select code from event_master where event_type='$event_type' and events='$events'";
		  $result2=mysqli_query($link,$query2);
		  $data2=mysqli_fetch_assoc($result2);
		  $code=$data2['code'];		
		$part_id=$code."-".$count;
		
		
        $sql = "INSERT INTO info (part_id,events,event_type,tname,name, usn, branch,sem, mobile,email,msg,tid) VALUES ('$part_id','$events','$event_type','$tname','$name', '$usn', '$branch','$sem','$mobile','$email','$msg',$tid)";
         mysqli_query($link,$sql);
		 
		 if($events=='EVENTS')
		 {
			 $sql2 = "delete from info where events='EVENTS'";
			 $res = $link-> query($sql2);
			 echo '<script>';
		echo "alert('Registration unsuccesfull....! PLEASE CHOOSE EVENT')";
		echo '</script>';
		 }	 
		  else{
	
		  $message="Registration successful...!!! Your ID is : $part_id ";
		  $msg="Registration successful...!!!";
		  $msg11="TAKE A SCREENSHOT";
		  $msg1="Transaction will be cross checked and conformation will be sent to Registered E-MAIL";
		  $msg2="YOUR ID IS : $part_id";
		  $msg3="TEAM LEADER NAME : $name";
		  $msg10="REGISTERED E-MAIL : $email ";
          $msg4="COLLEGE : $usn ";
		  $msg5="EVENT TYPE : $event_type";
         $msg6="EVENT : $events" ;
		 $msg7="SEM :$sem";
         $msg8="BRANCH : $branch";
         $msg9="MOBILE : $mobile";

        echo '<script>';
		echo "alert('$message')";
		echo '</script>';
      }
	}
 }
?><br><br>
<center>
 <div class="alert alert-success"> 
<h2><p><?php
if(isset($_POST['submit'])){
  echo'<b>';
echo "$msg";echo'<br>';echo'<br>';
echo "$msg1";echo'<br>';echo'<br>';
echo "-: $msg11 :-"; echo'<br><br>';
echo "$msg2"; echo'<br>';
echo "$msg3";echo'<br>';
echo "$msg10";echo'<br>';
echo "$msg4";echo'<br>';
echo "$msg5";echo'<br>';
echo "$msg6";echo'<br>';
echo "$msg7";echo'<br>';
echo "$msg8";echo'<br>';
echo "$msg9"; }
      ?>
	  <p></h2></div></center>
