<?php
/**
 * Created by PhpStorm.
 * User: shama
 * Date: 04/03/2017
 * Time: 06:26 PM
 */
?>

<nav class="navbar navbar-default main-navigation" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand logo" href="index.php"><img src="../assets/img/logo.png" alt=""></a>
        </div>
        <!-- brand and toggle menu for mobile End -->

        <!-- Navbar Start -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="lnr lnr-car"></i> Crear Viaje</a></li>
                <li><a href="find.php"><i class="lnr lnr-map-marker"></i> Buscar Viaje</a></li>
                <li><a href="../login.html"><i class="lnr lnr-enter"></i> Entrar</a></li>
                <li class="postadd">
                    <a class="btn btn-danger btn-post" href="../post-ads.html"><span class="fa fa-sign-in"></span> Crear cuenta</a>
                </li>
            </ul>
        </div>
        <!-- Navbar End -->
    </div>
</nav>
