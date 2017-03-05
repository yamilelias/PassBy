<?php
/**
 * Created by PhpStorm.
 * User: shama
 * Date: 04/03/2017
 * Time: 06:32 PM
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="author" content="Clasified">
    <meta name="generator" content="Wordpress! - Open Source Content Management">
    <title>Category | Bootstrap HTML5 Classified Template</title>

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
    <link rel="stylesheet" href="assets/extras/settings.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">
    <!-- Bootstrap Select -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

</head>

<body>
<!-- Header Section Start -->
<div class="header">
    <?php include 'include/nav.php'; ?>
</div>
<!-- Header Section End -->

<!-- Search wrapper Start -->
<div id="search-row-wrapper">
    <div class="container">
        <div class="search-inner">
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
                            <button class="btn btn-common btn-search btn-block"><strong>Buscar Viaje</strong></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Search box -->
        </div>
    </div>
</div>
<!-- Search wrapper End -->

<!-- Main container Start -->
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 page-sidebar">
                <aside>
                    <div class="inner-box">
                        <div class="categories">
                            <div class="widget-title">
                                <i class="fa fa-align-justify"></i>
                                <h4>Localidades</h4>
                            </div>
                            <div class="categories-list">
                                <ul>
                                    <li>
                                        <a href="#">
                                            Chihuahua <span class="category-counter">(9)</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            Camargo <span class="category-counter">(8)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Casas Grandes <span class="category-counter">(2)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Cd. Juárez <span class="category-counter">(3)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Delicias <span class="category-counter">(4)</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Cuauhtémoc <span class="category-counter">(5)</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="inner-box">
                        <div class="widget-title">
                            <h4>Anuncios</h4>
                        </div>
                        <img src="assets/img/img1.jpg" alt="">
                    </div>
                </aside>
            </div>
            <div class="col-sm-9 page-content">
                <!-- Product filter Start -->
                <div class="product-filter">
                    <div class="grid-list-count">
                        <a class="list switchToGrid" href="#"><i class="fa fa-list"></i></a>
                        <a class="grid switchToList" href="#"><i class="fa fa-th-large"></i></a>
                    </div>
                    <div class="short-name">
                        <span>Short By</span>
                        <form class="name-ordering" method="post">
                            <label>
                                <select name="order" class="orderby">
                                    <option selected="selected" value="menu-order">Ordenar Por</option>
                                    <option value="popularity">Precio Ascendente</option>
                                    <option value="popularity">Precio Descendente</option>
                                </select>
                            </label>
                        </form>
                    </div>
                    <div class="Show-item">
                        <span>Mostrar objetos</span>
                        <form class="woocommerce-ordering" method="post">
                            <label>
                                <select name="order" class="orderby">
                                    <option selected="selected" value="menu-order">Todos</option>
                                    <option value="popularity">Popularidad</option>
                                    <option value="popularity">Puntaje</option>
                                    <option value="popularity">Más nuevo</option>
                                    <option value="popularity">Precio</option>
                                </select>
                            </label>
                        </form>
                    </div>
                </div>
                <!-- Product filter End -->

                <!-- Adds wrapper Start -->
                <div class="adds-wrapper">

                    <?php
                    //Include pagination class file
                    include('include/Pagination.php');

                    //Include database configuration file
                    include('include/dbConfig.php');

                    $limit = 3;

                    //get number of rows
                    $queryNum = $db->query("SELECT COUNT(*) as postNum FROM posts");
                    $resultNum = $queryNum->fetch_assoc();
                    $rowCount = $resultNum['postNum'];

                    //initialize pagination class
                    $pagConfig = array(
                        'totalRows' => $rowCount,
                        'perPage' => $limit,
                        'link_func' => 'searchFilter'
                    );
                    $pagination =  new Pagination($pagConfig);

                    //get rows
                    $query = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $limit");

                    if($query->num_rows > 0){ ?>
                        <div class="posts_list">
                            <?php
                            while($row = $query->fetch_assoc()){
                                $postID = $row['id'];
                                ?>
                                <div class="item-list">
                                    <div class="col-sm-2 no-padding photobox">
                                        <div class="add-image">
                                            <a href="#"><img src="assets/img/item/img-1.jpg" alt=""></a>
                                            <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 add-desc-box">
                                        <div class="add-details">
                                            <h5 class="add-title"><a href="ads-details.html"><?php echo $row["title"]; ?></a></h5>
                                            <div class="info">
                                                <span class="date">
                                                    <i class="fa fa-clock"></i>
                                                    <?php echo $row["created"]; ?>
                                                </span>
                                            </div>
                                            <div class="item_desc">
                                                <a href="#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 text-right  price-box">
                                        <h2 class="item-price"> $ <?php echo(rand(100,300)); ?> </h2>
                                        <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span><?php echo(rand(10,100)); ?></span> </a>
                                        <a class="btn btn-success btn-sm"> <i class="fa fa-car"></i> <span>Elegir</span> </a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                </div>
                <!-- Adds wrapper End -->

                <?php echo $pagination->createLinks(); ?>

                <!-- Start Pagination
                <div class="pagination-bar">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"> ...</a></li>
                        <li><a class="pagination-btn" href="#">Next »</a></li>
                    </ul>
                </div>
                <?php } ?>
                <!-- End Pagination -->

                <div class="post-promo text-center">
                    <h2> ¿Deseas publicar un viaje? </h2>
                    <h5>¡Crea tu propio viaje para compartir tus gastos!</h5>
                    <a href="#" class="btn btn-post btn-danger">Agregar viaje</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main container End -->

<div class="post-wrapper">
    <div id="posts_content">
        <?php
        //Include pagination class file
        include('include/Pagination.php');

        //Include database configuration file
        include('include/dbConfig.php');

        $limit = 3;

        //get number of rows
        $queryNum = $db->query("SELECT COUNT(*) as postNum FROM posts");
        $resultNum = $queryNum->fetch_assoc();
        $rowCount = $resultNum['postNum'];

        //initialize pagination class
        $pagConfig = array(
            'totalRows' => $rowCount,
            'perPage' => $limit,
            'link_func' => 'searchFilter'
        );
        $pagination =  new Pagination($pagConfig);

        //get rows
        $query = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $limit");

        if($query->num_rows > 0){ ?>
            <div class="posts_list">
                <?php
                while($row = $query->fetch_assoc()){
                    $postID = $row['id'];
                    ?>
                    <div class="item-list">
                        <div class="col-sm-2 no-padding photobox">
                            <div class="add-image">
                                <a href="#"><img src="assets/img/item/img-1.jpg" alt=""></a>
                                <span class="photo-count"><i class="fa fa-camera"></i>2</span>
                            </div>
                        </div>
                        <div class="col-sm-7 add-desc-box">
                            <div class="add-details">
                                <h5 class="add-title"><a href="ads-details.html"><?php echo $row["title"]; ?></a></h5>
                                <div class="info">
                                    <span class="add-type">B</span>
                                    <span class="date">
                        <i class="fa fa-clock"></i>
                        <?php echo $row["created"]; ?>
                      </span> -
                                    <span class="category">Electronics</span> -
                                    <span class="item-location"><i class="fa fa-map-marker"></i>London</span>
                                </div>
                                <div class="item_desc">
                                    <a href="#">Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 text-right  price-box">
                            <h2 class="item-price"> $ 320 </h2>
                            <a class="btn btn-danger btn-sm"><i class="fa fa-certificate"></i>
                                <span>Top Ads</span></a>
                            <a class="btn btn-common btn-sm"> <i class="fa fa-eye"></i> <span>215</span> </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php echo $pagination->createLinks(); ?>
        <?php } ?>
    </div>
</div>

<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section class="footer-Content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">About</h3>
                        <div class="textwidget">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed, auctor ut purus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Links</h3>
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Categories</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Left Sidebar</a></li>
                            <li><a href="#">Pricing Plans</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Full Width Page</a></li>
                            <li><a href="#">Notifications</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Latest Tweets</h3>
                        <div class="twitter-content clearfix">
                            <ul class="twitter-list">
                                <li class="clearfix">
                      <span>
                        Make sure you are following
                        <a href="#">@Graygrids</a> for all your Wingthemes needs!
                      </span>
                                </li>
                                <li class="clearfix">
                      <span>
                        Eight marketplaces, one Graygrids Market. Join us:
                        <a href="#">http://t.co/cLo2w7rWOx</a>
                      </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3 class="block-title">Premium Ads</h3>
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
                        <p>All copyrights reserved @ 2016 - Design & Development by <a href="http://graygrids.com">Graygrids</a></p>
                    </div>
                    <div class="bottom-social-icons social-icon pull-right">
                        <a class="facebook" target="_blank" href="https://web.facebook.com/GrayGrids"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" target="_blank" href="https://twitter.com/GrayGrids"><i class="fa fa-twitter"></i></a>
                        <a class="dribble" target="_blank" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                        <a class="flickr" target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr"></i></a>
                        <a class="youtube" target="_blank" href="https://youtube.com"><i class="fa fa-youtube"></i></a>
                        <a class="google-plus" target="_blank" href="https://plus.google.com"><i class="fa fa-google-plus"></i></a>
                        <a class="linkedin" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
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
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
</body>
</html>