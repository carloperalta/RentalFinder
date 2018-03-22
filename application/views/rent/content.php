
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


  <link rel="shortcut icon" href="<?php echo base_url('rental_logo.png'); ?>">
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
                          <li><a href="<?php echo base_url('Rent'); ?>">Rent</a></li>
                          <li><a href="">Promo</a></li>
                          <li><a href="">Contact Us</a></li>
                          <li class="cta">
                            <a href="<?php echo base_url('Login'); ?>">Login</a>
                          </li>
                          <li class="cta"><a href="<?php echo base_url('Register') ?>">Signup</a></li>
                          <?php } else{ ?>
                          <?php echo "<li><a href=\"".base_url($user_type)."\">".$FULLNAME."</a></li>"; ?>
                          <li><a href="<?php echo base_url('Rent'


                          ); ?>">Rent</a></li>
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
							<img src='<?php echo base_url().'propertyimages/'.$unit['Unit_Picture']?>' style="height: auto; width: 100%;">
              <a href='' class="tag" data-toggle='modal' data-target="#rentmodal">Rent</a>
							

						</figure>
						<div class="fh5co-property-innter" >
							<div class="price-status">
		                 	<h2><?php echo '$'.$unit['Unit_Price']?></h2>
		               </div>
		              <h1><?php echo $unit['Unit_Name']?></h1>
					  <h1><?php echo $unit['Unit_Type']?></h1>
	            	</div>
	            	<p class="fh5co-property-specification">
                  <span><strong>2</strong> Beds</span>  <span><strong>1</strong> Baths</span>
	            	</p>
					</div>
				</div>
			</div>
		</div>

	</div>


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
        <p>&copy; 2018 web:rental finder. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://rentalfinder.co/" target="_blank">rentalfinder.com</a> Demo Images by <a href="" target="_blank">Group7</a></span></p>
      </div>

    </div>
  </footer>
</div>

<div class="modal fade" id="termsandconditions" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="exampleModalLongTitle">Terms and Conditions</h1>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger"  data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="rentmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url()?>rent/occupy" method="post">
        <div class="modal-header">
          <h5 class="modal-title">Rent</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
                    <label class="radio-inline">
                      <input type="radio" name="rent_type" value="Monthly">Monthly
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="rent_type" value="Quarterly">Quarterly
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="rent_type" value="Yearly">Yearly
                    </label>
                  <input type="hidden" name="Unit_ID" value="<?php echo $unit['Unit_ID']?>">
                  <input type="hidden" name="Unit_Type" value="<?php echo $unit['Unit_Type']?>">
                  <input type="hidden" name="tenant_id" value="<?php echo $id?>">
        </div>
        <div class="modal-footer">
          
          <input type="submit" value="Rent" class="btn btn-primary" style="border-style: none">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>


  <!-- jQuery -->
  <script type="text/javascript"\ href="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
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