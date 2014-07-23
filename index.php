<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta property="og:title" content="Nicolas Gillium - Création de site internet à Nancy - Développement de site web à Nancy" />
    <meta property="og:site_name" content="Nicolas Gillium - Création de site internet à Nancy" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://nicolas-gillium.fr/" />
    <meta property="og:image" content="http://nicolas-gillium.fr/images/nicolas-gillium-og-image.jpg">
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:description" content="Nicolas Gillium développeur web indépendant à Nancy. Conception, réalisation et développement de site internet et d'application web."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicolas Gillium">
    <meta name="description" content="Nicolas Gillium développeur web indépendant à Nancy. Conception, réalisation et développement de site internet et d'application web." />

    <title>Nicolas Gillium - Développeur web freelance à Nancy</title>

    <!-- Reset CSS -->
    <link href="css/normalize.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Loading Flat UI -->
    <link href="css/flaty.min.css" type="text/css" rel="stylesheet">

    <!-- CSS Nicolas Gillium -->
    <link rel="stylesheet" type="text/css" href="css/main.min.css">

    <link rel="icon" type="image/png" href="/images/favicon.png" />

    <!-- Icomoon custom icon font -->
    <link rel="stylesheet" type="text/css" href="css/style-icomoon.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="row navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div id="nav-cont" class="container">
            <div class="col-lg-3">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top" title="Nicolas Gillium développeur web freelance à Nancy">Nicolas Gillium</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div id="main-navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="hidden">
                            <a href="#page-top">Accueil</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#presentation">Présentation</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#services">Services</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Réalisations</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="intro" class="intro-section">
        <div class="banner">
            <div id="h-banner">
                <h1>Nicolas Gillium</h1>
                <h2>Développeur web indépendant à Nancy</h2>
            </div>
            <div id="arrow_more" class="page-scroll">
                <a href="#presentation" class="hidden-xs"><span class="arrow-down-header icon-angle-down-circle"></span></a>
            </div>
        </div>
    </div>

    <div id="presentation" class="presentation-section">
        <?php include_once('presentation.php'); ?>
    </div>

    <div id="services" class="services-section">
        <?php include_once('services.php'); ?>
    </div>

    <div id="portfolio" class="portfolio-section">
        <?php include_once('portfolio.php'); ?>
    </div>

    <div id="contact" class="contact-section">
        <?php include_once('contact.php'); ?>
    </div>

    <a id="back-to-top" href="#" class="btn btn-info btn-lg back-to-top">
        <span class="icon-back-to-top icon-arrow-up"></span>
    </a>

    <div class="footer">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                <a class="foot-a" data-toggle="modal" data-target="#mentions-legales-modal">Mentions légales</a> 
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-center blanc">
                <span>Nicolas Gillium © 2014 - SIRET: 79951139900013</span>
            </div>
        </div>
    </div>

    <?php include_once('about.php'); ?>
    <?php include_once('mentions-legales.php'); ?>

    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/cbpGridGallery.js"></script>
    <script type="text/javascript">

    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 340) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });
    $(document).ready(function(){

        var my_posts = $("[rel=tooltip]");

        var size = $(window).width();
        for(i=0;i<my_posts.length;i++){
            the_post = $(my_posts[i]);

            if(the_post.hasClass('invert') && size >=767 ){
                the_post.tooltip({ placement: 'left'});
                the_post.css("cursor","pointer");
            }else{
                the_post.tooltip({ placement: 'rigth'});
                the_post.css("cursor","pointer");
            }
        } 
        $('.page-scroll a').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
        });
        $('#terrea-tool').tooltip('show')

        $("#contactform").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
              type: $(this).attr("method"), 
              data: $(this).serialize(), 
              url: $(this).attr('action'),
              success: function(data){
                    $(".reponse-contact").html(data).delay(2000).fadeOut(500);
                    $("#contactform :input").each(function(){
                        $(this).val('');
                    });
              },
              error: function(data){
                    var error_form = 'Une erreur est survenue lors de l\'envoi du formulaire, vous pouvez m\'envoyer le mail sur mon adresse : contact@nicolas-gillium.fr';
                    $(".reponse-contact").html(error_form).delay(2000).fadeOut(500);
              }
          });
        });  
        $(".banner").height(jQuery(window).height());

        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');
    });
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50940996-1', 'nicolas-gillium.fr');
  ga('send', 'pageview');
    </script>
</body>

</html>
