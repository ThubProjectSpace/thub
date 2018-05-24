<?php
include('config.php');

session_start();

if($_SESSION['emailadmin'])
{
  $firstname = $_SESSION['adminfirst_name'];
  $lastname = $_SESSION['adminlast_name'];
}
else
{
  header('Location:adminlogin.php');
}

$sql = "SELECT * FROM register";
$sql_query = mysqli_query($conn,$sql) or die(mysqli_error($conn));

$sql_fetch = mysqli_num_rows($sql_query);

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
    <style>
    body,html{
    	margin:0;
    	padding:0;
    	height:100%;
    	background-color:;
    }
   	#topbarsearch .input-field .prefix { 
        width:0rem !important;    
    }        
    #topbarsearch nav ul li:hover, nav ul li.active {
        background-color: none !important;
    }
    .input-field .prefix ~ input, .input-field .prefix ~ textarea, .input-field .prefix ~ label, .input-field .prefix ~ .validate ~ label, .input-field .prefix ~ .autocomplete-content{
            margin-left: 2rem !important;
    }
	</style>	

</head>
<body>
	<div class="navbar-fixed">
		<nav class="white" style="box-shadow:0px 0px 0.01px black;">
	    	<div class="nav-wrapper">
	      		<a href="#!" class="brand-logo black-text">DIGI</a>
	     		<a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons black-text">menu</i></a>
	      		<ul class="right hide-on-med-and-down">
	      			<li><a class="black-text" href="kick.php"><i ckass="material-icons"></i></a></li>
	      			<li><a class="black-text" href="dash.php"><i class="material-icons">home</i></a></li>
	        		<li class="center"><a class="black-text dropdown-trigger" style="outline: none;" data-target='dropdown1' href="logout.php"><i class="material-icons">person</i></a></li>
	        		<li><a class="black-text" href="sass.html"></a></li>
	      		</ul>
	    	</div>
	  	</nav>
  	</div>
  <ul id='dropdown1' class='dropdown-content' style="outline: none;">
    <li><a href="accountsettings.php">Account Settings</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  	<ul class="sidenav" id="mobile-demo">
    	<li><a href="sass.html">Sass</a></li>
    	<li><a href="badges.html">Components</a></li>
    	<li><a href="collapsible.html">Javascript</a></li>
    	<li><a href="mobile.html">Mobile</a></li>
  	</ul>
  	<div class="container">
		<div class="center row">
            <div class="col s12 m6 13" >
               	<div class="row" id="topbarsearch">
                    <div class="input-field col s6 s12 red-text">
                       	<i class="red-text material-icons prefix">search</i>
                        <input type="text" placeholder="search by id" id="autocomplete-input" class="autocomplete red-text" >
                    </div>
                </div>
            </div>
        </div> 
    <table class="striped" style="margin:20px 0px 100px 0px;">
      	<thead>
          	<tr>
            	<th>S.NO</th>
              	<th>STUDENT NAME</th>
              	<th>STUDENT ID</th>
              	<th>VIEW</th>
              	<th>EDIT</th>
              	<th>DELETE</th>
	        </tr>
        </thead>
        <tbody>
            <?php
            $i=0;
            while($rows = mysqli_fetch_array($sql_query))
            {
            ?>
          	<tr id="row<?php echo $rows['id'];?>">
            	<td><?php echo $i=$i+1; ?></td>
            	<td><?php echo $rows['first_name'].' '.$rows['last_name']; ?></td>
            	<td><?php echo $rows['id']; ?></td>
            	<td><a tuype="submit" class="btn z-depth-0" href=" " style="margin-left: 0px;padding: 0px 20px 0px 20px;border-radius: 16px;color:#000000;background-color: #ffffff;border:1px solid #000000;">view</a></td>
	            <td><a class="btn z-depth-0" href=" " style="margin-left: 0px;padding: 0px 20px 0px 20px;border-radius: 16px;color:#000000;background-color: #ffffff;border:1px solid #000000;"><i class="material-icons">edit</i></a>
            	</td>
            	<td><a href= "#row<?php echo $rows['id']; ?>" onclick="delete_row(<?php echo $rows['id'];?>);" id="remove" style="border:1px solid black;border-radius:16px;padding:0px 20px 0px 20px;" class=" btn-flat "><i class="material-icons small">delete</i></a>
            	</td>
          	</tr>
            <div class="modal" id="ro<?php echo $rows['id'];?>">
              <div class="modal-content">
                  <input type="hidden" name="deleteid" value="<?php echo $rows['id']; ?>">
                  <p>Are you sure you want to delete this account?</p>
                  <button name="delete"  id="delete_button<?php echo $rows['id'];?>" onclick="delete_row('<?php echo $rows['id'];?>');" class="btn-flat z-depth-0" style="border:1px solid black;border-radius:16px;">Delete</button>
              </div>
            </div>
            <?php
            }
            ?>         
        </tbody>
      </table>
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
  		$('.modal').modal();
      $('.dropdown-trigger').dropdown();
        $('input.autocomplete').autocomplete({
            data: {
                    "Apple": null,
                    "Microsoft": null,
                    "Google": null,
                    "Gargle":null
              }
        });
  	});
  </script>
  <script>
    function delete_row(id)
    {
        $.ajax({
          type:'post',
          url:"delete.php",
          data:{
            delete_row:"delete_row",
            row_id:id,
          },
          success:function(response){
            if(response=="success")
            {
              var row = document.getElementById("row"+id);
              row.parentNode.removeChild(row);
            }
          }
        });
    }
  </script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>