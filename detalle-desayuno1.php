<?php $page = 'detalle-desayuno1'; ?>
<?php include('header.php'); ?>
<div class="wrapper detalle-receta" id="detalle-receta">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
        <div class="toptop">
            <div class="container">
                <div class="title">
                    <p>RECETAS PONDEROSA</p>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DETALLE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="detalle" id="detalle">
        <div class="container text-center light-spacing">
            <div class="top-title">
                <div class="linea"></div>
                <h2>SÁNDWICH DE JAMÓN</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/desayuno-top1.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 8 rebanadas de pan integral<br />
                                - 4 cucharaditas de mayonesa Light<br />
                                - 4 cucharadas de mostaza<br />
                                - 4 hoja de lechugas<br />
                                - 160g queso Chihuahua<br />
                                - 12 rebanadas delgadas de jamón de pechuga de pavo<br />
                                - 16 rebanadas de tomate<br />
                                - Rajas de jalapeño en vinagre, al gusto
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">15 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Baja</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">4</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. Untar en 4 tapas de pan integral la mayonesa y en el resto untar la mostaza.<br />
                            2. Colocar sobre las tapas de pan integral las hojas de lechuga, el queso, las rebanadas de jamón, el tomate  y las rajas de jalapeños en vinagre al gusto.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-desayuno1') { echo 'detalle-desayuno2.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/desayuno-rel2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>OMELETTE DE JAMÓN CON VERDURAS</h3>
                                    <P>Una deliciosa forma de preparar huevos para el desayuno.</P>
                                    <P class="time">25 min.</P>
                                </div>
                            </div>
                        </a>
                        <a href="<?php if($page == 'detalle-desayuno1') { echo 'detalle-comida1.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/comida-rel1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>CALABACITAS RELLENAS DE SALCHICHA</h3>
                                    <P>Una receta sencilla y fácil de preparar ideal como plato fuerte.</P>
                                    <P class="time">35 min.</P>
                                </div>
                            </div>
                        </a>
                        <a href="<?php if($page == 'detalle-desayuno1') { echo 'detalle-cena1.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/cena-rel1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>TORTILLA DE BERENJENA Y JAMÒN</h3>
                                    <P>Una tortilla sencilla de preparar para una cena ligera.</P>
                                    <P class="time">30 min.</P>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
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