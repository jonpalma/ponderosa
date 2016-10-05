<?php $page = 'index'; ?>
<?php include('header.php'); ?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
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
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* Nosotros  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="nosotros" id="nosotros">
        <div class="container spacing">
            <div class="text-center">
                <img src="<?php echo bloginfo('template_url').'/'; ?>img/nosotros/logo.png" alt="">
            </div>               
            <div class="text-center">
                <p>
                    <?php echo CFS()->get('nosotros_text');?>
                </p>
            </div>        
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRE-PRODUCTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="preproductos" id="preproductos">
        <div class="container preproducto-img">
            <img class="fadein" src="<?php echo bloginfo('template_url').'/'; ?>img/preproductos/bodegon.png" alt="">
        </div>
        <div class="bottom-background">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/preproductos/madera.jpg" alt="">
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRODUCTOS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="productos" id="productos">
        <div class="container spacing">
            <div class="encabezado text-center">
                <a><img src="<?php echo bloginfo('template_url').'/'; ?>img/productos/logo10.png" alt=""></a>
                <p><?php echo CFS()->get('productos_title');?></p>
            </div>
            <div class="row no-margin text-center">
                <div class="row no-margin">
                    <?php
                    $arrayProductos = CFS()->get('producto_array');
                    $arrayEnd = end($arrayProductos);
                    $counter = 0;
                    foreach( $arrayProductos as $producto )
                    {
                        if($counter > 5)
                        {
                            return true;
                        }
                    ?>
                    <div class="col-sm-2">
                        <?php
                        if( $counter == 0 )
                        {
                            echo '<div class="img-container active">';
                        }
                        else
                        {
                            echo '<div class="img-container">';
                        }
                        ?>
                        <img src="<?php echo $producto['producto_img']; ?>" alt="Productos" class="img-responsive center-block">
                        <p class="responsive"><?php echo $producto['producto_name']; ?></p>
                    </div>
                    <?php
                        echo '</div>';
                        $counter++;
                    }
                    ?>
                </div>
            </div>
            <div class="lbproductos text-center">
                <?php
                $arrayProductosName = CFS()->get('producto_array');
                $arrayEnd = end($arrayProductosName);
                $counter = 0;
                foreach( $arrayProductosName as $producto ) {
                    if($counter > 5) {
                        return true;
                    }
                ?>
                <?php
                    if( $counter == 0 ) {
                        echo '<p id="label-'.$counter.'" class="">';
                    }
                    else {
                        echo '<p id="label-'.$counter.'" class="hidden">';
                    }
                ?>
                <?php echo $producto['producto_name']; ?>
                <?php
                    echo '</p>';

                    $counter++;
                }
                ?>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* RECETAS  */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="receta parallax-container" id="receta">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/recetas/bg.jpg" alt="Parallax">
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
    </section>
</div>
<?php include('footer.php'); ?>