<?php $page = 'detalle-cena3'; ?>
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
                <h2>BANDERILLAS HORNEADAS</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/cena-top3.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 2 piezas de huevo<br />
                                - 2 cucharadas de aceite vegetal comestible<br />
                                - 1 1/2 tazas de harina de trigo<br />
                                - papel aluminio<br />
                                - palitos de madera<br />
                                - 2 cucharitas de azúcar blanca<br />
                                - mantequilla<br />
                                - 2 cucharitas de polvo para hornear<br />
                                - 2/3 taza de harina de maíz amarillo<br />
                                - 6 piezas de salchicha de pavo<br />
                                - 1/4 cucharita de pimienta negra molida<br />
                                - 1/2 cucharita de sal<br />
                                - 2/3 taza de leche de vaca
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">30 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Media</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">6</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. Precalentar el horno a 375°F (180°C). Hacer “barquitos” de papel aluminio de manera que quepan las salchichas ensartadas en un palito y quede un poco de espacio.<br />
                            2. Mezclar en un tazón la harina de trigo y de maíz, el azúcar, la sal, el polvo para hornear y la pimienta. Revolver bien con el batidor.<br />
                            3. Agregar la leche, huevos y aceite; mezclar todo hasta integrar.<br />
                            4. Ensartar cada salchicha en un palito de madera. Espolvorear con harina de trigo y escurrir el exceso.<br />
                            5. Sumergir cada salchicha en la masa, ayudarse con una cuchara si es necesario. Colocar cada una en un barquito de papel aluminio untado con mantequilla para que no se peguen y poner los barquitos sobre una charola para horno.<br />
                            6. Hornear durante 20 a 25 minutos hasta que estén dorados.<br />
                            7. Servir acompañados de mayonesa, ketchup y mostaza.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-cena3') { echo 'detalle-desayuno3.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/desayuno-rel3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>HUEVOS BENEDICTINOS</h3>
                                    <P>Delicioso desayuno para cualquier día de la semana.</P>
                                    <P class="time">15 min.</P>
                                </div>
                            </div>
                        </a>
                        <a href="<?php if($page == 'detalle-cena3') { echo 'detalle-comida3.php'; }?>#">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="img/recetas-page/receta/comida-rel3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>TORNILLOS CON SALCHICHA</h3>
                                    <P>Una pasta deliciosa y sencilla de preparar.</P>
                                    <P class="time">35 min.</P>
                                </div>
                            </div>
                        </a>
                        <a href="<?php if($page == 'detalle-cena3') { echo 'detalle-cena1.php'; }?>#">
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