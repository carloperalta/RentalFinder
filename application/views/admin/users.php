<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url();?>assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/themify-icons.css" rel="stylesheet">
	
	<link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url();?>assets/css/DT_bootstrap.css" rel="stylesheet" media="screen">
	
    <title>Basic Form</title>
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="black" data-active-color="info">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="Rentalfinder" class="simple-text">
                    Group 7 Rental Inc
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="homepage.html">
                        <i class="ti-panel"></i>
                        <p>Homepage</p>
                    </a>
                </li>
                <li class="active">
                    <a href="users.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                   <a href="">
                       <i class="ti-settings"></i>
                       <p>Logout</p>
                   </a> 
                </li>
			 </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Table List</a>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <button class="btn btn-success" data-toggle="modal" data-target="#addusermodal">Add New <i class="icon-plus icon-white"></i></button>
        <div class="block">
                <div class="col-md-12">
                    

                <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>User type</th>
                                <th>Properties</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Caren Mae Bechayda</td>
                            <td class="center">Admin</td>
                            <td class="center">-</td>
                         </tr>
                                            
                        </tbody>
                    </table>
                    
                </div>

                </div>
        </div>
        

       <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.RentalFinder.com">
                                Group 7
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com/RentalFinder">
                               Twitter
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                </div>
        </footer>


    </div>
</div>

<div class="modal fade" id="addusermodal" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" action="#">
                <div class="modal-header">
                    <h1>Add new user</h1>
                </div>
                <div class="modal-body">
                        <label for="name">Fullname</label>
                        <input type="text" name="name" required="" class="form-in">

                        <label for="email">Email</label>
                        <input type="email" name="email" required="">

                        <label for="usertype">Usertype</label>
                        <select name="usertype">
                            <option>Admin</option>
                            <option>User</option>
                        </select>
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-primary float-right">Confirm</button>
                </div>
            </div>
            </form>

            </div>
          </div>
    </div>
</body>



    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url();?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url();?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url();?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<script src="<?php echo base_url();?>assets/js/demo.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.js"></script>
    <script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
    <script src="<?php echo base_url();?>assets/js/DT_bootstrap.js"></script>
    <script>$(function(){});</script>

</html>
