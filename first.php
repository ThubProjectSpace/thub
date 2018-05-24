<?php
include('config.php');

session_start();

$email = $_SESSION['email'];
$fisrtname = $_SESSION['first_name'];
$lastname = $_SESSION['last_name'];
// $sql = "SELECT firstlogin FROM register WHERE email='$email'";
// $qurey = mysqli_query($conn,$sql) or die(mysqli_error($conn));
// $row = mysqli_fetch_array($query);
// $login = $row['firstlogin'];

// if($firstlogin==0)
// {
// 	header('Location:first.php');
// }
// else
// {
// 	header('Location:dash.php');
// }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="owl.carousel.min.css">
   	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   	<link rel="stylesheet" type="text/css" href="animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="owl.carousel.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
    body{
    	margin:0;
    	padding:0;
    	overflow-x:hidden;
    }
	</style>
</head>
<body>
	<div class="navbar-fixed">
		<nav class="white" style="box-shadow:none;">
	    	<div class="nav-wrapper">
	      		<a href="#!" class="brand-logo black-text">DIGI</a>
	     		<a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons black-text">menu</i></a>
	      		<ul class="right hide-on-med-and-down">
	      			<li><a class="black-text" href="sass.html">Sass</a></li>
	        		<li class="center"><a class="black-text" href="logout.php"><?php echo $email; ?></a></li>
	        		<li><a class="black-text" href="sass.html"></a></li>
	      		</ul>
	    	</div>
	  	</nav>
  	</div>

  	<ul class="sidenav" id="mobile-demo">
    	<li><a href="sass.html">Sass</a></li>
    	<li><a href="badges.html">Components</a></li>
    	<li><a href="collapsible.html">Javascript</a></li>
    	<li><a href="mobile.html">Mobile</a></li>
  	</ul>
  	<div class="container " style="padding:0px 0px 100px 0px;">
  		<div id="welcome_call" class="animated fadeInDownBig">
	  		<div class="row">
	  		</div>
	  		<div class="row" style="padding:100px 0px 50px 0px;">
	  			<div class="col s12 m6 13 center" style="padding-top:30px;">
	  				<img class="img-responsive circle" width="250" height="250" src="little.jpg">
	  			</div>
	  			<div class="col s12 m6 13 center">
	  				<p class="thin" style="font-size: 55px;">Welcome to DIGI PROFILE</p>
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col s12 m12 13">
	  				<div class="center">
	  					<button id="Welcome_btn" class="btn-flat z-depth-0" style="border:1px solid black;border-radius: 16px;padding:0px 50px 0px 50px;">Next</button>
	  				</div>
	  			</div>
	  		</div>
	  	</div>
	  	<div id="profile" class="animated fadeInRight">
	  		<div class="row">
	  		</div>
	  		<form action="firstpp.php" method="post">
	  			<div id="profile1" class="row center">
	  				<div class="col s12 m3 13">
	  				</div>
		  			<div class="col s12 m9 13 center">
	  					<h3 class="left">Profile Details</h3>
	  					<div class="row">
	  						<div class="input-field col s12 m8 13">
	  							<input type="text" name="username" value="<?php echo $fisrtname.' '.$lastname; ?>" readonly id="username">
	  							<label for="username">Username</label>
	  							</div>
	  						</div>
						<div class="row">
	  						<div class="input-field col s12 m8 13">
	  							<input type="text" name="dob"  placeholder="DD-MM-YYYY" id="dateofbirth">
	  							<label for="dateofbirth">Date of Birth</label>
	  						</div>
	  					</div>
	  					<div class="row">
	  						<div class="input-field col s12 m8 13">
	  							<input type="text" name="phone" placeholder="+91XXXXXXXXXX" id="phone">
	  							<label for="phone">Phone Number</label>
	  						</div>
	  					</div>
	  					<div class="row">
	  					<div class="input-field col s12 m8 13">
	  							<input type="text" name="location" placeholder="Location" id="location">
	  							<label for="location">Location</label>
	  						</div>
	  					</div>
	  					<div class="right">
	  						<a id="btn" class="btn-flat z-depth-0" style="border:1px solid black;border-radius:16px;padding:0px 20px 0px 20px;">Save & Continue</a>
	  					</div>
					</div>
				</div>
				<div id="profile2" class="animated fadeInRight">
					<div class="row">
			  			<div class="col s12 m3 13">
	  					</div>
	  					<div class="col s12 m9 13">
	  						<h3 class="thin">Social Media</h3>
	  						<div class="row">
	  							<div class="input-field col s12 m8 13">
	  								<input type="text" name="facebook_link"  placeholder="http://www.facebook.com/xxx" id="facebook">
	  								<label for="facebook">Facebook</label>
	  							</div>
	  						</div>
	  						<div class="row">
	  							<div class="input-field col s12 m8 13">
	  								<input type="text" name="twitter_link" placeholder="http://www.twitter.com/xxx" id="twitter">
	  								<label for="twitter">Twitter</label>
	  							</div>
	  						</div>
	  						<div class="row">
	  							<div class="input-field col s12 m8 13">
	  								<input type="text" name="linkedin_link" placeholder="http://www.linkedin.com/xxx" id="linkedin">
	  								<label for="linkedin">Linkedin</label>
	  							</div>
	  						</div>
	  						<div class="row">
	  							<div class="input-field col s12 m8 13">
	  								<input type="text" name="googleplus_link" placeholder="http://www.googleplus.com/xxx" id="googleplus">
	  								<label for="googleplus">Google Plus</label>
	  							</div>
	  						</div>
	  						<div class="right">
	  							<button type="submit" id="social_btn" name="submit" class="btn-flat z-depth-0" style="border:1px solid black;border-radius:16px;">Save Changes</button>
	  						</div>
	  					</div>
					</div>
		  		</div>
		  	</form>
		</div>
	</div>
    <footer style="padding-top:80px;padding-bottom:50px;background-color:#eeeeee;">
        <div class="center">
            <h3 class="thin">DIGI PROFILE</h3>
            <small style="position:relative">Designed by skydo's </small>
        </div> 
    </footer>
  	<script>
  		$(document).ready(function(){
  			$('.sidenav').sidenav();
  			$('#profile').hide();
  			$('#social1').hide();
  			$('#Welcome_btn').click(function(){
  				$('#welcome_call').hide();
  				$('#profile2').hide();
  				$('#profile').show();
  			});
  			$('#btn').click(function(){
  				$('#profile2').show();
  				$('#welcome_call').hide();
  				$('#profile1').hide();
  			})
  		});
  	</script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>