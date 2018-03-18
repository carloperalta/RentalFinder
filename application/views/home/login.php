<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rental Finder</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is a collaboration project of BSCS-3A and BSCS-3B" />
  <meta name="keywords" content="rental, rent, rental finder" />
  <meta name="author" content="Group 7" />

  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />


  <link rel="shortcut icon" href="favicon.ico">
  <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
   
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
   
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
   
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css">
 
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

 
  <script href="<?php echo base_url();?>assets/js/modernizr-2.6.2.min.js"></script>
   

  </head>
  <body style="background-image: url('<?php echo base_url();?>assets/images/new2.jpg');background-attachment:fixed;height:130%; max-width: 100%; overflow-x: hidden;">
    <header id="fh5co-header" role="banner" style="display:block; position:absolute;">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1><a href="<?php echo base_url() ?>">Rental Finder<span>.</span></a></h1>             

                    <nav role="navigation" class="nav navbar-nav navbar-right">
                     <ul >
                        <li><a href="<?php echo base_url('Posts');?>">Rent</a></li>
                        <li><a href="">Promo</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li class="cta">
                          <a href="<?php echo base_url('Login');?>">Login</a>
                        </li>
                        <li class="cta"><a href="<?php echo base_url('Register');?>">Signup</a></li>

                     </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
<div class="row" >

  <div class="container" >
    <div class="row">
      <div class="col-md-12" style="margin:100px 0 0 0">
        
        <div class="well">
          <div class="container-fluid">
            <div class=" col-md-6 align-content-center">
              <img class="img-fluid" src="<?php echo base_url('rental_logo.png'); ?>" alt="Logo">
            </div> 
          <div class="col-md-6">
            <div class="well">
              <div class="container-fluid">
                <form action="<?php base_url('Login'); ?>" method="post">
              <div class="form-title-row">
                <h3>Log In</h3>
              </div>
              <?php
                  if(!empty($authUrl)) {
                   echo '<a href="'.$authUrl.'"><img src="'.base_url().'assets/images/flogin.png" alt="" style="width:210px;height:41px;"/></a>';
                    } else{
                    ?>
              <div style="padding-left:6px" class="wrapper">
              <p><b>Want to logout? <a href="<?php echo $logoutUrl; ?>">Logout</a></b></p>
              </div>
              </div>
              <?php } ?> 
              <hr>
              <?php
                if ( $this->session->flashdata('error')) {
                  echo $this->session->flashdata('error');
                }
                ?>
              <div class="form-group">
                <label for="email"><h3>Email:</h3></label>
                <input type="text" name="email" class="form-control" id="email" required 
                style="height: 50px; width:100%">
               </div> 

              <div class="form-group">
                <label for="password"><h3>Password:</h3></label>
                <input type="password" name="password" class="form-control" id="password" required 
                style="height: 50px"> 
              </div>
              <div class="form-group">
                <a href="" >Forgot Password?</a>
              </div>
              <input class="btn btn-primary" type="submit" name="Login" value="Login" id="Login_button" style="float: right;">
              </form>
              </div>
            </div>
          </div>
          </div>
        </div>
          

      </div>

    </div>
  </div>
</div>

</body>
<footer id="fh5co-footer" role="contentinfo" style="display: block;">

  <div class="container"  style="color:#ffffff;"">
    <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
      <h3>About Us</h3>
      <p> Rental Finder is a website that will make your rental experience hassle free </p>
    </div>
    <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
      <h3>Our Services</h3>
      <ul class="float">
        <li><a href="#">Rent</a></li>
        <li><a href="#">Condominium</a></li>
        <li><a href="#">Apartment</a></li>
        <li><a href="#">Villa</a></li>
      </ul>


    </div>

    <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
      <h3>Follow Us</h3>
      <ul class="fh5co-social">
        <li><a href="#"><i class="icon-twitter"></i></a></li>
        <li><a href="#"><i class="icon-facebook"></i></a></li>
        <li><a href="#"><i class="icon-google-plus"></i></a></li>
        <li><a href="#"><i class="icon-instagram"></i></a></li>
      </ul>
    </div>

      <div class="col-md-12 fh5co-copyright text-center">
        <p>&copy; 2018 web:rental finder. All Rights Reserved. <span">Designed with <i class="icon-heart"></i> by <a href="http://rentalfinder.co/" target="_blank">rentalfinder.com</a> Demo Images by <a href="" target="_blank">Group7</a></span></p>
      </div>

    </div>
  </footer>
  </div>


  <!-- jQuery -->
  <script type="text/javascript" href="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
  <!-- jQuery Easing -->
  <script type="text/javascript" href="<?php echo base_url('assets/js/jquery.easing.1.3.js');?>"></script>
  <!-- Bootstrap -->
  <script type="text/javascript" href="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  <!-- Waypoints -->
  <script type="text/javascript" href="<?php echo base_url('assets//js/jquery.waypoints.min.js');?>"></script>
  <!-- Flexslider -->
  <script type="text/javascript" href="<?php echo base_url('assets/js/jquery.flexslider-min.js');?>"></script>

  <!-- MAIN JS -->
  <script type="text/javascript" href="<?php echo base_url('assets/js/main.js');?>"></script>

  </body>
</html>