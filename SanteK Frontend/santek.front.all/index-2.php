
<?php
include  "../Model/utilisateur.php";
include  "../Controller/utilisateurC.php";



$UtilisateurC= new  UtilisateurC();
$liste=$UtilisateurC->afficherdocteur();?>




<!doctype html>
<html>


<!-- Mirrored from www.smartpixel.tech/smartmed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:37:51 GMT -->
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

<body class="sticky-header header-center footer-parallax">

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu-left">
                                <li class="dropdown active">
                                    <a href="index-2.html">Acceuil</a>
<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
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
                                    <a href="services.html">Evenements</a>
                                    <ul>
                                        <li><a class="waves" href="services.html">Participer</a></li>
                                        <li><a class="waves" href="services-2.html">Action de don</a></li>
                                    </ul>
=======
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="about.html">A propos</a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="services.html">Evennement</a>
                                   
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php
                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                    <div class="col-md-4">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="index-2.html">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-4">

                        <!-- MENU -->
                        <nav>

                            <ul class="menu clearfix" id="menu-right">
                                <li class="dropdown">
<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
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
                                    <a href="contact.html">Contactez nous</a>
                                    <ul>
                                        <li><a class="waves" href="contact.html">Contact 1</a></li>
                                        <li><a class="waves" href="contact-2.html">Contact 2</a></li>
                                    </ul>
=======
                                    <a href="team.html">Produit</a>
                                   
                                </li>
                                <li class="dropdown">
                                    <a href="news-3.php">Article</a>
                                  
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Contactez nous</a>
                                   
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php
                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </header><!-- HEADER -->

        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div class="main-slider-container">
                <div class="owl-carousel main-slider">
                    <div class="item" style="background-image:url(images/index/main-slider/bg-slide-1.jpg);">

                        <div class="slide-overlay"></div>

                        <div class="slide-description">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                        <h1><b>SanteK </b>nous vous offrons nos meilleurs services</h1>
=======
                                        <h1>La meilleure équipe de médecins</h1>
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php

                                        <p>SanteK est une plateforme de santé innovante <br> 
                                            SANTEK est la solution pour vos inquiétudes !</p>

<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                        <a class="btn btn-default waves" href="appointment.html">Se connecter</a>
=======
                                     
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- container -->

                        </div><!-- slider-description -->

                    </div><!-- item -->
                    <div class="item" style="background-image:url(images/index/main-slider/bg-slide-2.jpg);">

                        <div class="slide-description">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                        <h1>SanteK offres les meilleurs solutions</h1>
=======
                                        <h1>Nous sommes là pour vous</h1>
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php

                                        <p>SanteK permet de prendre rendez-vous en ligne gratuitement <br>
                                            et qui donne l’information sur les symptômes de maladie les plus courants et les plus récents.
                                             </p>

<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                        <a class="btn btn-default waves" href="appointment.html">Se connecter</a>
=======
                                        
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php

                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- container -->

                        </div><!-- slider-description -->

                    </div><!-- item -->
                    <div class="item" style="background-image:url(images/index/main-slider/bg-slide-3.jpg);">

                        <div class="slide-overlay"></div>

                        <div class="slide-description">

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                        <h1>Santek ici pour vous !</h1>
=======
                                        <h1>Meilleures solutions de santé médicale</h1>
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php

                                        <p>C'est une base de données de la majorité des médicaments en mettant en avant les prix 
                                            et les indications nécessaires pour chaque produit.</p>

<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                        <a class="btn btn-default waves" href="appointment.html">Se connecter</a>

=======
                                       
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php
                                    </div><!-- col -->
                                </div><!-- row -->
                            </div><!-- container -->

                        </div><!-- slider-description -->

                    </div><!-- item -->
                </div><!-- main-slider -->
            </div><!-- main-slider-container -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>Meilleures solutions médicale</h6>
                            <h2>Bienvenue sur SANTEK</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container mb-4">
                <div class="row">
                    <div class="col-md-6 ml-auto">

                        <p class="text-md-right">Vestibulum hendrerit vehicula blandit. Donec lectus quam,
                            semper a hendrerit sollicitudin ante sit amet, imperdiet ac metus. In sit amet
                            nulla id augue tempor dictum. Morbi dui mauris, sollicitudin ante vulputate ut
                            leo eget, ferme ntum lacinia mauris. Nunc sollicitudin ante ut diam dictum
                            facilisis tempor sit amet.</p>

                    </div><!-- col -->
                    <div class="col-md-6 mr-auto">

                        <p>Morbi dui mauris, vulputate ut leo eget, ferme ntum lacinia mauris. Nunc sollicitudin
                            ante ut diam dictum facilisis. Aliquam tempor sit amet justo vitae sollicitudin. Donec
                            lectus quam, semper a hendrerit sit amet, imperdiet ac metus. In sit amet nulla id augue
                            tempor dictum. Morbi dui mauris, vulputate ut leo.</p>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            

            <div class="container">
                <div class="row">
                    
                   
                   
                    <?php  foreach($liste as $row){ ?>
                   
                   
                    <div class="col-sm-6 col-lg-3">

                        <div class="team-member">
                            <div class="team-member-thumb rounded-circle">

                                <img src="<?php echo $row['image'] ?>"  alt="">

                            </div><!-- team-member-thumb -->
                            <div class="team-member-details">

                                <h4><?php echo $row['nom'] ?> <?php echo $row['prenom'] ?></h4>
                                

                            </div><!-- team-member-details -->
                        </div><!-- team-member -->

                    </div><!-- col -->
					<?php } ?>
                </div><!-- row -->
            </div><!-- container -->

            <section class="full-section dark-section parallax" id="section-3" data-stellar-background-ratio="0.3">

                <div class="full-section-overlay-color"></div>

                <div class="full-section-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="headline text-center">

                                    <h6>What we do</h6>
