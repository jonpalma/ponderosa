<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $arrayBanner = CFS()->get('banner');
                $arrayEnd = end($arrayBanner);
                $counter = 0;
                foreach( $arrayBanner as $banner )
                {
                    if( $counter == 0 )
                    {
                        echo '<div class="item active">';
                    }
                    else
                    {
                        echo '<div class="item">';
                    }
                ?>
                <div class="img-container">
                    <img src="<?php echo $banner['banner_img']; ?>" alt="Banner">
                </div>
                <?php
                    $counter++;
                    echo '</div>';
                }
                ?>
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
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRODUCTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="productos" id="productos">
        <div class="container">
            <div class="encabezado text-center">
                <a><img src="<?php echo bloginfo('template_url').'/'; ?>img/productos/logo10.png" alt=""></a>
                <p><?php echo CFS()->get('productos_title');?></p>
            </div>
            <div id="carousel-productos" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayProductos = CFS()->get('producto_array');
                    $arrayEnd = end($arrayProductos);
                    $counter = 0;
                    foreach($arrayProductos as $producto)
                    {
                        if( $counter == 0 )
                        {
                            echo '<div class="item active">';
                        }
                        else
                        {
                            echo '<div class="item">';
                        }
                    ?>
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="img-container img-logo">
                            <img src="<?php echo $producto['producto_logo']; ?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="img-container img-producto">
                            <img src="<?php echo $producto['producto_img']; ?>" alt="">
                        </div>
                    </div>
                    <?php
                        $counter++;
                        echo '</div>';
                    }
                    ?>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-productos" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-productos" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="bottom-background">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/productos/bg.jpg" alt="">
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* LINEA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="linea" id="linea">
        <div class="container spacing">
            <div class="top">
                <?php
                $arrayLinea = CFS()->get('linea_tiempo_array');
                $arrayEnd = end($arrayLinea);
                $counter = 0;
                foreach($arrayLinea as $dato)
                {
                    if($counter < 8)
                    {
                ?>
                <?php
                        if($counter == 0)
                        {
                            echo '<div role="tabpanel" class="tab-panel fade in active" id="year'.$counter.'">';
                            echo '<div class="tab-content">';
                        }
                        else
                        {
                            echo '<div role="tabpanel" class="tab-panel fade" id="year'.$counter.'">';
                            echo '<div class="tab-content">';
                        }
                ?>
                <div class="col-sm-5 hidden-xs">
                    <img class="vertical-align" src="<?php echo $dato['year_img']; ?>" alt="">
                </div>
                <a class="div-img"></a>
                <div class="col-sm-7 vertical-align">
                    <h3>
                        Año <?php echo $dato['year']; ?>
                    </h3>
                    <p>
                        <?php echo $dato['year_text']; ?>
                    </p>
                </div>
                <?php
                        echo '</div>';
                        echo '</div>';
                    }
                    $counter++;
                }
                ?>
            </div>
            <div class="bottom">
                <?php
                $arrayLinea = CFS()->get('linea_tiempo_array');
                $arrayEnd = end($arrayLinea);
                $counter = 0;
                foreach($arrayLinea as $dato)
                {
                    if($counter < 8)
                    {
                ?>
                <div class="col-xs-1 punto">
                    <h3>
                        <?php echo $dato['year']; ?>
                    </h3>
                    <div class="line"></div>
                    <?php
                        if($counter == 0)
                        {
                            echo '<a class="linea-click active" href="#year'.$counter.'" aria-controls="year'.$counter.'" role="tab" data-toggle="tab"></a>';
                        }
                        else
                        {
                            echo '<a class="linea-click" href="#year'.$counter.'" aria-controls="year'.$counter.'" role="tab" data-toggle="tab"></a>';
                        }
                    ?>
                </div>
                <?php
                    }
                    $counter++;
                }
                ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RECETAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="receta parallax-container" id="receta">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/recetas/bg2.jpg" alt="Parallax">
        </div>
        <div class="container text-center spacing">
            <img class="icono" src="<?php echo bloginfo('template_url').'/'; ?>img/recetas/logo.png" alt="">
            <h3><?php echo CFS()->get('recetas_title');?></h3>
            <div id="carousel-receta" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $counter = 0;
                    $counterInner = 0;
                    query_posts('showposts=12');
                    if (have_posts())
                    {
                        while (have_posts())
                        {
                            the_post();
                            if($counter == 0)
                            {
                                echo '<li data-target="#carousel-receta" data-slide-to="0" class="active"></li>';
                            }
                            else if($counter%3 == 0)
                            {
                                {
                                    echo '<li data-target="#carousel-receta" data-slide-to="'.$counterInner.'"></li>';
                                }
                            }
                            $counter++;
                            if($counter%3 == 0)
                            {
                                $counterInner++;
                            }
                        }
                    }
                    wp_reset_query();
                    ?>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    if (have_posts())
                    {
                        the_post();
                    }
                    ?>									  
                    <?php
                    query_posts('showposts=12');
                    if (have_posts())
                    {
                        while (have_posts())
                        { 
                            the_post();
                            if($counter == 0)
                            {
                                echo '<div class="item active">';
                                echo '<div class="row no-margin text-center">';
                            }
                            else if($counter%3 == 0)
                            {
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="item">';
                                echo '<div class="row no-margin text-center">';
                            }
                    ?>
                    <div class="col-sm-4">
                        <div class="bckgnd">
                            <div class="post-img-container">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Receta" class="center-block">
                            </div>
                            <h5 class="white"><?php echo get_the_title(); ?></h5>
                            <p class="white">
                                <?php
                            if ( strlen(get_the_content()) > 160)
                            {
                                echo substr(get_the_content(), 0,160).' [...]';
                            }
                            else
                            {
                                echo get_the_content();
                            }
                                ?>
                            </p>
                            <a href="<?php echo the_permalink();?>">LEER MÁS</a>
                        </div>
                    </div>
                    <?php
                            $counter++;
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    wp_reset_query();
                    ?>
                </div>
            </div>
            <a class="bottom-button" href="recetas">VER MÁS RECETAS</a>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTANOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contactanos" id="contactanos">
        <div>
            <div class="googleMap" id="googleMap" position="contactanos"></div>
        </div>
        <div class="container form vertical-align">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="container-size text-center">
                    <h2><?php echo CFS()->get('contactanos_title');?></h2>
                    <?php echo do_shortcode('[contact-form-7 id="4" title="Formulario de contacto 1"]') ?>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="contactanos-bottom">
            <div class="container">
                <div class="col-sm-3 text-center left-side">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/contactanos/logo.png" alt="">
                    <div class="social">
                        <a href="https://www.facebook.com/pondeponderosa" target="_blank"><img src="<?php echo bloginfo('template_url').'/'; ?>img/contactanos/fb.png" alt=""></a>
                        <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo bloginfo('template_url').'/'; ?>img/contactanos/instagram.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-6 middle"></div>
                <div class="col-sm-3 right-side">
                    <p class="address">
                        <?php echo CFS()->get('direccion');?>
                    </p>
                    <p class="phone">
                        <?php echo CFS()->get('telefono');?>
                    </p>
                    <a href="mailto:<?php echo CFS()->get('nosotros_text');?>">
                        <p class="web">
                            <?php echo CFS()->get('email');?>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>