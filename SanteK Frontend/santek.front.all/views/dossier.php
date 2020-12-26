<?php
    include_once "../model/class.php";
    include_once "../controllers/function.php";

    $error = "";

    // create album

    // create an instance of the controller    
    $fct = new consul();
    if (
        isset($_POST["nom_patient"]) &&       
        isset($_POST["date_n"]) &&
		isset($_POST["adresses"]) &&       
        isset($_POST["faxe"]) &&
		isset($_POST["type_rap"]) &&       
		isset($_POST["periode"])        
    ) {
        if (
            !empty($_POST["nom_patient"]) && 
            !empty($_POST["date_n"]) && 
			!empty($_POST["adresses"]) && 
            !empty($_POST["faxe"]) && 
			!empty($_POST["type_rap"]) &&  
			!empty($_POST["periode"])  
        ) {
            $dossier = new dossier(           
                $_POST['nom_patient'],
                $_POST['date_n'], 
				$_POST['adresses'],
                $_POST['faxe'], 
				$_POST['type_rap'], 
                $_POST['periode']
            );
            $fct->ajouterDossier($dossier);
            header('Location:showDossier.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!doctype html>
<html>


<!-- Mirrored from www.smartpixel.tech/smartmed/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>SanteK</title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-180x180.png">
    <meta name="msapplication-TileImage" content="mstile.png">
    <meta name="msapplication-TileColor" content="#02a9ff">
    <meta name="theme-color" content="#02a9ff">

    <!-- FONTS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- JUSTICE ICONS -->
    <link rel="stylesheet" href="assets/fonts/smartmed-icons/css/smartmed-icons.min.css">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.min.css">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.html">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="assets/plugins/animations/animate.min.css">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/pages-style.css">

    <!-- THEME OPTIONS -->
    <link rel="stylesheet" href="assets/plugins/theme-options/theme-options.css">

    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">


</head>

<body class="sticky-header header-classic footer-parallax">

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="index-2.html">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-9">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu">
                                <li class="dropdown">
                                    <a href="index-2.html">Acceuil</a>
                                    <ul>
                                        <li><a class="waves" href="index-2.html">Acceuil 1</a></li>
                                        <li><a class="waves" href="index-3.html">Acceuil 2</a></li>
                                        <li><a class="waves" href="index-4.html">Acceuil 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="about.html">A propos</a>
                                    <ul>
                                        <li><a class="waves" href="about.html">A propos 1</a></li>
                                        <li><a class="waves" href="about-2.html">A propos 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="services.php">Evenements</a>
                                    <ul>
                                        <li><a class="waves" href="services.php">Participer</a></li>
                                        <li><a class="waves" href="services-2.php">Action de don</a></li>
                                        <li><a class="waves" href="services-3.php">Nos evenements</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="team.html">Produits</a>
                                    <ul>
                                        <li><a class="waves" href="team.html">Chris Martin</a></li>
                                        <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                        <li><a class="waves" href="team.html">John William</a></li>
                                        <li><a class="waves" href="team.html">Martha Davis</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="news.html">Articles</a>
                                    <ul>
                                        <li><a class="waves" href="news.html">News right sidebar</a></li>
                                        <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                        <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                        <li><a class="waves" href="news-single.html">News single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Contactez-nous</a>
                                    <ul>
                                        <li><a class="waves" href="contact.html">Contact 1</a></li>
                                        <li><a class="waves" href="contact-2.html">Contact 2</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </header><!-- HEADER -->

        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
                 style="background-image: url(images/backgrounds/page-header-4.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Dossier Médicale du Pateient</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->
           <small><b> Revenir pour :</b></small> <button class="social-media a.css3:hover"><a href="appointment.html">Prendre un RDV</a></button>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Meilleures solutions médicales</h6>
                            <h2>Ajouter Votre Dossier Médicale</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

<!--------------------------------------------------- AJOUT RDV------------------------------------------------------->      
        
        <div id="error">
            <?php echo $error;?>
        </div><center>
                        <form id="contact-form" name="report-form-form" method="post" action="">
                            <fieldset>

                                <div class="row">
                                    <div class="col-12">

                                        <p>
                                            <input class="col-12" id="nom_patient" type="text" name="nom_patient" placeholder="                       Flen Ben Foulen" required>
                                            <span></span>
                                            <label for="nom_patient">Nom</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="date_n" type="date" name="date_n" placeholder="" required>
                                            <span></span>
                                            <label for="date_n">Date De Naissance</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="adresses" type="text" name="adresses" placeholder="" required>
                                            <span></span>
                                            <label for="email">Adresse</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="faxe" type="text" name="faxe" placeholder="         +216 7* *** ***" required>
                                            <span></span>
                                            <label for="faxe">Faxe</label>
                                        </p>

                                    </div><!-- col -->
                                    <div class="col-md-6 col-lg-3">

                                        <p>
                                            <input class="col-12" id="periode" type="date" name="periode" required>
                                            <span></span>
                                            <label for="date">Date de Poste</label>
                                        </p>

                                    </div><!-- col -->
                                </div><!-- row -->

                                <p>
                                    <textarea class="col-12" id="type_rap" name="type_rap" rows="5" cols="25" placeholder="" required></textarea>
                                    <span></span>
                                    <label for="observations">Décrivez l'état du patient</label>
                                </p>

                                <button class="btn btn-default waves" id="submit" type="submit" name="submit" value="">Archiver Le dossier</button>

                            </fieldset>
                        </form></center>
                        

<!----------------------------------------------------Fin AJOUT--------------------------------------------------------------------------------------------------------------------->                        
</div><!-- container -->

</div><!-- PAGE CONTENT -->


<!-- FOOTER -->
<footer id="footer-container">

    <div id="footer">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="widget widget-text">

                        <div class="text-center">

                            <p><img src="assets/images/logo.png" alt=""></p>
                            <p class="text-uppercase">Best medical solutions</p>

                        </div>

                    </div><!-- widget-text -->

                    <div class="widget widget-contact">

                        <ul class="inline">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                4453 Meadow Lane, San Jose, CA 95134
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                315-411-8716
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <a href="mailto:info@smart-pixel.xyz">info@smart-pixel.xyz</a>
                            </li>
                        </ul>

                    </div><!-- widget-contact -->

                    <div class="widget widget-pages">

                        <ul class="inline">
                            <li><a href="#">Acceuil</a></li>
                            <li><a href="#">Apropos</a></li>
                            <li><a href="#">Evenements</a></li>
                            <li><a href="#">Produits</a></li>
                            <li><a href="#">Articles</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                        </ul>

                    </div><!-- widget-pages -->

                    <div class="widget widget-text">

                        <div>

                            <p class="copyright">
                                <small>Template by <a href="#">SmartPixel</a> &copy; All rights reserved</small>
                            </p>

                        </div>

                    </div><!-- widget-text -->

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->

    </div><!-- footer -->

</footer><!-- FOOTER -->

</div><!-- MAIN CONTAINER -->


<!-- SCROLL UP -->
<a id="scroll-up" class="waves"><i class="fa fa-angle-up"></i></a>


<!-- THEME OPTIONS -->
<div id="theme-options"></div>


<!-- jQUERY -->
<script src="assets/plugins/jquery/jquery-2.2.4.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="assets/bootstrap/js/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- VIEWPORT -->
<script src="assets/plugins/viewport/jquery.viewport.min.js"></script>

<!-- MENU -->
<script src="assets/plugins/menu/hoverintent.min.js"></script>
<script src="assets/plugins/menu/superfish.min.js"></script>

<!-- FANCYBOX -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

<!-- OWL CAROUSEL -->
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<!-- PARALLAX -->
<script src="assets/plugins/parallax/jquery.stellar.min.js"></script>

<!-- ISOTOPE -->
<script src="assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
<script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

<!-- CONTACT FORM VALIDATE & SUBMIT -->
<script src="assets/plugins/validate/jquery.validate.min.js"></script>
<script src="assets/plugins/submit/jquery.form.min.js"></script>

<!-- GOOGLE MAPS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJB5U3ZU5nnV3ta4t1VSz92zQi_3Xmmo"></script>
<script src="assets/plugins/googlemaps/gmap3.min.js"></script>

<!-- CHARTS -->
<script src="assets/plugins/charts/jquery.easypiechart.min.js"></script>

<!-- COUNTER -->
<script src="assets/plugins/counter/jquery.simplecounter.min.js"></script>

<!-- INSTAFEED -->
<script src="assets/plugins/instafeed/instafeed.min.js"></script>

<!-- TWITTER -->
<script src="assets/plugins/twitter/twitterfetcher.min.js"></script>

<!-- YOUTUBE PLAYER -->
<script src="assets/plugins/ytplayer/jquery.mb.ytplayer.min.html"></script>

<!-- COUNTDOWN -->
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>

<!-- ANIMATIONS -->
<script src="assets/plugins/animations/wow.min.js"></script>

<!-- THEME OPTIONS -->
<script src="assets/plugins/theme-options/jquery.cookie.min.js"></script>
<script src="assets/plugins/theme-options/theme-options.js"></script>

<!-- CUSTOM JS -->
<script src="assets/js/custom.js"></script>

</body>


<!-- Mirrored from www.smartpixel.tech/smartmed/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:08 GMT -->
</html>