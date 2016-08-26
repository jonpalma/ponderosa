<?php $page = 'recetas'; ?>
<?php include('header.php'); ?>
<div class="wrapper recetas" id="recetas">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
        <div class="container">
            <div class="title">
                <p>RECETAS PONDEROSA</p>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DESAYUNO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="desayuno" id="desayuno">
        <div class="container text-center light-spacing">
            <div class="top-title">
                <div class="linea"></div>
                <h2>DESAYUNO</h2>
            </div>
            <div class="carousel slide" id="carousel-desayuno" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno1.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SÁNDWICH DE JAMÓN
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno2.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        PAPAS EN GAJOS Y SALCHICHA
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno3.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHA CON HUEVO
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno1.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SÁNDWICH DE JAMÓN
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno2.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        PAPAS EN GAJOS Y SALCHICHA
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno3.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHA CON HUEVO
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer align-center">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-desayuno" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-desayuno" data-slide-to="1"></li>
                    <li data-target="#carousel-desayuno" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* COMIDA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="comida" id="comida">
        <div class="container text-center light-spacing">
            <div class="top-title">
                <div class="linea"></div>
                <h2>COMIDA</h2>
            </div>
            <div class="carousel slide" id="carousel-comida" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida1.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        CARNE ASADA CON PONDEROSA
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">15 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida2.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHA AZA RELLENA
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida3.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHA CON TOCINO
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida1.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        CARNE ASADA CON PONDEROSA
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">15 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida2.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHA AZA RELLENA
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida3.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHA CON TOCINO
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-comida" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-comida" data-slide-to="1"></li>
                    <li data-target="#carousel-comida" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CENA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="cena" id="cena">
        <div class="container text-center light-spacing">
            <div class="top-title">
                <div class="linea"></div>
                <h2>CENA</h2>
            </div>
            <div class="carousel slide" id="carousel-cena" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena1.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHAS AL PASTOR
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">15 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena2.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SPAGUETTI CON SALCHICHAS
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena3.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        ARROZ CON SALCHICHAS
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena1.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHAS AL PASTOR
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">15 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena2.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SPAGUETTI CON SALCHICHAS
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena3.png" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        ARROZ CON SALCHICHAS
                                    </p>
                                    <p class="desc">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-receta.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-cena" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-cena" data-slide-to="1"></li>
                    <li data-target="#carousel-cena" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* TOP-FOOTER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="top-footer" id="top-footer">
        <div class="container vertical-align">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 text-center left-side">
                <img class="logo" src="img/recetas-page/top-footer/footer-logo.png" alt="">
                <div class="social">
                    <a href="https://www.facebook.com/pondeponderosa" target="_blank"><img src="img/recetas-page/icons/fb.png" alt=""></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="img/recetas-page/icons/instagram.png" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </section>
</div>
<?php include('footer.php'); ?>