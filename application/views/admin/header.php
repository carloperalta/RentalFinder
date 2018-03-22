<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url('rental_logo.png'); ?>">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Rental Finder</title>

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
                <a href="<?php echo base_url('Admin'); ?>" class="simple-text">
                    ADMIN
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('Admin'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/Property'); ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Property type</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/Invoice'); ?>">
                        <i class="ti-panel"></i>
                        <p>Send Invoice</p>
                    </a>
                </li>
                <li>
                   <a href="<?php echo base_url('Admin/logout'); ?> ">
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
                <a class="navbar-brand" href="">Admin Panel</a>
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