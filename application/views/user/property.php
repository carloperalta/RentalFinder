<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/images/apple-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/images/favicon.png'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>Rental Finder</title>

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('assets/css/paper-dashboard.css'); ?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css'); ?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/themify-icons.css'); ?>" rel="stylesheet">

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
                <a href="" class="simple-text">
                    Group 7 Rental Inc.
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('User/profile'); ?>">
                        <i class="ti-user"></i>
                        <p> <?php echo $FULLNAME; ?> </p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('User/') ?>">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('User/tenant_list') ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Tenants</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo base_url('User/property') ?>">
                        <i class="ti-text"></i>
                        <p>Property</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('User/inbox'); ?>">
                        <i class="ti-pencil-alt2"></i>
                        <p>Inbox (Invoices)</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('User/notifications'); ?>">
                        <i class="ti-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>

                <li>
                    <a href="" data-toggle="modal" data-target="#myModal">
                        <i class=""></i>
                        <p>Logout</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
         <div class="main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar bar1"></span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">User</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="ti-settings"></i>
                                            <p>Settings</p>
                                            <b class="caret"></b>
                                      </a>
                                      <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url('User/editprofile') ?>">Edit Profile</a></li>
                                      </ul>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>

                
                    
                 



<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="header">
                <div class="row">
                    <div class="col-md-10">
                    <h4 class="title">Properties</h4>
                    </div>
                    <div class="col-md-2">
                    <a href="" class="btn btn-primary">Add Property</a>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="row">
                </div>    
            </div>
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

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Are you sure you want to logout?</h4>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo base_url('User/logout'); ?>" class="btn btn-warning">Logout</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                            Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>

    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="<?php echo base_url('assets/js/bootstrap-checkbox-radio.js'); ?>"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url('assets/js/chartist.min.js'); ?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/js/bootstrap-notify.js'); ?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url('assets/js/paper-dashboard.js'); ?>"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('assets/js/demo.js'); ?>"></script>


</html>
