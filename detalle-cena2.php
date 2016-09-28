<?php $page = 'detalle-cena2'; ?>
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
                <h2>ROLLITOS DE JAMÓN</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/cena-top2.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 190 gramos de queso crema<br />
                                - 10 rebanadas de jamón de pavo<br />
                                - 2 cucharadas de crema de leche de vaca<br />
                                - 6 ramas de perejil fresco<br />
                                - palillos al gusto<br />
                                - 1/2 taza de nuez
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">20 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Baja</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">5</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. Picar la nuez, perejil finamente y guardar.<br />
                            2. Colocar el queso crema en un tazón, las dos cucharadas de crema y revolver muy bien hasta integrar todo. Añadir el perejil picado y la nuez, mezclar bien.<br />
                            3. Colocar una rebanada de jamón sobre un plato o tabla para picar, rellenar con la mezcla de queso, enrollar para formar el rollito y colocar un palillo para asegurar.<br />
                            4. Colocar en una charola y refrigerar hasta la hora de servir.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-cena2') { echo 'detalle-desayuno2.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-cena2') { echo 'detalle-comida2.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/comida-rel2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>SALCHICHAS CON NOPALES</h3>
                                    <P>Una rica receta muy sencilla, para la hora de la comida.</P>
                                    <P class="time">45 min.</P>
                                </div>
                            </div>
                        </a>
                        <a href="<?php if($page == 'detalle-cena2') { echo 'detalle-cena3.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/cena-rel3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>BANDERILLAS HORNEADAS</h3>
                                    <P>Estas banderillas se pueden freír, en esta versión se preparan al horno para evitar la grasa.</P>
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