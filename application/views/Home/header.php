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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  </head>
   <div id="fh5co-page" style="height: 100%;">              
    <header id="fh5co-header" role="banner" style="display:block; position:absolute;">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1><a href="<?php echo base_url() ?>">Rental Finder<span>.</span></a></h1>             
                    <nav role="navigation" class="nav navbar-nav navbar-right">
                     <ul >
                        <?php if(!isset($FULLNAME)){ ?>
                          <li><a href="">Rent</a></li>
                          <li><a href="">Promo</a></li>
                          <li><a href="">Contact Us</a></li>
                          <li class="cta">
                            <a href="<?php echo base_url('Login'); ?>">Login</a>
                          </li>
                          <li class="cta"><a href="<?php echo base_url('Register') ?>">Signup</a></li>
                          <?php } else{ ?>
                          <?php echo "<li><a href=\"".base_url($user_type)."\">".$FULLNAME."</a></li>"; ?>
                          <li><a href="">Rent</a></li>
                          <li><a href="">Promo</a></li>
                          <li class="cta"> <a href="<?php echo base_url('User/logout'); ?>">Logout</a></li>
                        <?php } ?>
                     </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
  <?php $bgimage = base_url('assets/images/new2.jpg'); ?>
  <body style="background-image: url('<?php echo $bgimage?>');background-attachment:fixed;height:130%; max-width: 100%; overflow-x: hidden;">
