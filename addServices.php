<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location: index.php");
}else{
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vitas - Ajout de Services</title>
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
                                    <a class="nav-link" href="/accueil.php">
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
                                        if(!isset($_SESSION['user'])){
                                        ?>
                                        <li class="nav-item signin-btn">
                                            <a href="#" class="nav-link">
                                                <span><b class="signin-op">Se connecter</b> ou <b class="reg-op">S'inscrire</b></span>
                                            </a>

                                        </li>
                                        <?php
                                        }else{
                                        ?>
                                        <li>Connecter en tant que : <?=$_SESSION['name']?></li>
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

        

        <div class="contact-sec">
        	<div class="container">
        		<div class="contact-details-sec">
        			<div class="row">
        				<div class="col-lg-8 col-md-8 pl-0">
        					<div class="contact_form">
        						<h3>Proposer un service</h3>
        						<p>Postez un service pour que la communauté puisse y avoir accès !</p>
        						<form class="js-ajax-form">
                                    <div class="form-group no-pt">
                                        <div class="missing-message">
                                            Populate Missing Fields
                                        </div>
                                        <div class="success-message">
                                            <i class="fa fa-check text-primary"></i> Thank you!. Your message is successfully sent...
                                        </div>
                                        <div class="error-message">Populate Missing Fields</div>
                                    </div><!--form-group end-->
                                    <div class="form-fieldss">
            							<div class="row">
            								<div class="col-lg-4 col-md-4 pl-0">
            									<div class="form-field">
            										<input type="text" name="name" placeholder="Your Name" id="name">
            									</div><!-- form-field end-->
            								</div>
            								<div class="col-lg-4 col-md-4">
            									<div class="form-field">
            										<input type="email" name="email" placeholder="Your Email" id="email">
            									</div><!-- form-field end-->
            								</div>
            								<div class="col-lg-4 col-md-4 pr-0">
            									<div class="form-field">
            										<input type="text" name="phone" placeholder="Your Phone">
            									</div><!-- form-field end-->
            								</div>
            								<div class="col-lg-12 col-md-12 pl-0 pr-0">
            									<div class="form-field">
            										<textarea name="message" placeholder="Your Message"></textarea>
            									</div><!-- form-field end-->
            								</div>
            								<div class="col-lg-12 col-md-12 pl-0">
            									<button type="submit" class="btn-default submit">Send Message</button>
            								</div>
                                            
            							</div>
                                    </div><!--form-fieldss end-->
        						</form>
        					</div><!--contact_form end-->
        				</div>
        				<div class="col-lg-4 col-md-4 pr-0">
        					<div class="contact_info">
        						<h3>Contact Information</h3>
        						<ul class="cont_info">
        							<li><i class="la la-map-marker"></i> 212 5th Ave, New York</li>
        							<li><i class="la la-phone"></i> +1 212-925-3797</li>
        							<li><i class="la la-envelope"></i><a href="mailto:info@example.com" title="">tomas@contact.com</a></li>
        						</ul>
        						<ul class="social_links">
        							<li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
        							<li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
        							<li><a href="#" title=""><i class="fa fa-linkedin"></i></a></li>
        						</ul>
        					</div><!--contact_info end-->
        				</div>
        			</div>
        		</div><!--contact-details-sec end-->
        	</div>
        </div><!--contact-sec end-->

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
        </footer>

    </div><!--wrapper end-->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/validator.js"></script>
    <script src="assets/js/scripts.js"></script>

    <!-- Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVwc4veKudU0qjYrLrrQXacCkDkcy3AeQ"></script>
    <script src="assets/js/map-cluster/infobox.min.js"></script>
    <script src="assets/js/map-cluster/markerclusterer.js"></script>
    <script src="assets/js/map-cluster/map2.js"></script>



</body>

</html>

<?php
}


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
