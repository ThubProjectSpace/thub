<?php
include('config.php');

session_start();

if($_SESSION['emailadmin'])
{
  $firstname = $_SESSION['adminfirst_name'];
  $lastname = $_SESSION['adminlast_name'];
}
else {
  header('Location: adminlogin.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="owl.carousel.min.css">
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="owl.carousel.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <div class="navbar-fixed">
  	<nav class="white	" style="box-shadow: none;">
	    <div class="nav-wrapper">
	      	<a href="#!" class="brand-logo black-text">Logo</a>
	     	<a href="#" data-target="mobile-demo" class="sidenav-trigger balck-text"><i class="material-icons black-text">menu</i></a>
	      	<ul class="right hide-on-med-and-down">
	        	<li><a  class="black-text" href="homepage.php"><i class="material-icons">home</i></a></li>
	        	<li><a  class="black-text" data-target='dropdown1' class="dropdown-trigger"><i class="material-icons">person</i></a></li>
	        	<li><a href=""></a></li>
	      	</ul>
	    </div>
  	</nav>
  </div>
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="adminsettings.php">Account Settings</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="homepage.php">Home</a></li>
    <li><a href="adminsettings.php">Account Settings</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>

	<div class="profile">
		<div class="container">
			<div class="row">
				<div class="col s12 m12 13 center" style="padding:30px 0px 30px 0px;">
					<img class="img-responsive circle" width="100" height="100" src="img.jpg">
					<p style="font-weight: 600;"><?php echo $firstname.' '.$lastname; ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="divider"></div>
	<div class="sub_heading blue">
		<div class="container">
			<div class="row" style="margin-bottom: 0px;">
				<div class="col s12 m6 13">
				</div>
				<div class="col s12 m6 13 center">
					<p><a class="btn-flat center white-text" href="studendetails.php" style="border:1px solid white" style="padding:200px;">All List</a></p>
				</div>
			</div>
		</div> 
	</div>
	<div class="divider"></div>
  	<div class="main">
  		<div class="container" style="padding:40px 0px 40px 0px;">
  			<div class="row" style="margin:0;">
          <div class="col s12 m2 13">
        </div>
  				<div class="col s12 m7 13 center" >
  					<p><span class="left" style="font-size:20px;font-weight:bold;">Total No.Of Stubents Enrolled</span><span class="center" style="font-size:20px;font-weight: bold;">80</span></p>
  				</div>
  				<div class="col s12 m3 13 center" >

  				</div>
  			</div>
        <div class="row center">
          <div class="col s12 m3 13 center" style="box-shadow:0px 0px 0.01px grey;padding:5px;margin:10px;">
            <img class="img-responsive" width="150" height="150" src="python.png">
            <p style="font-size:30px;margin: 0;padding:0;">Python</p>
            <p>30</p>
          </div>
          <div class="col s12 m3 13 center" style="box-shadow:0px 0px 0.01px grey;padding:5px;margin:10px;">
            <img class="img-responsive" width="150" height="150" src="cisco.jpg">
            <p style="font-size:30px;margin: 0;padding:0;">Cisco</p>
            <p>30</p>
          </div>
          <div class="col s12 m3 13 center" style="box-shadow:0px 0px 0.01px grey;padding:5px;margin:10px;">
            <img class="img-responsive" width="200" height="150" src="Salesforce1.png">
            <p style="font-size:30px;margin: 0;padding:0;">Salesforce</p>
            <p>30</p>
          </div>
          <div class="col s12 m3 13 center" style="box-shadow:0px 0px 0.01px grey;padding:5px;margin:10px;">
            <img class="img-responsive" width="150" height="150" src="android.png">
            <p style="font-size:30px;margin: 0;padding:0;">Android</p>
            <p>30</p>
          </div>
        </div>
  		</div>
  	</div>
  <script>
  	$(document).ready(function(){
  		$('.sidenav').sidenav();
  		$('.dropdown-trigger').dropdown();
  	});
  </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>