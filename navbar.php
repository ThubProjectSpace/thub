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
    <style>
    body,html{
    	margin:0;
    	padding:0;
    	height:100%;
    	background-color:;
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
	      			<?php
	      				if($_SESSION['emailadmin'])
	      				{
	      			?>
	      			<li><a class="black-text" href="dash.php"><i class="material-icons">home</i></a></li>
	        		<li class="center"><a class="black-text dropdown-trigger" style="outline: none;" data-target='dropdown1' href="logout.php"><i class="material-icons">person</i></a></li>
	        		<?php
	        			}
	        			else
	        			{
	        		?>
	      				<li><a class="black-text" href="dash.php">Profile</a></li>
	        			<li class="center"><a class="black-text dropdown-trigger" data-target="dropdown1" href=""><?php echo $email; ?></a></li>
	    			<?php
	    				}
	    			?>    	
	  	      		<li><a class="black-text" href="sass.html"></a></li>
	      		</ul>
	    	</div>
	  	</nav>
  	</div>
