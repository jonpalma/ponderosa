<?php $page = 'detalle-desayuno2'; ?>
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
                <h2>OMELETTE DE JAMÓN CON VERDURAS</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/desayuno-top2.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 1 pieza de chile serrano<br />
                                - 1 pieza de jitomate bola<br />
                                - sal al gusto<br />
                                - 3 rebanadas de jamón de pavo<br />
                                - queso chihuahua al gusto<br />
                                - 2 piezas de huevo<br />
                                - 1/4 pieza de cebolla blanca
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">25 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">media</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">1</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. En  un bold se baten los 2 huevos y se le añade el jamón picado y la verdura picada y la sal al gusto.<br />
                            2. En sartén con poco aceite bien caliente se echa la mezcla hasta que se haga una torta con el huevo.<br />
                            3. Ya a punto de terminar de cocer, se apaga el sartén y se le añade el queso rallado por todo el omelette, se deja derretir y se sirve.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-desayuno2') { echo 'detalle-desayuno1.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/desayuno-rel1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>SÁNDWICH DE JAMÓN</h3>
                                    <P>La manera mas fácil y practica para empezar el día.</P>
                                    <P class="time">15 min.</P>
                                </div>
                            </div>
                        </a>
                        <a href="<?php if($page == 'detalle-desayuno2') { echo 'detalle-comida2.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-desayuno2') { echo 'detalle-cena2.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/cena-rel2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>ROLLITOS DE JAMÒN</h3>
                                    <P>Unos rollitos de jamón una botana fácil para deleitar a la familia.</P>
                                    <P class="time">20 min.</P>
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