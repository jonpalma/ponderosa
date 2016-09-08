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
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno1.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SÁNDWICH DE JAMÓN
                                    </p>
                                    <p class="desc">
                                        La manera mas fácil y practica para empezar el día.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">15 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-desayuno1.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno2.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        OMELETTE DE JAMÓN CON VERDURAS
                                    </p>
                                    <p class="desc">
                                        Una deliciosa forma de preparar huevos para el desayuno.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">25 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-desayuno2.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/desayuno3.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        HUEVOS BENEDICTINOS
                                    </p>
                                    <p class="desc">
                                        Delicioso desayuno para cualquier día de la semana.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">15 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-desayuno3.php'; }?>#">LEER MÁS</a>
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
                                    <img class="vertical-align" src="img/recetas-page/receta/comida1.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        CALABACITAS RELLENAS DE SALCHICHA
                                    </p>
                                    <p class="desc">
                                        Una receta sencilla y fácil de preparar ideal como plato fuerte.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">35 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-comida1.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida2.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        SALCHICHAS CON NOPALES
                                    </p>
                                    <p class="desc">
                                        Una rica receta muy sencilla, para la hora de la comida.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">45 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-comida2.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/comida3.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        TORNILLOS CON SALCHICHA
                                    </p>
                                    <p class="desc">
                                        Una pasta deliciosa y sencilla de preparar.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">35 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-comida3.php'; }?>#">LEER MÁS</a>
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
                                    <img class="vertical-align" src="img/recetas-page/receta/cena1.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        TORTILLA DE BERENJENA Y JAMÒN
                                    </p>
                                    <p class="desc">
                                        Una tortilla sencilla de preparar para una cena ligera.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">30 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-cena1.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena2.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        ROLLITOS DE JAMÒN
                                    </p>
                                    <p class="desc">
                                        Unos rollitos de jamón una botana fácil para deleitar a la familia.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">20 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-cena2.php'; }?>#">LEER MÁS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="image-container">
                                    <img class="vertical-align" src="img/recetas-page/receta/cena3.jpg" alt="">
                                </div>
                                <div class="descripcion">
                                    <p class="title">
                                        BANDERILLAS HORNEADAS
                                    </p>
                                    <p class="desc">
                                        Estas banderillas se pueden freír, en esta versión se preparan al horno para evitar la grasa.
                                    </p>
                                </div>
                                <div class="footer">
                                    <div class="col-sm-6 time">
                                        <p class="">30 min.</p>
                                    </div>
                                    <div class="col-sm-6 link">
                                        <a href="<?php if($page == 'recetas') { echo 'detalle-cena3.php'; }?>#">LEER MÁS</a>
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