<?php $page = 'detalle-comida2'; ?>
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
                <h2>SALCHICHAS CON NOPALES</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/comida-top2.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 1 cucharada de sal<br />
                                - 1 cucharita de bicarbonato de sodio<br />
                                - 2 cucharadas de aceite de canola<br />
                                - 8 piezas de salchicha de pavo<br />
                                - 2 piezas de chile poblano asado limpio y en rajas<br />
                                - 2 cucharadas de cilantro desinfectado picado(sólo las hojas)<br />
                                - 1 taza de queso oaxaca<br />
                                - 1 cucharita de orégano<br />
                                - 4 piezas de nopal<br />
                                - 1 litro de agua<br />
                                - 1/2 pieza de cebolla blanca
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">45 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Media</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">4</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. En una olla hierve agua con una cucharada de sal, al hervir agrega el bicarbonato de sodio con los nopales cortados en juliana y deja cocer hasta que estos tengan un color verde brillante.<br />
                            2. Escurrir los nopales y pasarlos por el chorro de agua fría para quitar el exceso de baba.<br />
                            3. Freir la cebolla  cortada en juliana (lo mas delgado posible), hasta que este transparente, agrega la salchicha cortada en rodajas y dóralas, añadir el chile poblano y cuece durante 2 minutos.<br />
                            4. Integra los nopales, sazona con orégano, cilantro, mezclar bien, poner queso rallado y dejar que se gratine, retirar del fuego y servir.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-comida2') { echo 'detalle-desayuno2.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-comida2') { echo 'detalle-comida1.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-comida2') { echo 'detalle-cena2.php'; }?>#">
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