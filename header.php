<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Ponderosa</title>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll"><img class="top-logo" src="img/header/logoNavbar.png" alt=""></a>
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
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll vertical-align nav-padd">INICIO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#nosotros" class="smoothScroll vertical-align nav-padd">NOSOTROS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#productos" class="smoothScroll vertical-align nav-padd">PRODUCTOS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#index" class="smoothScroll vertical-align nav-logo"><img src="img/header/logoNavbar.png" alt="logo"></a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#recetas" class="smoothScroll vertical-align nav-padd">RECETAS</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index.php'; }?>#contactanos" class="smoothScroll vertical-align nav-padd">CONTACTOS</a></li>
                        <li><a href="https://www.facebook.com/pondeponderosa" target="_blank" class="vertical-align nav-social"><img src="img/header/fb.png" alt="facebook"></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="vertical-align nav-social"><img src="img/header/instagram.png" alt="instagram"></a></li>
                    </ul>
                </div>
            </div>
        </nav>