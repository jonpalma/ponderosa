<?php $page = 'detalle-comida1'; ?>
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
                <h2>CALABACITAS RELLENAS DE SALCHICHA</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/comida-top1.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 4 piezas de calabacita redonda<br />
                                - 4 piezas de salchicha viena<br />
                                - 3 piezas de jitomate guaje<br />
                                - 1 pieza de chile serrano<br />
                                - sal al gusto<br />
                                - pimienta negra molida al gusto<br />
                                - 1/2 pieza de cebolla blanca
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">35 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Media</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">4</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. Cortar las calabacitas por la parte superior para formar una tapa, retirar la pulpa con la ayuda de una cuchara.<br />
                            2. Picar el jitomate y las salchichas en cubos pequeños, cebolla, chile finamente y guardar.<br />
                            3. Hervir agua en una olla y sumergir las calabacitas por unos minutos y retirar, dejar enfriar.<br />
                            4. Calentar en el sartén el aceite y sofreír la cebolla por unos minutos, agregar el jitomate picado y chile picado, continuar cociendo unos minutos más hasta que el jitomate haya cambiado de color.<br />
                            5. Agregar la salchicha picada, sazonar con sal y pimienta y continuar cociendo hasta que se integren bien los ingredientes.<br />
                            6. Para servir rellenar cada calabacita con la mezcla de salchicha.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-comida1') { echo 'detalle-desayuno1.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-comida1') { echo 'detalle-comida2.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-comida1') { echo 'detalle-cena1.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/cena-rel1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>TORTILLA DE BERENJENA Y JAMÓN</h3>
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