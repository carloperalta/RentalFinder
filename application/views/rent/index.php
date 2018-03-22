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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><link rel="stylesheet" href="<?php echo base_url();?>assets/css/search.css">
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script>
function searchFilter(page_num) {
  page_num = page_num?page_num:0;
  var keywords = $('#keywords').val();
  var sortBy = $('#sortBy').val();
  $.ajax({
    type: 'POST',
    url: '<?php echo base_url(); ?>rent/ajaxPaginationData/'+page_num,
    data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
    beforeSend: function () {
      //$('.loading').show();
    },
    success: function (html) {
      $('#postList').html(html);
      //$('.loading').fadeOut("slow");
    }
  });
}
</script>

  
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
                          <li><a href="<?php echo base_url('Rent'); ?>">Rent</a></li>
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
  <body  style="background-image: url('<?php echo base_url();?>assets/images/image_1.jpg');background-attachment:fixed;height:130%; max-width: 100%; overflow-x: hidden;">
    <header id="fh5co-header" role="banner" style="display:block; position:absolute;">
        <div class="container">
            <div class="row">
                <div class="header-inner">
                    <h1><a href="<?php echo base_url() ?>">Rental Finder<span>.</span></a></h1>             

                    <nav role="navigation" class="nav navbar-nav navbar-right">
                     <ul >
                        <li><a href="">Rent</a></li>
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

<div class="container" style="padding-top: 140px;">
  
    <div class="row">
		<div class="post-search-panel">
			<input type="text" id="keywords" placeholder="Search..." onkeyup="searchFilter()"/>
			<select id="sortBy" onchange="searchFilter()">
				<option value="">Sort By</option>
				<option value="asc">Ascending</option>
				<option value="desc">Descending</option>
			</select>
		</div>
        <div class="post-list" id="postList">
            <?php if(!empty($unit)): foreach($unit as $un): ?>
                <div class="list-item"><a href="<?php echo base_url().'rent/'.$un['Unit_Name']; ?>"><h2><?php echo $un['Unit_Name']; ?></h2></a></div>
            <?php endforeach; else: ?>
            <p>Post(s) not available.</p>
            <?php endif; ?>
<!--            <?php echo $this->ajax_pagination->create_links(); ?>-->
        </div>
        <div class="loading" style="display: none;"><div class="content"><img src="<?php echo base_url().'assets/images/loader.gif'; ?>"/></div></div>
    </div>
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
                        <span><strong>5000</strong> Sq Ft</span>  <span><strong>2</strong> Beds</span>  <span><strong>1</strong> Baths</span>
                    </p>
                    </div>


                </div>
                <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

                    <div class="fh5co-property">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/slide_3.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                            <a href="#" class="tag">For Rent</a>
                        </figure>
                        <div class="fh5co-property-innter">
                            <h3><a href="#">Technological University of the Philippines - Manila Dormitory</a></h3>
                            <div class="price-status">
                            <span class="price">Php 1,600 - 2,000<span class="per">/month</span> </span>
                       </div>
                       <p>Affordable dormitory inside your campus</p>
                    </div>
                    <p class="fh5co-property-specification">

                    </p>
                    </div>

                </div>
                <div class="col-md-4 item-block animate-box" data-animate-effect="fadeIn">

                    <div class="fh5co-property">
                        <figure>
                            <img src="<?php echo base_url() ?>assets/images/slide_5.jpg" alt="Free Website Templates FreeHTML5.co" class="img-responsive">
                            <a href="#" class="tag">For Rent</a>
                        </figure>
                        <div class="fh5co-property-innter">
                            <h3><a href="#">Villa Sophia </a></h3>
                            <div class="price-status">
                            <span class="price">Php 7,800</span>
                       </div>
                       <p>A luxurious rental property with breathtaking views and amazing infinity pool in a great vacation spot</p>
                    </div>
                    <p class="fh5co-property-specification">
                        <span><strong>7000</strong> Sq Ft</span>  <span><strong>3</strong> Beds</span>  <span><strong>3</strong> Baths</span>  <span><strong>1</strong> Garages</span>
                    </p>
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