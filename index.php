<?php
include('lib/DB_Conectar.php');
include('classes/consultas.php');
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 27/05/17
 * Time: 10:20
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="author" content="EvenFly Team">

    <!-- DEVEOPER'S NOTE:
    This is a free Bootstrap powered HTML template from EvenFly. Feel free to download, modify and use it for yourself or your clients as long there is no money involved.

    Please don't try to sale it from anywhere; because I want it to be free, forever. If you sale it, That's me who deserves the money, not you :)
    -->

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>MISPLACES</title><!-- This is what you see on your browser tab-->

    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />

    <!-- ===========================
    STYLESHEETS
    =========================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- ===========================
    ICONS:
    =========================== -->
    <link rel="stylesheet" href="css/simple-line-icons.css">

    <!-- ===========================
    GOOGLE FONTS
    =========================== -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ===========================
     GOOGLE ANALYTICS (Optional)
     =========================== -->

    <!--Replace this line with your analytics code-->

    <!-- Analytics end-->

</head>
<body data-spy="scroll">
<!-- Preloader -->
<div id="preloader">
    <div id="status">
<!--        <div class="loadicon icon-moustache wow tada infinite" data-wow-duration="8s"></div>-->
        <div class="loadicon wow tada infinite" data-wow-duration="10s"><img src="img/eltipito.png"/></div>
    </div>
</div>
<?php include 'menu.php'?>
<!-- ===========================
FEATURED CLIENTS SECTION START
=========================== -->
<div id="clients" style="background: #EEEEEE;">
    <div class="container">
        <div class="col-md-3">
            <h4>Metodos de Pagos</h4>
        </div>
        <div class="col-md-9">
            <ul><!--CLIENTS LOGO-->
                <li><img src="img/rapipago.jpg" alt="Rapipago"></li>
                <li><img src="img/miscuentas.jpg" alt="PagoMisCuentas"></li>
                <li><img src="img/visa.jpg" alt="Visa"></li>
<!--                <li><img src="img/curb.png" alt="Curb Envy"></li>-->
            </ul><!--CLIENTS LOGO END-->
        </div>
    </div>
    <hr><!-- SECTION SEPARETOR LINE -->
</div><!--FEATURED CLIENTS SECTION END-->


<!-- ===========================
ABOUT SECTION START
=========================== -->
<div id="about" class="container">

    <!-- LEFT PART OF THE ABOUT SECTION -->
    <div class="col-md-6">
        <div class="row">
            <h2 class="wow fadeInDown" data-wow-duration="2s">Plataforma de encuentro entre la oferta y la demanda turística.
            </h2>

            <h4 class="wow fadeInUp" data-wow-duration="3s">La utilización de la aplicación generará datos de la oferta turística y su utilización por parte de los turistas</h4>

            <p class="wow fadeInDown" data-wow-duration="3s">Del lado de la demanda se busca que nuestros usuarios (turistas o visitantes) puedan encontrar en una sola plataforma toda la información para realizar su viaje.</p>
            <p class="wow fadeInDown" data-wow-duration="3s">Del lado de la oferta, se pretende dar una herramienta de administración para el comerciante, hotelero, punto de atracción turística, servicio de gastronomía u organizador de eventos, mediante la cual pueda dar a conocer sus productos y servicios.</p>

            <a class="dribbble-follow-button wow bounce" target="_blank" href="https://twitter.com/matudelatower">Seguinos</a>
        </div> <!-- ABOUT INFO END -->


        <div class="myapps row">
            <h5>Tecnologia utilizada </h5>

            <ul><!-- FAVORITE APP ICONS START -->
                <li><img class="wow animated bounceInUp" data-wow-duration="1s" src="img/laravel.svg" alt="Photoshop"></li>
                <li><img class="wow bounceInUp" data-wow-duration="2s" src="img/ionic.svg" alt="Illustrator"></li>
                <li><img class="wow bounceInUp" data-wow-duration="3s" src="img/symfony.png" alt="Adobe Flash"></li>
<!--                <li><img class="wow animated bounceInUp" data-wow-duration="4s" src="img/after_effects.svg" alt="After Effects"></li>-->
<!--                <li><img class="wow bounceInUp" data-wow-duration="5s" src="img/indesign.svg" alt="InDesign"></li>-->
            </ul><!-- FAVORITE APP ICONS END -->
        </div>
    </div><!-- LEFT PART OF THE ABOUT SECTION END -->
    <!--Left part end-->

    <!-- RIGHT PART OF THE ABOUT SECTION -->
    <div class="col-md-6 wow fadeInUp myphoto" data-wow-duration="4s">
        <img src="img/user.png" alt="Mamun Srizon">
    </div><!-- RIGHT PART OF THE ABOUT SECTION END -->
</div><!-- ABOUT SECTION END -->

<hr><!-- SECTION SEPARETOR LINE -->
<?php include 'download.php'; ?>
<!-- ===========================
PORTFOLIO SECTION START
=========================== -->
<div id="portfolio">
    <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
        <span class="bigicon icon-rocket"></span>
        <h3>A few recent works</h3>
        <hr class="separetor">
    </div><!-- PORTFOLIO SECTION HEAD END -->

    <!-- PORTFOLIO ITEMS START -->
    <div class="portfolioitems container">
        <ul><div id="shotsByPlayerId"> </div></ul><!--REFER TO THE js/drifolio.js-->
    </div><!-- PORTFOLIO ITEMS END -->

    <!--Replace the URL below with your dribbble profile URL-->
    <a class="btn btn-default wow fadeInUp" href="http://dribbble.com/srizon" role="button">
        <span class="btnicon icon-social-dribbble"></span>
        <span class="button_text">View all items</span>
    </a>
</div><!-- PORTFOLIO SECTION END -->

<!-- ===========================
TESTIMONIAL SECTION START
=========================== -->
<div id="testimonials" class="container">
    <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
        <span class="bigicon icon-bubbles"></span>
        <h3>Comentarios</h3>
        <h4>Nuestra gente, nuestra tierra, nuestras historias!</h4>
        <hr class="separetor">
    </div><!-- TESTIMONIAL SECTIONHEAD END -->

    <!-- TESTIMONIAL ITEMS START -->
    <div class="row">
        <!-- 1ST TESTIMONIAL ITEM -->

        <?php
        $comentarios = $consultas->getComentarios();
        foreach ($comentarios as $c){
            $img= rand (1,4);
            ?>
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <img src="img/persona_<?php echo $img; ?>.jpg" alt="Eric">
                </div>

                <div class="quote">
                    <blockquote>
                        <p><?php echo $c->comentario; ?></p>
                    </blockquote>
                    <h5><?php echo $c->nombre_categoria." - ".$c->nombre_lugar; ?></h5>
                    <p><?php echo $c->nombre_persona; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- 4TH TESTIMONIAL ITEM END -->
    </div>
</div><!-- TESTIMONIAL SECTION END -->
<?php include 'footer.php'; ?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!--Other necessary scripts-->
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
<script src="js/drifolio.js"></script>
<script src="js/wow.min.js"></script>
<script>new WOW().init();</script>
</body>
</html>
