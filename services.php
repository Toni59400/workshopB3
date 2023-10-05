<?php
session_start();

include("php/config/config.php");
include("php/config/dbconnection.php");
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vitas - Services</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color.css">
    
</head>

<body class="rtl">
    
    
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
                    <div class="col-xl-3 col-md-5 col-sm-12">Vitas</div>
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
                                    <a class="nav-link" href="./accueil.php">
                                        Accueil
                                    </a>
                                    <a class="nav-link" href="services.php">
                                        Services
                                    </a>
                                    <a class="nav-link" href="#">
                                        A propos
                                    </a>
                                </ul>
                                <div class="d-inline my-2 my-lg-0">
                                    <ul class="navbar-nav">
                                    <?php 
                                        if(!isset($_SESSION['name'])){
                                        ?>
                                        <li class="nav-item signin-btn">
                                            <a href="#" class="nav-link">
                                                <span><b class="signin-op">Se connecter</b> ou <b class="reg-op">S'inscrire</b></span>
                                            </a>

                                        </li>
                                        <?php
                                        }else{
                                        ?>
                                        <li>Connecté en tant que : <?=$_SESSION['name']?></li>
                                        <?php
                                        }
                                        ?>
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

    
    <div class="popup d-block" id="sign-popup">
        <h3>Ajouter un service</h3>
        <?php
        $data = $db->query("SELECT * from categorie")->fetchAll();
        ?>
        <div class="popup-form">
            <form method="POST">
                <div class="form-field">
                    <input type="text" name="nameServ" placeholder="Nom du service">
                </div>
                <div class="form-field">
                    <input type="text" name="cpServ" placeholder="Code Postal">
                </div>
                <div class="form-field">
                    <input type="text" name="villeServ" placeholder="Ville">
                </div>
                <div class="form-field">
                    <input type="text" name="adresseServ" placeholder="Adresse Postale">
                </div>
                <div class="form-field">
                    <input type="number" name="prixServ" placeholder="Prix">
                </div>
                <div class="form-field">
                    <input type="text" name="latServ" placeholder="Latitude">
                </div>
                <div class="form-field" style="margin-bottom: 20px;">
                    <input type="text" name="longServ" placeholder="Longitude">
                </div>
                <div class="form-field">
                    <label for="">Categorie : </label>
                    <select name="catServ" id="" style="margin-top:10px;">
                    <?php
                        foreach($data as $cat){
                            $id = $cat["id"];
                            $name = $cat["nom_categorie"];
                        ?>
                        <option value="<?=$id?>"><?=$name?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <!--form-cp end-->
                <button type="submit" class="btn2" name="btn_add">Ajouter</button>
            </form>
        </div>
    </div>
    
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

        <section class="listing-main-sec section-padding">
            <div class="container">
                <div class="listing-main-sec-details">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="listing-directs">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="grid-view-tab2" role="tabpanel" aria-labelledby="grid-view-tab2">
                                    <?php
                                        if(isset($_SESSION["name"])){
                                    ?>
                                    <form class="row banner-search">
                                        <div class="form_field">
                                        <li class="nav-item signin-btn">
                                            <a href="#" class="nav-link">
                                                <span><b class="signin-op">Ajouter un service</b></span>
                                            </a>

                                        </li>
                                        </div>
                                    </form>

                                    <?php
                                        }
                                    ?>
                                        <div class="list-products">
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
                                                <div class="card_bod_full">
                                                    <div class="card-body">
                                                        <a href="24_Property_Single.html" title="">
                                                            <h3>Traditional Apartments</h3>
                                                            <p><i class="la la-map-marker"></i>212 5th Ave, New York</p>
                                                        </a>
                                                        <ul>
                                                            <li>3 Bathrooms</li>
                                                            <li>2 Beds</li>
                                                            <li>Area 555 Sq Ft</li>
                                                        </ul>
                                                    </div>
                                                    <div class="card-footer">
                                                        <div class="crd-links">
                                                            <a href="#" class="pull-left">
                                                                <i class="la la-heart-o"></i>
                                                            </a>
                                                            <a href="#" class="plf">
                                                                <i class="la la-calendar-check-o"></i> 25 Days Ago
                                                            </a>
                                                        </div><!--crd-links end-->
                                                        <a href="24_Property_Single.html" title="" class="btn-default">View Details</a>
                                                    </div>
                                                </div><!--card_bod_full end-->
                                                <a href="24_Property_Single.html" title="" class="ext-link"></a>
                                            </div><!--card end-->
                                        </div><!-- list-products end-->
                                    </div>
                                </div><!--tab-content end-->
                            </div><!--listing-directs end-->
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar layout2">
                                <div class="widget widget-property-search">
                                    <h3 class="widget-title">Chercher un service</h3>
                                    <form action="#" class="row banner-search">
                                        <div class="form_field">
                                            <input type="text" class="form-control" placeholder="Entrez le nom du service, ou la ville"> 
                                        </div>
                                        <div class="form_field">
                                            <a href="#" class="btn btn-outline-primary ">
                                                <span>Rechercher</span>
                                            </a>
                                        </div>
                                    </form>
                                </div><!--widget-property-search end-->
                                    <h3 class="widget-title">Services Populaires</h3>
                                    <ul>
                                        <li>
                                            <div class="wd-posts">
                                                <div class="ps-img">
                                                    <a href="14_Blog_Open.html" title="">
                                                        <img src="https://via.placeholder.com/112x89" alt="">
                                                    </a>
                                                </div><!--ps-img end-->
                                                <div class="ps-info">
                                                    <h3><a href="14_Blog_Open.html" title="">Traditional Apartments</a></h3>
                                                    <strong>$125.700</strong>
                                                    <span><i class="la la-map-marker"></i>212 5th Ave, New York</span>
                                                </div><!--ps-info end-->
                                            </div><!--wd-posts end-->
                                        </li>
                                    </ul>
                                </div><!--widget-posts end-->
                            </div><!--sidebar end-->
                        </div>
                    </div>
                </div><!--listing-main-sec-details end-->
            </div>    
        </section><!--listing-main-sec end-->

        <a href="#" title="">    
            <section class="cta section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="cta-text">
                                <h2>Re decouvrez vos entourages ! </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </a>

        <section class="bottom section-padding">
            <div class="bottom-logo">
                <center><img src="assets/images/logo.png" alt="" class="img-fluid">
                <p>All right reserved Vitas</p>
                <center>

            </div>
        </section>

        <?php
    if(isset($_POST["btn_connect"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $mail = $_POST['username'];
            $pass = $_POST['password'];
            $dataUsr = getOneUsersByMail($mail, $db);
            if(password_verify($pass, $dataUsr['pass'])){
                $_SESSION["user"] = $dataUsr['id_users'];
                $_SESSION["name"] = $dataUsr['mail'];
            }
        }
    }

    if(isset($_POST['btn_add'])){
        $nameServ = $cpServ = $villeServ = $adresseServ = $prixServ = $latServ = $longServ = "";

        // Vérification et récupération des données du formulaire
        if (!empty($_POST["nameServ"])) {
            $nameServ = $_POST["nameServ"];
        }
    
        if (!empty($_POST["cpServ"])) {
            $cpServ = $_POST["cpServ"];
        }
    
        if (!empty($_POST["villeServ"])) {
            $villeServ = $_POST["villeServ"];
        }
    
        if (!empty($_POST["adresseServ"])) {
            $adresseServ = $_POST["adresseServ"];
        }
    
        if (!empty($_POST["prixServ"])) {
            $prixServ = $_POST["prixServ"];
        }
    
        if (!empty($_POST["latServ"])) {
            $latServ = floatval($_POST["latServ"]);
        }
        
        if (!empty($_POST["longServ"])) {
            $longServ = floatval($_POST["longServ"]);
        }
        $cate = 1;
        $idUser = $_SESSION["user"];
        $sql = $db->prepare("INSERT into services(nom, cp, ville, adresse, dispo, prix, id_categorie, id_users, longitude, latitude) value ('$nameServ','$cpServ','$villeServ','$adresseServ',1,'$prixServ','$cate','$idUser','$longServ','$latServ')")->execute();
    }
?>


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/html5lightbox.js"></script>
    <script src="assets/js/scripts.js"></script>

</body>

</html>