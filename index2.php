<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("php/config/config.php");
include("php/config/dbconnection.php");
include("php/users.php");
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Accueil - CommunityExchange</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color.css">
</head>
<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <div class="wrapper">

        <header>

            <div class="top-header">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-md-7 col-sm-12">
                            <div class="header-address">
                                <a href="#">
                                    <i class="la la-phone-square"></i>
                                    <span>06.06.06.06.06</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-5 col-sm-12">
                            <div class="header-social">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header m-2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="index.php">
                                    <img src="assets/images/logo.png" alt="">
                                </a>
                                <button class="menu-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent">
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                    <span class="icon-spar"></span>
                                </button>

                                <div class="navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            Accueil
                                        </a>
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            Services
                                        </a>
                                        <a class="nav-link" href="#" data-toggle="dropdown">
                                            A propos
                                        </a>
                                    </ul>
                                    <div class="d-inline my-2 my-lg-0">
                                        <ul class="navbar-nav">
                                            <li class="nav-item signin-btn">
                                                <a href="#" class="nav-link">
                                                    <i class="la la-sign-in"></i>
                                                    <span><b class="signin-op">Se connecter</b> ou <b class="reg-op">S'inscrire</b></span>
                                                </a>

                                            </li>
                                        </ul>
                                    </div>
                                    <a href="#" title="" class="close-menu"><i class="la la-close"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header><!--header end-->

        <div class="popup" id="sign-popup">
            <h3>Connectez-vous</h3>
            <div class="popup-form">
                <form method="POST">
                    <div class="form-field">
                        <input type="text" name="username" placeholder="Identifiant">
                    </div>
                    <div class="form-field">
                        <input type="text" name="password" placeholder="Mot de passe">
                    </div>
                    <!--form-cp end-->
                    <button type="submit" class="btn2" name="btn_connect">Connexion</button>
                </form>
            </div>
        </div>
        <!--popup end-->
        <div class="popup" id="register-popup">
            <h3>S'inscrire</h3>
            <div class="popup-form">
                <form>
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="form-field">
                        <input type="text" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Code Postal">
                    </div>
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Ville">
                    </div>
                    <div class="form-field">
                        <input type="text" name="email" placeholder="Adresse">
                    </div>
                    <div class="form-cp">
                        <a href="#" title="" class="signin-op">J'ai déjà un compte</a>
                    </div><!--form-cp end-->
                    <button type="submit" class="btn2" name="register">S'inscrire</button>
                </form>
            </div>
        </div><!--popup end-->

        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content">
                            <h1>Discover best properties in one place</h1>
                        </div>
                        <form action="#" class="row banner-search">
                            <div class="form_field addres">
                                <input type="text" class="form-control" placeholder="Enter Address, City or State">
                            </div>
                            <div class="form_field tpmax">
                                <div class="form-group">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Any type</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropeddown">
                                            <li>For Sale</li>
                                            <li>For Rent</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form_field tpmax">
                                <div class="form-group">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Min Price</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropeddown">
                                            <li>300$</li>
                                            <li>400$</li>
                                            <li>500$</li>
                                            <li>200$</li>
                                            <li>600$</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form_field tpmax">
                                <div class="form-group">
                                    <div class="drop-menu">
                                        <div class="select">
                                            <span>Max Price</span>
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                        <input type="hidden" name="gender">
                                        <ul class="dropeddown">
                                            <li>2000</li>
                                            <li>3000</li>
                                            <li>4000</li>
                                            <li>5000</li>
                                            <li>6000</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form_field srch-btn">
                                <a href="#" class="btn btn-outline-primary ">
                                    <i class="la la-search"></i>
                                    <span>Search</span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="intro section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 pl-0">
                        <div class="intro-content">
                            <h3>Homes around the world</h3>
                            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.
                            </p>
                            <a href="#" class="btn btn-outline-primary view-btn">
                                <i class="icon-arrow-right-circle"></i>View for rent</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 pr-0">
                        <div class="intro-img">
                            <img src="https://via.placeholder.com/570x400" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="intro-thumb-row">
                    <a href="#" class="intro-thumb">
                        <img src="https://via.placeholder.com/95x70" alt="">
                        <h6>Homes</h6>
                    </a>
                    <a href="#" class="intro-thumb">
                        <img src="https://via.placeholder.com/95x70" alt="">
                        <h6>Appartments</h6>
                    </a>
                    <a href="#" class="intro-thumb">
                        <img src="https://via.placeholder.com/95x70" alt="">
                        <h6>Garages</h6>
                    </a>
                </div>
            </div>
        </section>

        <section class="popular-listing section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Discover</span>
                            <h3>Popular Listing</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <a href="24_Property_Single.html" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <h5>$550.000</h5>
                                        <span>For Rent</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="24_Property_Single.html" title="">
                                    <h3>Traditional Apartments</h3>
                                    <p> <i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                </a>
                                <ul>
                                    <li>3 Bathrooms</li>
                                    <li>2 Beds</li>
                                    <li>Area 555 Sq Ft</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="pull-left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="#" class="pull-right">
                                    <i class="la la-calendar-check-o"></i> 25 Days Ago</a>
                            </div>
                            <a href="24_Property_Single.html" title="" class="ext-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <a href="24_Property_Single.html" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <h5>$550.000</h5>
                                        <span>For Rent</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="24_Property_Single.html" title="">
                                    <h3>Traditional Apartments</h3>
                                    <p> <i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                </a>
                                <ul>
                                    <li>3 Bathrooms</li>
                                    <li>2 Beds</li>
                                    <li>Area 555 Sq Ft</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="pull-left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="#" class="pull-right">
                                    <i class="la la-calendar-check-o"></i> 25 Days Ago</a>
                            </div>
                            <a href="24_Property_Single.html" title="" class="ext-link"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <a href="24_Property_Single.html" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="https://via.placeholder.com/370x295" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <h5>$550.000</h5>
                                        <span>For Rent</span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="24_Property_Single.html" title="">
                                    <h3>Traditional Apartments</h3>
                                    <p> <i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                </a>
                                <ul>
                                    <li>3 Bathrooms</li>
                                    <li>2 Beds</li>
                                    <li>Area 555 Sq Ft</li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="pull-left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="#" class="pull-right">
                                    <i class="la la-calendar-check-o"></i> 25 Days Ago</a>
                            </div>
                            <a href="24_Property_Single.html" title="" class="ext-link"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="alert alert-success" role="alert">
            <strong>Added to Favourites</strong> You can check your favourite items here <a href="#" class="alert-link">Favourite Items</a>.
            <a href="#" title="" class="close-alert"><i class="la la-close"></i></a>
        </div>

        <section class="explore-feature section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Explore Features</span>
                            <h3>Service You Need</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-sm-6 col-md-6 col-lg-4">
                        <a href="#" title="">
                            <div class="card">
                                <div class="card-body">
                                    <i class="icon-home"></i>
                                    <h3>Perfect Tools</h3>
                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit conseat ipsum, nec sagittis sem nibh.</p>
                                </div>
                            </div><!--card end-->
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-md-6 col-lg-4">
                        <a href="#" title="">
                            <div class="card">
                                <div class="card-body">
                                    <i class="icon-cursor"></i>
                                    <h3>Search in Click</h3>
                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit conseat ipsum, nec sagittis sem nibh.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-sm-6 col-md-6 col-lg-4">
                        <a href="#" title="">
                            <div class="card">
                                <div class="card-body">
                                    <i class="icon-lock"></i>
                                    <h3>User Control</h3>
                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit conseat ipsum, nec sagittis sem nibh.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-cities section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Popular Cities</span>
                            <h3>Find Perfect Place</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <a href="#">
                            <div class="card">
                                <div class="overlay"></div>
                                <img src="https://via.placeholder.com/370x370" alt="" class="img-fluid">
                                <div class="card-body">
                                    <h4>New York</h4>
                                    <p>5 Listings</p>
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <a href="#">
                            <div class="card">
                                <div class="overlay"></div>
                                <img src="https://via.placeholder.com/370x370" alt="" class="img-fluid">
                                <div class="card-body">
                                    <h4>London</h4>
                                    <p>10 Listings</p>
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <a href="#">
                            <div class="card">
                                <div class="overlay"></div>
                                <img src="https://via.placeholder.com/370x370" alt="" class="img-fluid">
                                <div class="card-body">
                                    <h4>Melbrone</h4>
                                    <p>7 Listings</p>
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="map-container" class="fullwidth-home-map">
            <h3 class="vis-hid">Visible Heading</h3>
            <div id="map" data-map-zoom="9"></div>
        </section>

        <a href="#" title="">    
            <section class="cta section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="cta-text">
                                <h2>Discover a home you'll love to stay</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </a>

        <section class="bottom section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-sm-6 col-md-4">
                        <div class="bottom-logo">
                            <img src="assets/images/logo.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-md-3">
                        <div class="bottom-list">
                            <h3>Helpful Links</h3>
                            <ul>
                                <li>
                                    <a href="18_Half_Map.html" title="">Half Map</a>
                                </li>
                                <li>
                                    <a href="#" title="">Register</a>
                                </li>
                                <li>
                                    <a href="#" title="">Pricing</a>
                                </li>
                                <li>
                                    <a href="#" title="">Add Listing</a>
                                </li>
                            </ul>
                        </div><!--bottom-list end-->
                    </div>
                    <div class="col-xl-5 col-sm-12 col-md-5 pl-0">
                        <div class="bottom-desc">
                            <h3>Aditional Information</h3>
                            <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="footer-content">
                            <div class="row justify-content-between">
                                <div class="col-xl-6 col-md-6">
                                    <div class="copyright">
                                        <p>&copy; Selio theme made in EU. All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="footer-social">
                                        <a href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--footer end-->


    </div><!--wrapper end-->






    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVwc4veKudU0qjYrLrrQXacCkDkcy3AeQ"></script>
    <script src="assets/js/map-cluster/infobox.min.js"></script>
    <script src="assets/js/map-cluster/markerclusterer.js"></script>
    <script src="assets/js/map-cluster/maps.js"></script>



</body>

</html>