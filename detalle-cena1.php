<?php $page = 'detalle-cena1'; ?>
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
                <h2>TORTILLA DE BERENJENA Y JAMÒN</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/cena-top1.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 4 piezas de huevo<br />
                                - 1/2 pieza de berenjena<br />
                                - 4 rebanadas de jamón de pavo<br />
                                - 2 rebanadas de queso manchego<br />
                                - harina de trigo al gusto<br />
                                - pimienta negra molida al gusto<br />
                                - sal al gusto
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">30 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Media</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">4</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. Cortar la berenjena en rodajas y espolvorear un poco de sal. Colocar en una bolsa y dejar reposar durante 10 minutos. Enjuagar y secar con un paño limpio.<br />
                            2. Pasar por un poco de harina y sofreír en un sartén con un poco de aceite un par de minutos por ambos lados.<br />
                            3. Colocar dos huevos en un tazón con un poquito de sal y revolver bien hasta integrar completamente.<br />
                            4. Calentar el sartén abierto y agregar la mezcla de huevo, dejar cocer unos minutos. Cuando haya cocido, agregar las rodajas de berenjena, las rebanadas de jamón de pavo y las rebanadas queso. Dejar cocer.<br />
                            5. Calentar un poco más de aceite y agregar los otros dos huevos batidos, cuando este a medio cocimiento colocar encima la otra tortilla y unirlas con la pala. Retirar y servir en rebanadas.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-cena1') { echo 'detalle-desayuno1.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-cena1') { echo 'detalle-comida1.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-cena1') { echo 'detalle-cena2.php'; }?>#">
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