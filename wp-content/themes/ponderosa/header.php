<!DOCTYPE html>
<html lang="es">
    <head>
        <?php wp_head(); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Desde hace 40 años Empacadora Ponderosa es una empresa de alimentos comprometida con la calidad y servicio para satisfacer los gustos y necesidades de nuestros consumidores.">
        <meta name="keywords" content="ponderosa,ponde,alimentos,embutidos,salchicha,empacadora,jamón,queso,polaka,pastel,pimiento,arrachera,carne,asada,asar,parrilla">
        <meta name="author" content="Mixen">
        <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/'; ?>img/favicon.ico"/>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <title>Ponderosa</title>
        <script type="text/javascript">
            setTimeout(function(){var a=document.createElement("script");
                                  var b=document.getElementsByTagName("script")[0];
                                  a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0020/7404.js?"+Math.floor(new Date().getTime()/3600000);
                                  a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
        </script>
    </head>
    <body>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-88365514-1', 'auto');
            ga('send', 'pageview');
        </script>
        <nav class="navbar navbar-default navbar-fixed-top">
            <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll"><img class="top-logo" src="<?php echo bloginfo('template_url').'/'; ?>img/header/logoNavbar.png" alt=""></a>
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll vertical-align nav-padd">INICIO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#productos" class="smoothScroll vertical-align nav-padd">PRODUCTOS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#linea" class="smoothScroll vertical-align nav-padd">NOSOTROS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll vertical-align nav-logo"><img src="<?php echo bloginfo('template_url').'/'; ?>img/header/logoNavbar.png" alt="logo"></a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#receta" class="smoothScroll vertical-align nav-padd">RECETAS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#contactanos" class="smoothScroll vertical-align nav-padd">CONTÁCTANOS</a></li>
                        <li><a href="https://www.facebook.com/pondeponderosa" target="_blank" class="vertical-align nav-social"><img src="<?php echo bloginfo('template_url').'/'; ?>img/header/fb.png" alt="facebook"></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="vertical-align nav-social"><img src="<?php echo bloginfo('template_url').'/'; ?>img/header/instagram.png" alt="instagram"></a></li>
                    </ul>
                </div>
            </div>
        </nav>