<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                    <h2>Nos évenements</h2>
=======
                                    <h2>Nos Services</h2>
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php

                                </div><!-- headline -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp">

                                    <i class="smartmed-icon-lungs"></i>

                                    <div class="service-box-content">

                                        <h4>Internal Medicine</h4>

                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Pellen tesque vitae
                                            dui interdum, rhoncus velit ipsum enim sed est.</p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                                    <i class="smartmed-icon-first-aid-kit-2"></i>

                                    <div class="service-box-content">

                                        <h4>Emergency medicine</h4>

                                        <p>Etiam eu nulla eget ligula mollis faucibus. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                                    <i class="smartmed-icon-nuclear"></i>

                                    <div class="service-box-content">

                                        <h4>Radiology</h4>

                                        <p>Morbi aliquam augue velit, id dapibus elit accumsan ut. Pellentesque a sem sed metus
                                            fringilla posuere eu ac metus ex non sapien.</p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp">

                                    <i class="smartmed-icon-teeth"></i>

                                    <div class="service-box-content">

                                        <h4>Dental surgery</h4>

                                        <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Pellen tesque vitae
                                            dui interdum, rhoncus velit ipsum enim sed est.</p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.1s">

                                    <i class="smartmed-icon-cardiogram-4"></i>

                                    <div class="service-box-content">

                                        <h4>Cardiothoracic surgery</h4>

                                        <p>Etiam eu nulla eget ligula mollis faucibus. Pellentesque habitant morbi
                                            tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                            <div class="col-md-6 col-lg-4">

                                <div class="service-box style-1 wow fadeInUp" data-wow-delay="0.2s">

                                    <i class="smartmed-icon-bones"></i>

                                    <div class="service-box-content">

                                        <h4>Orthopedic surgery</h4>

                                        <p>Morbi aliquam augue velit, id dapibus elit accumsan ut. Pellentesque a sem sed metus
                                            fringilla posuere eu ac metus ex non sapien.</p>

                                    </div><!-- service-box-content -->

                                </div><!-- service-box -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                </div><!-- full-section-container -->
            </section><!-- full-section -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="headline text-center">

                                        <h6>Que disent nos clients</h6>
                                        <h2>Témoignages</h2>

                                    </div><!-- headline -->

                                </div><!-- col -->
                            </div><!-- row -->
                        </div><!-- container -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="owl-carousel testimonials-slider">
                            <div class="item">

                                <div class="testimonial">

                                    <blockquote>
                                        <p>Maecenas dictum tincidunt tellus, mattis vehicula tellus sodales ut.
                                            Pellentesque laoreet magna non ex maximus euismod. Etiam a dui ac ante semper
                                            vestibulum id eu nisi.</p>
                                    </blockquote>

                                    <h5>Justin Lewis</h5>

                                </div><!-- testimonial -->

                            </div><!-- item -->
                            <div class="item">

                                <div class="testimonial">

                                    <blockquote>
                                        <p>Donec vitae hendrerit massa. Vivamus posuere arcu in rutrum facilisis.
                                            Nullam risus ligula, tempor a ipsum vitae, fringilla vehicula lectus. In
                                            porta vel lorem vitae lacinia.</p>
                                    </blockquote>

                                    <h5>Sandra Scott</h5>

                                </div><!-- testimonial -->

                            </div><!-- item -->
                            <div class="item">

                                <div class="testimonial">

                                    <blockquote>
                                        <p>Phasellus ac accumsan lectus. Nunc auctor pulvinar hendrerit. Integer
                                            tincidunt, leo in vehicula ullamcorper, mauris turpis sollicitudin purus, a
                                            vehicula neque lacus.</p>
                                    </blockquote>

                                    <h5>Bryan Harris</h5>

                                </div><!-- testimonial -->

                            </div><!-- item -->
                        </div><!-- testimonials-slider -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <br>


          

           
                   

                       
                      

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

            <br><br>

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
                                    <p class="text-uppercase">Meilleures solutions médicale</p>

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
                                        <a href="mailto:info@smart-pixel.xyz">info@santek-pixel.xyz</a>
                                    </li>
                                </ul>

                            </div><!-- widget-contact -->

                            <div class="widget widget-pages">

<<<<<<< HEAD:SanteK Frontend/santek.front.all/index-2.html
                                <ul class="inline">
                                    <li><a href="#">Acceuil</a></li>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Evenements</a></li>
                                    <li><a href="#">Produits</a></li>
                                    <li><a href="#">Articles</a></li>
=======
                                 <ul class="inline">
                                    <li><a href="#">Acceuil</a></li>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Evennement</a></li>
                                    <li><a href="#">Produit</a></li>
                                    <li><a href="#">Article</a></li>
>>>>>>> rima-branch:SanteK Frontend/santek.front.all/index-2.php
                                    <li><a href="#">Contactez nous</a></li>
                                </ul>

                            </div><!-- widget-pages -->

                            <div class="widget widget-text">

                                <div>

                                    <p class="copyright">
                                        <small>Template par <a href="#">WebON</a> &copy; All rights reserved</small>
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


<!-- Mirrored from www.smartpixel.tech/smartmed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:37:51 GMT -->
</html>