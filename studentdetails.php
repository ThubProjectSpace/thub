<!DOCTYPE html>
  <html> 
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" type="text/css" href="barchart1.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    </head>

    <body>
        <nav class=" light-blue darken-1">

    <div class="nav-wrapper ">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="homepage.html"><i class="material-icons">home</i></a></li>
        <li><a href="#"><i class="material-icons">search</i></a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i class="material-icons right">person arrow_drop_down</i></a></li>
 

        
        
    </div>
  </nav>
      <div class="container">
        <div class="row">
          <div class="col s12 m6 13 left " style="padding:30px 0px 30px 0px;height="100" width="100">
            <img class="img-responsive circle" width="100" height="100" src="student1.jpg">
          </div>
          <div class="col s12 m6 13 right">
            <p><span class="left"><b>NAME:</b></span></span><span><b>HARITHA</b></span></p>
            <p><span class="left"><b>ROLLNO:</b></span></span><span><b>15MH1A05531</b></span></p>
            <p><span class="left"><b>COLLEGE:</b></span></span><span><b>ACE</b></span></p>
            <p><span class="left"><b>BRANCH:</b></span></span><span><b>CSE</b></span></p>
          </div>
        </div> 
      </div>
      
  
    <div class="row">
      <div class="col s12 m12 13 " style="">
        <h3 class="thin" style="position: absolute;">Skills</h3>
        <p class="right" style="margin-top:40px;"><a id="model"  href="#skillupload" class="btn-flat z-depth-0 modal-trigger" style="text-align:center;border-radius:16px;padding:0px 30px 0px 30px; border:1px solid #2196F3;">ADD</a></p>
      </div>
    </div>  
  </div>

    
     <div class="row">
      <div class="col s12 m6 13">
        <div class="row">
          <div class="col s12 m6 13">
            <p><b>PYTHON</b></p>
          </div>
          <div class="col s12 m6 13">
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="#!">one</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider"></li>
              <li><a href="#!">three</a></li>
            </ul>
            
                
                
                    <li><a class="dropdown-trigger" href="" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>


        


    



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
                  $(".dropdown-trigger").dropdown();
        });
    </body>
  </html>
        