<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard - Admin Ponpes Raden Rahmat Sunan Ampel</title>
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>theme-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/Login1/images/logo_pondok.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme-assets/vendors/css/charts/chartist.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme-assets/css/app-lite.css">
    <!-- END CHAMELEON  CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme-assets/css/core/colors/palette-gradient.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>theme-assets/css/pages/dashboard-ecommerce.css"> -->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout 2-columns fixed-navbar pace-done menu-hide vertical-overlay-menu" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-blue-green" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <style>
                        .ss {
                            padding-top: .7rem;
                        }

                        @media (max-width: 768px) {
                            .ss {
                                padding-top: .7rem;
                            }
                        }
                    </style>
                    <div class="navbar-brand-wrap">
                        <a class="navbar-brand" href="#">
                            <img class="ss" width="306px" style="vertical-align:baseline; " src="<?php echo base_url(); ?>assets\Login2\img\logo_pondok.png" alt="">
                        </a>
                        <ul class="nav navbar-nav mr-auto float-right">

                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label " href="#" data-toggle="dropdown"><i class="ficon ft-menu"> </i></a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <div class="arrow_box">
                                        <a class="dropdown-item" href="#">
                                            <i class="ft-book"></i> Read Mail</a>
                                        <a class="dropdown-item" href="#">
                                            <i class="ft-bookmark"></i> Read Later</a>
                                        <a class="dropdown-item" href="#">
                                            <i class="ft-check-square"></i> Mark all Read </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav mr-auto float-left">


                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                        <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                            <ul class="dropdown-menu">
                                <li class="arrow_box">
                                    <form>
                                        <div class="input-group search-box">
                                            <div class="position-relative has-icon-right full-width">
                                                <input class="form-control" id="search" type="text" placeholder="Search here...">
                                                <div class="form-control-position navbar-search-close"><i class="ft-x"> </i></div>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"> </i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right">
                                    <a class="dropdown-item" href="#">
                                        <i class="ft-book"></i> Read Mail</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="ft-bookmark"></i> Read Later</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="ft-check-square"></i> Mark all Read </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="<?= base_url(); ?>assets/img/Santri/<?php echo ucfirst($this->session->userdata('foto')); ?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?= base_url(); ?>assets/img/gbrSantri/<?php echo ucfirst($this->session->userdata('foto')); ?>" alt="avatar"><span class="user-name text-bold-700 ml-1"><?php echo ucfirst($this->session->userdata('username')); ?></span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url('index.php/santri/Santri/edit_santri/'); ?><?php echo ucfirst($this->session->userdata('id')); ?>"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url(); ?>santri/login/logout"><i class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>