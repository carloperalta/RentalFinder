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
    <body>


   <div id="fh5co-page" style="height: 100%;">              
    <header id="fh5co-header" role="banner" style="display:block; position:absolute;">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1><a href="<?php echo base_url() ?>">Rental Finder<span>.</span></a></h1>             
                    <nav role="navigation" class="nav navbar-nav navbar-right">
                     <ul >

                        <li><a href="<?php echo base_url('Posts');?>">Rent</a></li>

                        <?php if (!isset($FULLNAME)) {?>
                        <li><a href="">Rent</a></li>

                        <li><a href="">Promo</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li class="cta">
                          <a href="<?php echo base_url('Login'); ?>">Login</a>
                        </li>

                        <li class="cta"><a href="<?php echo base_url('Register'); ?>">Signup</a></li>

                        <li class="cta"><a href="<?php echo base_url('Register') ?>">Signup</a></li>
                        <?php }else{ ?>
                        <?php echo "<li class=\"active\"><a href=\"\">".$FULLNAME."</a></li>"; ?>
                        <li><a href="">Rent</a></li>
                        <li><a href="">Promo</a></li>
                        <li class="cta"> <a href="<?php echo base_url($user_type) ?>" title="">Property Management</a></li>
                        <?php } ?>

                     </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="col-md-12">
  
<div class="row">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
   <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo base_url() ?>assets/images/new1.jpg" alt="Image 1" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url() ?>assets/images/new2.jpg" alt="Image 2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php echo base_url() ?>assets/images/new3.jpg" alt="Image 3" style="width:100%;">
      </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>




	<div id="best-deal">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" data-animate-effect="fadeIn">
					<h2>We are Offering the Best Rental Place Deals</h2>
					<p>The Rental Finder is a website where users can find a place to stay that can be access through Internet. You can also search according to your needs like the location you want, the only budget you have and the features of the place you wanted to rent.  </p>
				</div>
				<div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">


					<div class="fh5co-property">
						<figure>
							<img src="<?php echo base_url() ?>assets/images/slide_1.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
							<a href="#" class="tag">For Rent</a>
						</figure>
						<div class="fh5co-property-innter">
							<h3><a href="#">Nice and Cozy Condominium</a></h3>
							<div class="price-status">
		                 	<span class="price">Php 5,000 </span>
		               </div>
		               <p>Near Bonifacio Global City (Taguig City)</p>
	            	</div>
	            	<p class="fh5co-property-specification">
                  <span><strong>2</strong> Beds</span>  <span><strong>1</strong> Baths</span>
	            	</p>
					</div>
				</div>
			</div>
		</div>

	</div>


	<div class="fh5co-cta" style="background-image: url<?php echo base_url() ?>bootstrap/images/slide_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box" data-animate-effect="fadeIn">
				<h3>We make your rental experience easier..</h3>

			</div>
		</div>
	</div>

 
  <footer id="fh5co-footer" role="contentinfo">

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

	
