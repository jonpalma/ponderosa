<?php $page = 'recetas'; ?>
<?php include('header.php'); ?>
<div class="wrapper recetas" id="recetas">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner" id="banner">
        <div class="container">
            <div class="title">
                <p>RECETAS PONDEROSA</p>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* DESAYUNO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="desayuno" id="desayuno">
        <div class="container text-center light-spacing">
            <div class="top-title">
                <div class="linea"></div>
                <h2>DESAYUNO</h2>
            </div>
            <div class="carousel slide" id="carousel-desayuno" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    $posts = get_posts('category_name=desayuno');
                    if($posts)
                    {
                        foreach ($posts as $key => $post)
                        {
                            setup_postdata($post);
                            if($counter == 0)
                            {
                                echo '<div class="item active">';
                                echo '<div class="row no-margin text-center">';
                            }
                            else if($key%3 == 0)
                            {
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="item">';
                                echo '<div class="row no-margin text-center">';
                            }
                    ?>
                    <div class="col-sm-4">
                        <div class="image-container">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="descripcion">
                            <p class="title">
                                <?php echo get_the_title(); ?>
                            </p>
                            <p class="desc">
                                <?php
                            if ( strlen(get_the_content()) > 250)
                            {
                                echo substr(get_the_content(), 0,250).' [...]';
                            }
                            else
                            {
                                echo get_the_content();
                            }
                                ?>
                            </p>
                        </div>
                        <div class="footer">
                            <div class="col-sm-6 time">
                                <p class="">
                                    <?php echo CFS()->get('tiempo');?>
                                </p>
                            </div>
                            <div class="col-sm-6 link">
                                <a href="<?php the_permalink(); ?>">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <?php
                            $counter++; 
                        }
                        echo '</div>';
                        echo '</div>';  
                    }
                    wp_reset_postdata(); 
                    ?>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $counter = 0;
                    $posts = get_posts('category_name=desayuno');
                    if($posts)
                    {
                        foreach ($posts as $key => $post)
                        {
                            setup_postdata($post);
                            if($counter == 0)
                            {
                                echo '<li data-target="#carousel-desayuno" data-slide-to="0" class="active"></li>';
                            }
                            else if($key%3 == 0)
                            {
                                {
                                    echo '<li data-target="#carousel-desayuno" data-slide-to="'.$counter.'"></li>';
                                }
                            }
                    ?>
                    <?php
                            if($key%3 == 0)
                            {
                                $counter++;
                            }
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </ol>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* COMIDA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="comida" id="comida">
        <div class="container text-center light-spacing">
            <div class="top-title">
                <div class="linea"></div>
                <h2>COMIDA</h2>
            </div>
            <div class="carousel slide" id="carousel-comida" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    $posts = get_posts('category_name=comida');
                    if($posts)
                    {
                        foreach ($posts as $key => $post)
                        {
                            setup_postdata($post);
                            if($counter == 0)
                            {
                                echo '<div class="item active">';
                                echo '<div class="row no-margin text-center">';
                            }
                            else if($key%3 == 0)
                            {
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="item">';
                                echo '<div class="row no-margin text-center">';
                            }
                    ?>
                    <div class="col-sm-4">
                        <div class="image-container">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="descripcion">
                            <p class="title">
                                <?php echo get_the_title(); ?>
                            </p>
                            <p class="desc">
                                <?php
                            if ( strlen(get_the_content()) > 250)
                            {
                                echo substr(get_the_content(), 0,250).' [...]';
                            }
                            else
                            {
                                echo get_the_content();
                            }
                                ?>
                            </p>
                        </div>
                        <div class="footer">
                            <div class="col-sm-6 time">
                                <p class="">
                                    <?php echo CFS()->get('tiempo');?>
                                </p>
                            </div>
                            <div class="col-sm-6 link">
                                <a href="<?php the_permalink(); ?>">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <?php
                            $counter++; 
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    wp_reset_postdata(); 
                    ?>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $counter = 0;
                    $posts = get_posts('category_name=comida');
                    if($posts)
                    {
                        foreach ($posts as $key => $post)
                        {
                            setup_postdata($post);
                            if($counter == 0)
                            {
                                echo '<li data-target="#carousel-comida" data-slide-to="0" class="active"></li>';
                            }
                            else if($key%3 == 0)
                            {
                                {
                                    echo '<li data-target="#carousel-comida" data-slide-to="'.$counter.'"></li>';
                                }
                            }
                    ?>
                    <?php
                            if($key%3 == 0)
                            {
                                $counter++;
                            }
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </ol>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CENA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="cena" id="cena">
        <div class="container text-center light-spacing">
            <div class="top-title">
                <div class="linea"></div>
                <h2>CENA</h2>
            </div>
            <div class="carousel slide" id="carousel-cena" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $counter = 0;
                    $posts = get_posts('category_name=cena');
                    if($posts)
                    {
                        foreach ($posts as $key => $post)
                        {
                            setup_postdata($post);
                            if($counter == 0)
                            {
                                echo '<div class="item active">';
                                echo '<div class="row no-margin text-center">';
                            }
                            else if($key%3 == 0)
                            {
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="item">';
                                echo '<div class="row no-margin text-center">';
                            }
                    ?>
                    <div class="col-sm-4">
                        <div class="image-container">
                            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        <div class="descripcion">
                            <p class="title">
                                <?php echo get_the_title(); ?>
                            </p>
                            <p class="desc">
                                <?php
                            if ( strlen(get_the_content()) > 250)
                            {
                                echo substr(get_the_content(), 0,250).' [...]';
                            }
                            else
                            {
                                echo get_the_content();
                            }
                                ?>
                            </p>
                        </div>
                        <div class="footer">
                            <div class="col-sm-6 time">
                                <p class="">
                                    <?php echo CFS()->get('tiempo');?>
                                </p>
                            </div>
                            <div class="col-sm-6 link">
                                <a href="<?php the_permalink(); ?>">LEER MÁS</a>
                            </div>
                        </div>
                    </div>
                    <?php
                            $counter++;
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    wp_reset_postdata(); 
                    ?>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $counter = 0;
                    $posts = get_posts('category_name=cena');
                    if($posts)
                    {
                        foreach ($posts as $key => $post)
                        {
                            setup_postdata($post);
                            if($counter == 0)
                            {
                                echo '<li data-target="#carousel-cena" data-slide-to="0" class="active"></li>';
                            }
                            else if($key%3 == 0)
                            {
                                {
                                    echo '<li data-target="#carousel-cena" data-slide-to="'.$counter.'"></li>';
                                }
                            }
                    ?>
                    <?php
                            if($key%3 == 0)
                            {
                                $counter++;
                            }
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </ol>
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