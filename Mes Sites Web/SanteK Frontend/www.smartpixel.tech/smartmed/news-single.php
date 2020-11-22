<?php
include  "../model/Article.php";
include  "../controller/ArticleC.php";

  $id=$_GET['id'];

	$articleC= new articleC();
	$article=$articleC->recupererarticle($id);
	

?>
<!doctype html>
<html>


<!-- Mirrored from www.smartpixel.tech/smartmed/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:05 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>SmartMed - Health &amp; Medical Clinic HTML5 &amp; CSS3 Template</title>

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
                                    <a href="index-2.html">Home</a>
                                    <ul>
                                        <li><a class="waves" href="index-2.html">Home 1</a></li>
                                        <li><a class="waves" href="index-3.html">Home 2</a></li>
                                        <li><a class="waves" href="index-4.html">Home 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="about.html">About</a>
                                    <ul>
                                        <li><a class="waves" href="about.html">About 1</a></li>
                                        <li><a class="waves" href="about-2.html">About 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="services.html">Services</a>
                                    <ul>
                                        <li><a class="waves" href="services.html">Services 1</a></li>
                                        <li><a class="waves" href="services-2.html">Services 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="team.html">Team</a>
                                    <ul>
                                        <li><a class="waves" href="team.html">Chris Martin</a></li>
                                        <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                        <li><a class="waves" href="team.html">John William</a></li>
                                        <li><a class="waves" href="team.html">Martha Davis</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown active">
                                    <a href="news.html">News</a>
                                    <ul>
                                        <li><a class="waves" href="news.html">News right sidebar</a></li>
                                        <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                        <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                        <li><a class="waves" href="news-single.html">News single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Contact</a>
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

                            <h1>News</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
 <?php foreach($article as $row){ ?>
                        <div class="blog-article">

                            <div class="blog-article-thumbnail">

                                <a class="date" href="#">
                                    <small>Jan</small>
                                    <span>15</span>
                                    <small>2019</small>
                                </a>
                               <?php echo"<img src='", $row['image'], "' alt=''>" ;?>

                            </div><!-- blog-article-thumbnail -->
                           <h4 class="blog-article-title"> <?php echo $row['titre'] ?> </h4>

                            <div class="blog-article-details">
                                by <a class="author" href="#">Admin</a>
                                in <a class="category" href="#">Stomatology</a>
                                <a class="comments" href="#">2 comments</a>
                            </div><!-- blog-article-details -->

                            <div class="blog-article-content">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed neque odio, pulvinar ut urna
                                    ut, venenatis vene natis nisi. Nulla tempus. Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Sed neque odio, pulvinar ut urna ut, venenatis venenatis nisinulla tempus.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sit amet metus
                                    pellentesque, iaculis nisl convallis, posuere orci. Ut in metus sed magna gravida porta.
                                    Aliquam eu mi quam. Ut placerat auctor lacus, vel viverra nisi finibus eget. Aenean et nibh
                                    id dolor fringilla aliquet. Nam rutrum, tellus id placerat congue, justo eros venenatis nisl,
                                    sed tincidunt justo purus ut mauris. Nullam ultricies magna vel felis suscipit, eu varius
                                    dolor cursus. In hac habitasse platea dictumst. Suspendisse tempor faucibus enim. Donec
                                    euismod lobortis justo, et vestibulum purus mattis vitae. Quisque rutrum, quam sed gravida
                                    congue, quam sapien iaculis felis, ut eleifend libero risus eu nisl. Sed dui lectus,
                                    sollicitudin sed tellus at, accumsan finibus metus. Suspendisse ac imperdiet nisi. Aenean
                                    urna diam, scelerisque at eros sed, vulputate tincidunt nibh. Quisque rutrum, quam sed
                                    gravida congue, quam sapien iaculis felis, ut eleifend libero risus eu nisl. Sed dui lectus,
                                    sollicitudin sed tellus at, accumsan finibus metus. Suspendisse ac imperdiet nisi.</p>

                            </div><!-- blog-article-content -->

                        </div><!-- blog-article -->

						
 <?php }?>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                        <div class="blog-article-author">

                            <img src="images/blog/blog-post/post-author.jpg" alt="">

                            <div class="blog-article-author-details">

                                <h6>Daniel Wilson <span>(Author)</span></h6>

                                <p>Pellentesque et erat accumsan, porttitor ipsum at, accumsan enim. Nulla sodales eros eget
                                    gravida ultricies. Mauris vel mattis sem. Morbi dui risus, dictum quis.</p>

                            </div><!-- blog-article-author-details -->

                        </div><!-- blog-article-author -->

                        <h6 class="commentlist-title">Comments (2)</h6>

                        <ul class="commentlist">
                            <li class="comment depth-1">
                                <div class="comment-body">

                                    <div class="comment-meta">

                                        <div class="comment-author">

                                            <img class="avatar" src="images/blog/blog-post/author-comment-1.jpg" alt="">
                                            <a class="fn" href="#">Jane Doe</a>
                                            <span class="says">says:</span>

                                        </div><!-- comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#">Jan 22, 2019</a>
                                        </div><!-- comment-metadata -->

                                    </div><!-- comment-meta -->

                                    <div class="comment-content">

                                        <p>Morbi accumsan odio lacus, sollicitudin pulvinar magna vulputate sed. Aliquam
                                            non rutrum massa, sed dictum magna. Cum sociis natoque penatibus et magnis dis
                                            parturient montes.</p>

                                    </div><!--  comment-content -->

                                    <div class="reply">
                                        <a class="comment-reply-link" href="#">Reply</a>
                                    </div><!-- reply -->

                                </div><!-- comment-body -->
                            </li>
                            <li class="comment depth-1">
                                <div class="comment-body">

                                    <div class="comment-meta">

                                        <div class="comment-author">

                                            <img class="avatar" src="images/blog/blog-post/author-comment-2.jpg" alt="">
                                            <a class="fn" href="#">Jane Smith</a>
                                            <span class="says">says:</span>

                                        </div><!-- comment-author -->

                                        <div class="comment-metadata">
                                            <a href="#">Jan 22, 2019</a>
                                        </div><!-- comment-metadata -->

                                    </div><!-- comment-meta -->

                                    <div class="comment-content">

                                        <p>Accumsan odio lacus, sollicitudin pulvinar magna vulputate sed. Aliquam non
                                            rutrum massa, sed dictum magna. Cum sociis natoque penatibus et magnis dis
                                            parturient montes.</p>

                                    </div><!--  comment-content -->

                                    <div class="reply">
                                        <a class="comment-reply-link" href="#">Reply</a>
                                    </div><!-- reply -->

                                </div><!-- comment-body -->
                            </li>
                        </ul>

                        <h6 class="commentform-title">Leave a comment</h6>

                        <form id="commentform" name="commentform" novalidate method="post" action="#">
                            <fieldset>

                                <p class="commentform-author">
                                    <input id="name" class="col-12" type="text" name="name" placeholder="" required>
                                    <span></span>
                                    <label for="name">Name</label>
                                </p>

                                <p class="commentform-email">
                                    <input id="email" class="col-12" type="text" name="email" placeholder="" required>
                                    <span></span>
                                    <label for="email">E-mail</label>
                                </p>

                                <p class="commentform-url">
                                    <input id="url" class="col-12" type="text" name="url" placeholder="" required>
                                    <span></span>
                                    <label for="url">URL</label>
                                </p>

                                <p class="commentform-comment">
                                    <textarea id="comment" class="col-12" name="comment" rows="6" cols="25" placeholder="" required></textarea>
                                    <span></span>
                                    <label for="comment">Comment</label>
                                </p>

                                <p class="commentform-submit">
                                    <button class="btn btn-default btn-outline waves waves-dark" id="submit" type="submit" name="submit" value="">Send
                                        comment <i class="decode-icon-cursor"></i></button>
                                </p>

                            </fieldset>
                        </form>

                    </div><!-- col -->
                    <div class="col-md-4 pl-xl-5">

                        <div class="widget widget-search">

                            <form name="search" novalidate method="get" action="#">
                                <fieldset>
                                    <input id="s" type="search" name="search" placeholder="" required>
                                    <label for="s">Search</label>
                                    <span></span>
                                    <input type="submit" name="submit" value="">
                                </fieldset>
                            </form>

                        </div><!-- widget-search -->
                        </div><!-- col -->
                        

                        
                 
                </div><!-- row -->
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

                                    <p><img src="assets/images/logo-white.png" alt=""></p>
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
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Contact</a></li>
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


<!-- Mirrored from www.smartpixel.tech/smartmed/news-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:39:08 GMT -->
</html>