<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ACSSDIR ?>/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ACSSDIR ?>/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ACSSDIR ?>/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="<?php echo ACSSDIR ?>/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo ACSSDIR ?>/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="<?php echo ACSSDIR ?>/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo ACSSDIR ?>/css/owl-carousel/owl.theme.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="<?php echo ACSSDIR ?>/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <div class="db-smarthome page">
            <!-- Begin Page Content -->
            <div class="page-content">
                <div class="content-inner boxed w-100">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-xl-9">
                                <!-- Begin Header -->
                                <header class="header">
                                    <nav class="navbar">         
                                        <!-- Begin Topbar -->
                                        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                                            <!-- Begin Logo -->
                                            <div class="navbar-header">
                                                <a href="<?php echo URL ?>" class="navbar-brand">
                                                    <div class="brand-image brand-big">
                                                        <img src="<?php echo ACSSDIR ?>/img/logo-big.png" alt="logo" class="logo-big">
                                                    </div>
                                                    <div class="brand-image brand-small">
                                                        <img src="<?php echo ACSSDIR ?>/img/logo.png" alt="logo" class="logo-small">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- End Logo -->
                                            <!-- Begin Navbar Menu -->
                                            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">
                                                <!-- Begin Notifications -->
                                               
                                                <!-- End Notifications -->
                                                <!-- User -->
                                                <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="<?php echo ACSSDIR ?>/img/avatar/avatar-01.jpg" alt="..." class="avatar rounded-circle"></a>
                                                    <ul aria-labelledby="user" class="user-size dropdown-menu">
                                                        <li class="welcome">
                                                            <a href="#" class="edit-profil"><i class="la la-gear"></i></a>
                                                            <img src="<?php echo ACSSDIR ?>/img/avatar/avatar-01.jpg" alt="..." class="rounded-circle">
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="<?php echo URL ?>/?url=admin/addHotspotUser" class="dropdown-item"> 
                                                                Hotspot Kullanıcısı Ekle
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?php echo URL ?>/?url=admin/addHotspotGroup" class="dropdown-item no-padding-bottom"> 
                                                                Hotspot Grubu Ekle
                                                            </a>
                                                        </li>
                                                     
                                                        <li>
                                                            <a rel="nofollow" href="<?php echo URL ?>/?url=admin/logout" class="dropdown-item logout text-center"><i class="ti-power-off"></i></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- End User -->
                                                <!-- Begin Quick Actions -->
                                                <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-cog"></i></a></li>
                                                <!-- End Quick Actions -->
                                            </ul>
                                            <!-- End Navbar Menu -->
                                        </div>
                                        <!-- End Topbar -->
                                    </nav>
                                </header>
                                <!-- End Header -->