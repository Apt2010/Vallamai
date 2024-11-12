<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Vallamai | </title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<body>
<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Main Header-->
    <header class="main-header header-style-two">
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="auto-container">    
                <!-- Main box -->
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                          <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>      
                                     
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li  class="<?php  echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'current' : ''; ?>"><a href="index.php "><i class='bx bxs-home'></i> Home</a></li>
                                    <li class="<?php  echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'current' : ''; ?>"><a href="about.php"><i class='bx bx-user-pin'></i> About</a></li>
                                    <li class="<?php  echo basename($_SERVER['PHP_SELF']) == 'event.php' ? 'current' : ''; ?>"><a href="event.php"><i class='bx bx-calendar-event'></i> Event</a></li>
                                    <li class="<?php  echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'current' : ''; ?>"><a href="blog.php"><i class='bx bx-photo-album'></i> Blog</a></li>
                                    <li class="<?php  echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'current' : ''; ?>"><a href="contact.php"><i class='bx bx-support'></i> Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        <!-- <div class="outer-box clearfix">
                          
                            <div class="btn-box">
                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title"><i class="flaticon-chair"></i>Register</span></a>
                            </div>
                            <button class="nav-toggler"><i class="flaticon flaticon-menu-2"></i></button>

                    </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">            
                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                        <div class="upper-right">
                            <div class="search-box">
                                <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                            </div>
                            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                        </div>
                    </div>
                    <!--Keep This Empty / Menu will come through Javascript-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
            <!--Nav Box-->
            <div class="nav-outer clearfix">
              <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                    </div>
                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                </div>
            </div>
        </div>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon flaticon-close"></i></div>
                </div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                <ul class="contact-list-one">
                    <li><i class="flaticon-location"></i>Hotel Savera, Chennai<strong>Address</strong></li>
                    <li><i class="flaticon-alarm-clock-1"></i>December 16, 2023 8.30am - 7pm <strong>Timeing</strong></li>
                    <li><i class="flaticon-email-1"></i> <a href="#">+91 9790788848</a> <strong>WhatsApp to us</strong></li>
                </ul>



                <ul class="social-links">

                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                </ul>
            </nav>

        </div><!-- End Mobile Menu -->



        <!-- Header Search -->

        <div class="search-popup">
            <button class="close-search"><i class="flaticon-close"></i></button>
            <form method="post" action="blog.php">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- End Header Search -->
    </header>
    <!--End Main Header -->