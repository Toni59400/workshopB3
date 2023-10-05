<?php
session_start();
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
    <title>Accueil - Vitas</title>
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
                                    <a class="nav-link" href="#">
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
                            <span>Des avantages ?</span>
                            <h3>Voici nos abonnements</h3>
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
                                    <li>Publicité</li>
                                    <li>Lien affilié</li>
                                </ul>
                                <a href="#" title="" class="btn btn-default">Actuel</a>
                            </div><!--price end-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price">
                                <h4>Mensuel</h4>
                                <h2>2.99€/mois</h2>
                                <ul>
                                    <li>Pas de pub' pour plus de fluidité</li>
                                    <li>Support client prioritaire</li>
                                    <li>Lien affilié</li>
                                </ul>
                                <a href="#" title="" class="btn btn-default">Choisir</a>
                            </div><!--price end-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="price">
                                <h4>Parainnage</h4>
                                <h2>-20% sur le premium</h2>
                                <ul>
                                    <li>Donne ton code et invite un amis </li>
                                    <li class="bold">Ton code : <bold>KFE4UTH</bold></li>
                                    <li>Ton ami(e)s profitera instantanement de cette reduction !</li>
                                </ul>
                                <a href="#" title="" class="btn btn-default">Partager mon code</a>
                            </div><!--price end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="agents-sec section-padding" style="margin-bottom: 120px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-heading">
                            <h3>Rencontre nos Equipes !</h3>
                        </div>
                    </div>
                </div><!--justify-content-center end-->
                <div class="agents-details">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                    
                                        <img src="./assets/images/john.jpg" alt="" style="width:100%;">
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3>John</h3>
                                    <span>Aime partager son savoir
Aime participé à des ateliers
Souhaiter faire des activités avec ses enfants</span>
                                </div><!--agent-info end-->
                                
                            </div><!--agent end-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                    
                                        <img src="./assets/images/sarah.jpg" alt="" style="width:100%;">
                                    
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3>Aniece</h3>
                                    <span>Aime les réseaux sociaux
Aime passée du temps avec les enfants</span>
                                </div><!--agent-info end-->
                            </div><!--agent end-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                        <img src="./assets/images/aniece.jpg" alt="" style="width:100%;">
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3>Sarah</h3>
                                    <span>Aime les ateliers cuisines
Aime partage son savoir</span>
                                </div><!--agent-info end-->
                            </div><!--agent end-->
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="agent">
                                <div class="agent_img">
                                    <img src="./assets/images/damien.jpg" alt="" style="width:100%;">
                                    
                                </div><!--agent-img end-->
                                <div class="agent_info">
                                    <h3>Damien</h3>
                                    <span>Aime l’informatique
Découvrir de nouvelle chose</span>
                                </div><!--agent-info end-->
                            </div><!--agent end-->
                        </div>
                    </div>
                </div><!--agents-details end-->
            </div>
        </section><!--agents-sec end-->

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
                $_SESSION["user"] = $dataUsr['id_users'];
                $_SESSION["name"] = $dataUsr['mail'];
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