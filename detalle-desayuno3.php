<?php $page = 'detalle-desayuno3'; ?>
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
                <h2>HUEVOS BENEDICTINOS</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/desayuno-top3.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 1 cucharada de vinagre blanco<br />
                                - 2 piezas de yema de huevo<br />
                                - 1 pieza de limón<br />
                                - 1/2 cucharita de salsa inglesa<br />
                                - 1 pizca de pimienta negra molida<br />
                                - 4 rebanadas de jamón de pavo<br />
                                - 2 piezas de muffin<br />
                                - 2 cucharadas de mantequilla<br />
                                - 4 piezas de huevo<br />
                                - 1 manojo de cebollita de cambray<br />
                                - 1 cucharada de agua
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">15 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Media</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">2</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. Partir los muffins por la mitad y tostar en el tostador. Colocar una rebanada de jamón sobre cada mitad de muffin y guardar.<br />
                            2. Para preparar la salsa holandesa, colocar suficiente agua en una cacerola grande y colocar dentro de ella una olla más pequeña, de manera que la olla pequeña flote sobre la grande para crear un baño María con agua. Agregar en la olla pequeña 4 yemas de huevo, el jugo de limón, la pimienta, la salsa inglesa y una cucharada de agua.<br /> 
                            3. Agregar la mantequilla derretida sin dejar de batir hasta obtener una salsa espesa. Si la salsa quedara demasiado espesa, se puede agregar un par de cucharadas de agua. Sazonar con sal, apagar el fuego y guardar.<br />
                            4. Poner a hervir agua en una olla honda con el vinagre. Con cuidado, romper cada huevo dentro del agua hirviendo y dejar cocer de 2  a 3 minutos. El centro de las yemas debe estar suave. Sacar los huevos del agua con una espumadera y colocarlos sobre cada mitad de muffin con jamón.<br />
                            5. Agregar una cucharada de salsa holandesa sobre cada huevo y servir decorado con cebollín picado.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-desayuno3') { echo 'detalle-desayuno1.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-desayuno3') { echo 'detalle-comida3.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-desayuno3') { echo 'detalle-cena3.php'; }?>#">
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