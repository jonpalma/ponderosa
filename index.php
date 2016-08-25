<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="img-container">
                        <img src="img/banner/1.jpg" alt="Banner">
                    </div>
                </div>
                <div class="item">
                    <div class="img-container">
                        <img src="img/banner/1.jpg" alt="Banner">
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* Nosotros  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="nosotros" id="nosotros">
        <div class="container spacing">
            <div class="text-center">
                <img src="img/nosotros/logo.png" alt="">
            </div>               
            <div class="text-center">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            </div>        
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRE-PRODUCTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="preproductos" id="preproductos">
        <div class="container preproducto-img">
            <img class="fadein" src="img/preproductos/bodegon.png" alt="">
        </div>
        <div class="bottom-background">
            <img src="img/preproductos/madera.jpg" alt="">
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRODUCTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="productos" id="productos">
        <div class="container spacing">
            <div class="encabezado text-center">
                <a><img src="img/productos/logo10.png" alt=""></a>
                <p>NUESTRA LINEA DE PRODUCTOS</p>
            </div>
            <div class="row no-margin text-center">
                <div class="col-sm-2">
                    <div class="img-container active">
                        <img src="img/productos/producto1.png" alt="Productos" class="img-responsive center-block">
                        <p class="responsive">SALCHICHA PARA ASAR</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="img-container">
                        <img src="img/productos/producto2.png" alt="Productos" class="img-responsive center-block">
                        <p class="responsive">PRODUCTO 1</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="img-container">
                        <img src="img/productos/producto3.png" alt="Productos" class="img-responsive center-block">
                        <p class="responsive">PRODUCTO 2</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="img-container">
                        <img src="img/productos/producto4.png" alt="Productos" class="img-responsive center-block">
                        <p class="responsive">PRODUCTO 3</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="img-container">
                        <img src="img/productos/producto5.png" alt="Productos" class="img-responsive center-block">
                        <p class="responsive">PRODUCTO 4</p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="img-container">
                        <img src="img/productos/producto6.png" alt="Productos" class="img-responsive center-block">
                        <p class="responsive">PRODUCTO 5</p>
                    </div>
                </div>
            </div>
            <div class="lbproductos text-center">
                <p id="label-0" class="">SALCHICHA PARA ASAR</p>
                <p id="label-1" class="hidden">PRODUCTO 1</p>
                <p id="label-2" class="hidden">PRODUCTO 2</p>
                <p id="label-3" class="hidden">PRODUCTO 3</p>
                <p id="label-4" class="hidden">PRODUCTO 4</p>
                <p id="label-5" class="hidden">PRODUCTO 5</p>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RECETAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="recetas parallax-container" id="recetas">
        <div class="parallax">
            <img src="img/recetas/bg.jpg" alt="Parallax">
        </div>
        <div class="container text-center spacing">
            <img class="icono" src="img/recetas/logo.png" alt="">
            <h3>RECETAS PONDEROSA</h3>
            <div id="carousel-recetas" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-recetas" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-recetas" data-slide-to="1"></li>
                    <li data-target="#carousel-recetas" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="bckgnd">
                                    <img src="img/recetas/receta1.png" alt="Receta" class="img-responsive center-block">
                                    <h5 class="white">CARNE ASADA CON PONDEROSA</h5>
                                    <p class="white">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                    <a href="#">LEER MÁS</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bckgnd">
                                    <img src="img/recetas/receta2.png" alt="Receta" class="img-responsive center-block">
                                    <h5 class="white">SALCHICHA AZA RELLENA</h5>
                                    <p class="white">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                    <a href="#">LEER MÁS</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bckgnd">
                                    <img src="img/recetas/receta3.png" alt="Receta" class="img-responsive center-block">
                                    <h5 class="white">SALCHICHA CON TOCINO</h5>
                                    <p class="white">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                    <a href="#">LEER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row no-margin text-center">
                            <div class="col-sm-4">
                                <div class="bckgnd" id="test">
                                    <img src="img/recetas/receta1.png" alt="Receta" class="img-responsive center-block">
                                    <h5 class="white">CARNE ASADA CON PONDEROSA</h5>
                                    <p class="white">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                    <a href="#">LEER MÁS</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bckgnd">
                                    <img src="img/recetas/receta2.png" alt="Receta" class="img-responsive center-block">
                                    <h5 class="white">SALCHICHA AZA RELLENA</h5>
                                    <p class="white">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                    <a href="#">LEER MÁS</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="bckgnd">
                                    <img src="img/recetas/receta3.png" alt="Receta" class="img-responsive center-block">
                                    <h5 class="white">SALCHICHA CON TOCINO</h5>
                                    <p class="white">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                    </p>
                                    <a href="#">LEER MÁS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTANOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="contactanos" id="contactanos">
        <div>
            <div class="googleMap" id="googleMap" position="contactanos"></div>
        </div>

        <div class="container form vertical-align">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="container-size text-center">
                    <h2>CONTÁCTANOS</h2>
                    <label>Nombre</label>
                    <input type="text" placeholder="">
                    <label>Correo</label>
                    <input type="email" placeholder="">
                    <label>Mensaje</label>
                    <textarea name="mssg" id="mssg" cols="30" rows="3" placeholder=""></textarea>
                    <div class="text-center">
                        <input type="submit" value="Enviar">
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="contactanos-bottom">
            <div class="container form-container">
                <div class="col-sm-3 text-center left-side">
                    <img src="img/contactanos/logo.png" alt="">
                    <div class="social">
                        <a href="https://www.facebook.com/pondeponderosa" target="_blank"><img src="img/contactanos/fb.png" alt=""></a>
                        <a href="https://www.instagram.com/" target="_blank"><img src="img/contactanos/instagram.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 middle"></div>
                <div class="col-sm-3 right-side">
                    <p class="address">
                        Dirección:<br />
                        Jose Santos Chocano 970<br />
                        66450<br />
                        San Nicolás de los Garza
                    </p>
                    <p class="phone">
                        Teléfono:<br />
                        01 614 439 0100 Ext 7530
                    </p>
                    <a href="mailto:contacto@ponderosa.com.mx"><p class="web">
                        contacto@ponderosa.com.mx
                        </p></a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('footer.php'); ?>