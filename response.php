<?php

session_start();

?>

<?php

// Now Let us write the Form Validation Part for the Registration Form 
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
header('Expires: 0');



?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset: UTF/8">
        <meta http-equiv="Cache-Control" content="no-cache , no-store , must-revalidate ">
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Expires" content="0">
        <meta name="author" content="Akhil Pandey , Om Bhallamudi">
        <meta name="description" content="TEDx is a prestigious talk event hosted that
        which is independent of the TED events and is a great place where the ideas are
        talked about.">
        <meta name="keywords" content="TEDx , TEDx2015 , TEDx gitam university , TEDx GITAM University">

        <title>TEDx | Team</title>
  

    <link href="include/css/bootstrap.css" rel="stylesheet">
    <link href="include/css/prettyPhoto.css" rel="stylesheet">
    <link href="include/css/main.css" rel="stylesheet">
    <link href="include/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    
  </head>

  <body>

      <div class="container">
        <div class="highlight"></div>
        <div class="row">
            <div class="col-md-3">
                <img src="img/logo.png">
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="section">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-pills nav-justified">
                                <li class="dropdown">
                                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">2015
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#Speakers">Speakers</a></li>
                                            <li><a href="#">Rules</a></li>
                                        </ul>
                                    </a>
                                </li>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="speakers.html">Speakers</a></li>
                                <li><a href="venue.html">Venue</a></li>
                                <li><a href="partners.html">Partners</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-4">
                           
                       </div>
                        
                        <div class="col-md-8">
                            <h2 id="startdate"><small>Join us for the next session on January</small><span class="red">10th</span><small>, 2015</small></h1>
                            <nav class="register" id="register-menu">
                                <div class="register-wrap">
                                    <a href="rules.html">How to </a>
                                    <a href="onl.html">Online </a>
                                    <a href="off.html">Offline</a>
                                </div>
                                <div id="registerToggle"><button class="btn btn-ted">Register</button></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

  <div class="container" id="services" name="services">
            <br>
            <br>
            <div class="row">
                <h2 class="centered"><span class="red">THANK YOU</span></h2>
                <hr>
                <br>
                <div class="col-lg-offset-2 col-lg-8">
                <form id="response" name="response" method="get" action="index.php?name=<?php echo $_SESSION['name']; ?>" enctype="multipart/form-data">
                    <h4>Hey <?php echo $_GET['name']; ?> you have successfully filled the registration form ,so
                    an invitation is sent to the email address <a href="#"><?php echo $_GET['email']; ?></a> along
                    with a unique code which identifies that you have completed the registration .So keep that code 
                    along with you as it is necessary for communication purpose.</h4>

                    <h4><code>Note:</code> In order to complete the registration process please bring that unique 
                    code to the team so that we can complete the payment process.
                    </h4>
               </form>    
  
                </div>
            </div>
            

        </div>


 
<footer>
  <div class="container">
   <hr>
    <p class="centered">All Rights Reserved.&copy; <a target="_blank" href="https://www.facebook.com/TEDxGITAMUniversity" class="red">TEDxGITAMUniversity 2015</a></p>
  </div>
</footer>



    <script src="include/js/jquery.js"></script>
    <script src="include/js/bootstrap.min.js"></script>
    <script src="include/js/jquery.isotope.min.js"></script>
    <script src="include/js/jquery.prettyPhoto.js"></script>    
    <script src="include/js/main.js"></script>

  </body>
</html>
