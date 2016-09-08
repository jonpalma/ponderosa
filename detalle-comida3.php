<?php $page = 'detalle-comida3'; ?>
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
                <h2>TORNILLOS CON SALCHICHA</h2>
            </div>
            <div class="image-container top-image">
                <img src="img/recetas-page/receta/comida-top3.jpg" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                - 500 gramos de pasta de tornillo la moderna<br />
                                - 8 piezas de salchicha de pavo<br />
                                - 5 piezas de jitomate guaje<br />
                                - 1 diente de ajo<br />
                                - 200 gramos de queso panela<br />
                                - 1/4 cucharita de pimienta negra molida<br />
                                - 1 cucharita de sal<br />
                                - 1 taza de crema de leche de vaca<br />
                                - 1 cucharada de aceite de oliva<br />
                                - 1/4 pieza de cebolla blanca
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">35 min</span></p>
                            <p class="icon2">Dificultad: <span class="bold-text">Media</span></p>
                            <p class="icon3">Porciones: <span class="bold-text">8</span></p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            1. Hervir agua en una olla, cuando suelte el hervor, agregar sal. Añadir la pasta y dejar cocer de 9 a 11 minutos hasta que esté suave por fuera y firme por dentro, escurrir.<br />
                            2. Cortar las salchichas en rodajas. Picar la cebolla, jitomate, ajo  y queso en cuadros pequeños y guardar. Sofreír la cebolla y ajo con una cucharada de aceite un par de minutos y agregar el jitomate picado, continuar cociendo cinco minutos más y sazonar con pimienta y sal. Retirar del fuego y añadir la crema, revolver bien.<br />
                            3. Sofreír las salchichas en un sartén durante unos minutos, moviéndolas constantemente, cuidando que no se quemen.<br />
                            4. Agregar la pasta en un tazón. Añadir la mezcla de crema, las salchichas y el queso picado y revolver muy bien. Servir inmediatamente.
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <a href="<?php if($page == 'detalle-comida3') { echo 'detalle-desayuno3.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-comida3') { echo 'detalle-comida2.php'; }?>#">
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
                        <a href="<?php if($page == 'detalle-comida3') { echo 'detalle-cena3.php'; }?>#">
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