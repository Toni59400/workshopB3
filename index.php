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
    <link rel="stylesheet" href="assets/js/lib/slick/slick.css">
    <link rel="stylesheet" href="assets/js/lib/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
                    <div class="col-xl-3 col-md-5 col-sm-12">CommunityExchange</div>
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
    <div id="map" style="height: 600px; margin-top:250px;"></div>
        <section class="popular-listing hp2 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Découvrez nos services</span>
                            <h3>Les plus populaires</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php  $data = $db->query("SELECT * FROM services inner join users on services.id_users = users.id_users inner join categorie on services.id_categorie = categorie.id_categorie LIMIT 3 OFFSET 1;")->fetchAll();

                    foreach($data as $service){
                        $id = $service["id_services"];
                    $data2 = $db->query("SELECT * from avoirnote where avoirnote.id_services = $id")->fetchAll();
                    $moy = 0;
                    $cpt = 0;
                    foreach($data2 as $note){
                        $cpt = $cpt + 1;
                        $idNote = $note["id_note"];
                        $data3 = $db->query("SELECT * from note where id_note = $idNote")->fetch();
                        $moy = $moy + $data3["valeur"];
                    }

                    $moy = $moy/$cpt;
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <a href="" title="">
                                <div class="img-block">
                                    <div class="overlay"></div>
                                    <img src="/assets/images/service.png" alt="" class="img-fluid">
                                    <div class="rate-info">
                                        <h5><?=$service['prix']?>€</h5>
                                        <span><?=$service['nom_categorie']?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <a href="" title="">
                                    <h3><?=$service['nom']?></h3>
                                    <p> <i class="la la-map-marker"></i><?=$service["adresse"]?>, <?=$service["cp"]?>  <?=$service["ville"]?></p>
                                </a>
                                <ul>
                                    <li><?php if($service["dispo"] == 1 ) {echo "Disponible";} else { echo "Indisponible";}?></li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="pull-left">
                                    <i class="la la-heart-o"></i>
                                </a>
                                <a href="#" class="pull-right">
                                    <i class=""><?=$moy?>/5</i>
                                </a>
                            </div>
                            <a href="" title="" class="ext-link"></a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>
        <section class="pricing-sec section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Perfect Price</span>
                            <h3>Explore Our Pricing</h3>
                        </div>
                    </div>
                </div>
                <div class="price-sec">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="price">
                                <h4>Basic</h4>
                                <h2>Free</h2>
                                <ul>
                                    <li>One Property Included</li>
                                    <li>90 days expiration</li>
                                    <li>Rent and sell real estate</li>
                                    <li>Image Gallery</li>
                                    <li>30 Days Support</li>
                                </ul>
                                <a href="#" title="" class="btn btn-default">Select Plan</a>
                            </div><!--price end-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price">
                                <h4>Standart</h4>
                                <h2>$25.50</h2>
                                <ul>
                                    <li>Five Property Included</li>
                                    <li>180 days expiration</li>
                                    <li>Rent and sell real estate</li>
                                    <li>Image Gallery</li>
                                    <li>90 Days Support</li>
                                </ul>
                                <a href="#" title="" class="btn btn-default">Select Plan</a>
                            </div><!--price end-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price">
                                <h4>Basic</h4>
                                <h2>$99.00</h2>
                                <ul>
                                    <li>Unlimited Property Included</li>
                                    <li>280 days expiration</li>
                                    <li>Rent and sell real estate</li>
                                    <li>Image Gallery</li>
                                    <li>180 Days Support</li>
                                </ul>
                                <a href="#" title="" class="btn btn-default">Select Plan</a>
                            </div><!--price end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="agents-sec section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Perfect Team</span>
                            <h3>Meet Our Agents</h3>
                        </div>
                    </div>
                </div><!--justify-content-center end-->
                <div class="agents-details">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                    <a href="11_Agent_Profile.html" title="">
                                        <img src="https://via.placeholder.com/270x239" alt="">
                                    </a>
                                    <div class="view-post">
                                        <a href="11_Agent_Profile.html" title="" class="view-posts">View Profile</a>
                                    </div>
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3><a href="11_Agent_Profile.html" title="">Tomas Wilkinson</a></h3>
                                    <span>Douglas and Eleman Agency</span>
                                    <strong><i class="la la-phone"></i>+1 212-925-3797</strong>
                                </div><!--agent-info end-->
                                <a href="11_Agent_Profile.html" title="" class="ext-link"></a>
                            </div><!--agent end-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                    <a href="11_Agent_Profile.html" title="">
                                        <img src="https://via.placeholder.com/270x239" alt="">
                                    </a>
                                    <div class="view-post">
                                        <a href="11_Agent_Profile.html" title="" class="view-posts">View Profile</a>
                                    </div>
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3><a href="11_Agent_Profile.html" title="">Alexandra Pirlo</a></h3>
                                    <span>Douglas and Eleman Agency</span>
                                    <strong><i class="la la-phone"></i>+1 212-925-3797</strong>
                                </div><!--agent-info end-->
                                <a href="11_Agent_Profile.html" title="" class="ext-link"></a>
                            </div><!--agent end-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                    <a href="11_Agent_Profile.html" title="">
                                        <img src="https://via.placeholder.com/270x239" alt="">
                                    </a>
                                    <div class="view-post">
                                        <a href="11_Agent_Profile.html" title="" class="view-posts">View Profile</a>
                                    </div>
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3><a href="11_Agent_Profile.html" title="">Amanda Gates</a></h3>
                                    <span>Douglas and Eleman Agency</span>
                                    <strong><i class="la la-phone"></i>+1 212-925-3797</strong>
                                </div><!--agent-info end-->
                                <a href="11_Agent_Profile.html" title="" class="ext-link"></a>
                            </div><!--agent end-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                    <a href="11_Agent_Profile.html" title=""><img src="https://via.placeholder.com/270x239" alt=""></a>
                                    <div class="view-post">
                                        <a href="11_Agent_Profile.html" title="" class="view-posts">View Profile</a>
                                    </div>
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3><a href="11_Agent_Profile.html" title="">Tayler Gronos</a></h3>
                                    <span>Douglas and Eleman Agency</span>
                                    <strong><i class="la la-phone"></i>+1 212-925-3797</strong>
                                </div><!--agent-info end-->
                                <a href="11_Agent_Profile.html" title="" class="ext-link"></a>
                            </div><!--agent end-->
                        </div>
                    </div>
                </div><!--agents-details end-->
            </div>
        </section><!--agents-sec end-->

        <section class="partner-sec section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <span>Trusted by the Best</span>
                            <h3>Real Estate Partners</h3>
                        </div>
                    </div>
                </div><!--justify-content-center end-->
                <div class="partner-carousel">
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                    <div class="partner-logo">
                        <a href="#" title=""><img src="https://via.placeholder.com/136x37" alt=""></a>
                    </div><!--partner-logo end-->
                </div><!--partner-carousel end-->
            </div>
        </section><!--agents-sec end-->

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
    <?php
        $data = $db->query("SELECT * FROM services s inner join users on s.id_users = users.id_users")->fetchAll();
        foreach($data as $service){
    ?>


    <div class="card d-none" id="<?=$service['id_services']?>" style="position: absolute; right: 220px; top: 220px; z-index: 1000;">
        <div class="card-body">
            <h5 class="card-title"><?=$service["nom"]?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?=$service["adresse"]?>, <?=$service["cp"]?>  <?=$service["ville"]?></h6>
            <p class="card-text"><?=$service["prix"]?>€</p>
            <p class="card-text">Les contacter : <?=$service["mail"]?></p>
            <p style="cursor: pointer" class="btnRetour" id-retour="<?=$service['id_services']?>">Retour</p>
        </div>
    </div>
    <?php
        }
    ?>

<?php
    if(isset($_POST["btn_connect"])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $mail = $_POST['username'];
            $pass = $_POST['password'];
            $dataUsr = getOneUsersByMail($mail, $db);
            if(password_verify($pass, $dataUsr['pass'])){
                echo "Connexion valider.";
            }
        }
    }
?>






    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/lib/slick/slick.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- Maps -->
    <script>

        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var map = L.map('map').setView([latitude, longitude], 13); // Coordonnées initiales et niveau de zoom

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            fetch('/php/getCoord.php')
                .then(response => response.json())
                .then(data => {
                    data.forEach(item => {
                        var marker = L.marker([item.latitude, item.longitude]).addTo(map);
                        marker.on('click', () => {
                            item = document.getElementById(item.id_services);
                            item.classList.remove("d-none");
                            item.classList.add("d-block");
                            
                        });
                    });
            })
                .catch(error => {
                    console.error('Erreur lors de la récupération des données :', error);
            });
    });
}   

    btn = document.getElementsByClassName("btnRetour");
    for(let bouton of btn){
    bouton.addEventListener('click', function(){
        var id = this.getAttribute("id-retour");
        hideBtn(id);
    }, false);
    }

    function hideBtn(id){
        var element = document.getElementById(id);
        if (element) {
            element.classList.add("d-none");
            element.classList.remove("d-block");
            
        }
    }

    
    </script>



</body>

</html>