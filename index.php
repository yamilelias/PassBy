<?php
/**
 * Created by PhpStorm.
 * User: shama
 * Date: 04/03/2017
 * Time: 04:37 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>ClassiX - Bootstrap HTML5 Classified Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">
    <!-- Material CSS -->
    <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Line Icons CSS -->
    <link rel="stylesheet" href="assets/fonts/line-icons/line-icons.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/main.css" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <!-- Slicknav js -->
    <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

</head>

<body>
<!-- Header Section Start -->
<div class="header">
    <?php include 'include/nav.php'; ?>

</div>
<!-- Header Section End -->

<!-- Start intro section -->
<section id="intro" class="section-intro">
    <div class="overlay">
        <div class="container">
            <div class="main-text">
                <h1 class="intro-title">Bienvenido a <span style="color: #3498DB">PassBy</span></h1>
                <p class="sub-title">El mejor buscador de transporte para viajar, economizar y conocer personas en el proceso.</p>

                <!-- Start Search box -->
                <div class="row search-bar">
                    <div class="advanced-search">
                        <form class="search-form" method="get">
                            <div class="col-md-3 col-sm-6 search-col">
                                <div class="input-group-addon search-category-container">
                                    <label class="styled-select location-select">
                                        <select class="dropdown-product selectpicker" name="product-cat" >
                                            <option value="0">Origen</option>
                                            <option value="New York">New York</option>
                                            <option value="California">California</option>
                                            <option value="Washington">Washington</option>
                                            <option value="churches">Birmingham</option>
                                            <option value="Birmingham">Chicago</option>
                                            <option value="Phoenix">Phoenix</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 search-col">
                                <div class="input-group-addon search-category-container">
                                    <label class="styled-select location-select">
                                        <select class="dropdown-product selectpicker" name="product-cat" >
                                            <option value="0">Destino</option>
                                            <option value="New York">New York</option>
                                            <option value="California">California</option>
                                            <option value="Washington">Washington</option>
                                            <option value="churches">Birmingham</option>
                                            <option value="Birmingham">Chicago</option>
                                            <option value="Phoenix">Phoenix</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 search-col">
                                <input class="form-control keyword" name="keyword" value="" placeholder="Precio" type="text">
                                <i class="fa fa-usd"></i>
                            </div>
                            <div class="col-md-3 col-sm-6 search-col">
                                <a class="btn btn-lg btn-block btn-primary" href="find.php"><strong>Buscar Viaje</strong></a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Search box -->
            </div>
        </div>
    </div>
</section>
<!-- end intro section -->

<div class="wrapper">
    <!-- Categories Homepage Section Start -->
    <section id="categories-homepage">
        <div class="container">
            <div class="row text-center">
                <div class="error-page">
                    <h2>¿No tienes cuenta aún?</br> ¡Regístrate!</h2>
                    <a href="#" class="btn btn-danger btn-lg">Crear Cuenta</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Homepage Section End -->

    <!-- Featured Listings Start -->
    <section class="featured-lis" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
                    <h3 class="section-title">Viajes en este momento</h3>
                    <div id="new-products" class="owl-carousel">
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img1.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">$150</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img2.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Sed diam nonummy</a>
                                <span class="price">$67</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img3.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Feugiat nulla facilisis</a>
                                <span class="price">$300</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img4.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">$149</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img5.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Sed diam nonummy</a>
                                <span class="price">$90</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img6.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Praesent luptatum zzril</a>
                                <span class="price">$169</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img7.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Lorem ipsum dolor sit</a>
                                <span class="price">$79</span>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-item">
                                <div class="carousel-thumb">
                                    <img src="assets/img/product/img8.jpg" alt="">
                                    <div class="overlay">
                                        <a href="ads-details.html"><i class="fa fa-link"></i></a>
                                    </div>
                                </div>
                                <a href="ads-details.html" class="item-name">Sed diam nonummy</a>
                                <span class="price">$149</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Listings End -->

    <!-- Counter Section Start -->
    <section id="counter">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="counting wow fadeInDownQuick" data-wow-delay=".5s">
                        <div class="icon">
                <span>
                  <i class="lnr lnr-tag"></i>
                </span>
                        </div>
                        <div class="desc">
                            <h3 class="counter">12090</h3>
                            <p>Viajes</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="counting wow fadeInDownQuick" data-wow-delay="1s">
                        <div class="icon">
                <span>
                  <i class="lnr lnr-map"></i>
                </span>
                        </div>
                        <div class="desc">
                            <h3 class="counter">350</h3>
                            <p>Lugares</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="counting wow fadeInDownQuick" data-wow-delay="1.5s">
                        <div class="icon">
                <span>
                  <i class="lnr lnr-users"></i>
                </span>
                        </div>
                        <div class="desc">
                            <h3 class="counter">23453</h3>
                            <p>Usuarios regulares</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Start Services Section -->
    <div class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="0.3s">
                        <div class="features-icon">
                            <i class="fa fa-book">
                            </i>
                        </div>
                        <div class="features-content">
                            <h4>
                                Full Documented
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="0.6s">
                        <div class="features-icon">
                            <i class="fa fa-paper-plane"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                Clean & Modern Design
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="0.9s">
                        <div class="features-icon">
                            <i class="fa fa-map"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                Great Features
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="1.2s">
                        <div class="features-icon">
                            <i class="fa fa-cogs"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                Completely Customizable
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="1.5s">
                        <div class="features-icon">
                            <i class="fa fa-hourglass"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                100% Responsive Layout
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="1.8s">
                        <div class="features-icon">
                            <i class="fa fa-hashtag"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                User Friendly
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="2.1s">
                        <div class="features-icon">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                Awesome Layout
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="2.4s">
                        <div class="features-icon">
                            <i class="fa fa-leaf"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                High Quality
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="features-box wow fadeInDownQuick" data-wow-delay="2.7s">
                        <div class="features-icon">
                            <i class="fa fa-google"></i>
                        </div>
                        <div class="features-content">
                            <h4>
                                Free Google Fonts Use
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Section -->

</div>


<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0">
                    <div class="widget">
                        <h3 class="block-title">About us</h3>
                        <div class="textwidget">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.5">
                    <div class="widget">
                        <h3 class="block-title">Useful Links</h3>
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Left Sidebar</a></li>
                            <li><a href="#">Pricing Plans</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Full Width Page</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1s">
                    <div class="widget">
                        <h3 class="block-title">Latest Tweets</h3>
                        <div class="twitter-content clearfix">
                            <ul class="twitter-list">
                                <li class="clearfix">
                      <span>
                        Platform to Download and Submit #Bootstrap Templates via @ProductHunt @GrayGrids
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                                </li>
                                <li class="clearfix">
                      <span>
                        Introducing Bootstrap 4 Features: What’s new, What’s gone!
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.5s">
                    <div class="widget">
                        <h3 class="block-title">Random Ads</h3>
                        <ul class="featured-list">
                            <li>
                                <img alt="" src="assets/img/featured/img1.jpg">
                                <div class="hover">
                                    <a href="#"><span>$49</span></a>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/featured/img2.jpg">
                                <div class="hover">
                                    <a href="#"><span>$49</span></a>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/featured/img3.jpg">
                                <div class="hover">
                                    <a href="#"><span>$49</span></a>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/featured/img4.jpg">
                                <div class="hover">
                                    <a href="#"><span>$49</span></a>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/featured/img5.jpg">
                                <div class="hover">
                                    <a href="#"><span>$49</span></a>
                                </div>
                            </li>
                            <li>
                                <img alt="" src="assets/img/featured/img6.jpg">
                                <div class="hover">
                                    <a href="#"><span>$49</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer area End -->

    <!-- Copyright Start  -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-info pull-left">
                        <p>Todos los derechos reservados @ 2017 - PassBy</p>
                    </div>
                    <div class="bottom-social-icons social-icon pull-right">
                        <a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="dribble" target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                        <a class="flickr" target="_blank" href="#"><i class="fa fa-flickr"></i></a>
                        <a class="youtube" target="_blank" href="#"><i class="fa fa-youtube"></i></a>
                        <a class="google-plus" target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

</footer>
<!-- Footer Section End -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Main JS  -->
<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/wow.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>


</body>
</html>
