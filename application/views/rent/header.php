
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->



	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Rental Finder</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/rent/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/rent/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/rent/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/rent/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/rent/css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/rent/css/style.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/price-range.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/icheck.min_all.css">
	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>assets/rent//js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url();?>assets/rent//js/respond.min.js"></script>
	<![endif]-->
     <link rel="shortcut icon" href="<?php echo base_url();?>assets/rent/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url();?>assets/rent/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/fontello.css">
        <link href="<?php echo base_url();?>assets/rent/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/rent/assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/rent/assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/price-range.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/rent/assets/css/responsive.css">

	</head>
	<body>
	
   <div id="fh5co-page" style="height: 100%;">              
    <header id="fh5co-header" role="banner" style="display:block; position:absolute;">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1><a href="<?php echo base_url() ?>">Rental Finder<span>.</span></a></h1>             
                    <nav role="navigation" class="nav navbar-nav navbar-right">
                     <ul >
                        <?php if(!isset($FULLNAME)){ ?>
                          <li><a href="<?php echo base_url('Rent'); ?>">Rent</a></li>
                          <li class="cta">
                            <a href="<?php echo base_url('Login'); ?>">Login</a>
                          </li>
                          <li class="cta"><a href="<?php echo base_url('Register') ?>">Signup</a></li>
                          <?php } else{ ?>
                          <?php echo "<li><a href=\"".base_url($user_type)."\">".$FULLNAME."</a></li>"; ?>
                          <li><a href="<?php echo base_url('Rent'); ?>">Rent</a></li>
                          <li class="cta"> <a href="<?php echo base_url('User/logout'); ?>">Logout</a></li>
                        <?php } ?>
                     </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
  <?php $bgimage = base_url('assets/images/new2.jpg'); ?>
</div>