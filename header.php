<?php

require "conn.php";

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.exotheme.com/gocargo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Sep 2023 10:22:59 GMT -->
<head>
    <meta charset="utf-8">
    <title><?php echo $company_name ?> - Freight, Logistics & Transportation </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- LOAD CSS FILES -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <style>
        .logo-style{
            width: 200px !important;;

        }
        @media (max-width: 500px) {
            .logo-style{
            width: 140px !important;;

        }
        }
    </style>
    
</head>

<body>
    <div id="preloader"></div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <span id="menu-btn"></span>
                <div class="row">
                    <div class="col-md-3">

                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="index">
                                    <img src="img/logo.png" width="" alt="" class="logo-1 logo-style">
                                    <img src="img/logo-2.png" width="" alt="" class="logo-2 logo-style">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>

                    <div class="col-md-9">

                        <!-- mainmenu begin -->
                        <nav id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a href="index">Home</a>
                                    
                                </li>
                                <li><a href="services">Services</a>
                                    <ul>
                                        <li><a href="services">All Services</a></li>
                                        <li><a href="service-details?id=1">Ocean Freight</a></li>
                                        <li><a href="service-details?id=2">Air Freight</a></li>
                                        <li><a href="service-details?id=3">Cargo Express</a></li>
                                        <li><a href="service-details?id=4">Logistics</a></li>
                                        <li><a href="service-details?id=5">Warehousing</a></li>
                                        <li><a href="service-details?id=6">Custom Brokerage</a></li>
                                    </ul>
                                </li>
                                <li><a href="about">About Us</a></li>
                                <li><a href="track">Track</a></li>
                               
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mainmenu close -->

                        <!-- social icons -->
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        <!-- social icons close -->

                    </div>
                </div>
            </div>
        </header>