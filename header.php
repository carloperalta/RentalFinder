<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/images/apple-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('assets/images/favicon.png'); ?>">
	<link rel="shortcut icon" href="favicon.png">
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
                    <?php echo $FULLNAME; ?>
                </a>
            </div>

            <ul class="nav">
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
                <li>
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
                    <a href="<?php echo base_url(''); ?>">
                        <i class="ti-user"></i>
                        <p>Back to Mainpage </p>
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
                            <a class="navbar-brand" href="#">Property Management</a>
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
