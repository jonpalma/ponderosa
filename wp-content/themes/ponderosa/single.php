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
                <h2>
                    <?php echo get_the_title(); ?>
                </h2>
            </div>
            <div class="image-container top-image">
                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="texto row no-margin">
                <div class="col-sm-7">
                    <div class="row no-margin">
                        <div class="col-sm-8">
                            <h3>INGREDIENTES:</h3>
                            <P class="ingredientes">
                                <?php echo CFS()->get('ingredientes');?>
                            </P>
                        </div>
                        <div class="col-sm-4 datos">
                            <p class="icon1">Preparación: <span class="bold-text">
                                <?php echo CFS()->get('tiempo');?>
                                </span>
                            </p>
                            <p class="icon2">Dificultad: <span class="bold-text">
                                <?php echo CFS()->get('dificultad');?>
                                </span>
                            </p>
                            <p class="icon3">Porciones: <span class="bold-text">
                                <?php echo CFS()->get('porciones');?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <h3>PREPARACIÓN:</h3>
                        <P class="preparacion">
                            <?php echo CFS()->get('preparacion');?>
                        </P>
                    </div>
                </div>
                <div class="col-sm-5 right-side">
                    <div class="row no-margin">
                        <h3>RECETAS RELACIONADAS:</h3>
                        <?php
                        $counter = 0;
                        $gblpostID = get_the_ID();
                        $posts = get_posts('orderby=rand&numberposts=6');
                        if($posts)
                        {
                            foreach($posts as $post)
                            {
                                if($gblpostID != get_the_ID())
                                {
                                    setup_postdata($post);
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="row no-margin relacionadas">
                                <div class="col-xs-5">
                                    <div class="image-container rel-image">
                                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <h3>
                                        <?php echo get_the_title(); ?>
                                    </h3>
                                    <P>
                                        <?php
                                    if ( strlen(get_the_content()) > 100)
                                    {
                                        echo substr(get_the_content(), 0,100).' [...]';
                                    }
                                    else
                                    {
                                        echo get_the_content();
                                    }
                                        ?>
                                    </P>
                                    <P class="time">
                                        <?php echo CFS()->get('tiempo');?>
                                    </P>
                                </div>
                            </div>
                        </a>
                        <?php
                                    $counter++;
                                    if($counter > 3)
                                    {
                                        break;
                                    }
                                }
                            }
                        }
                        wp_reset_postdata(); 
                        ?>
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
                <img class="logo" src="<?php echo bloginfo('template_url').'/'; ?>img/recetas-page/top-footer/footer-logo.png" alt="">
                <div class="social">
                    <a href="https://www.facebook.com/pondeponderosa" target="_blank"><img src="<?php echo bloginfo('template_url').'/'; ?>img/recetas-page/icons/fb.png" alt=""></a>
                    <a href="https://www.instagram.com/" target="_blank"><img src="<?php echo bloginfo('template_url').'/'; ?>img/recetas-page/icons/instagram.png" alt=""></a>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </section>
</div>
<?php include('footer.php'); ?>