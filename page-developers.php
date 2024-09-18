<?php
get_header('');?>

<section class="hero hero-developers">
    <div class="container hero-container">
        <div class="hero__content">
            <!--<div class="breadcrumbs">-->
            <!--    <a href="/" class="main-text text--medium text--white text--opacity">Home</a>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs"-->
            <!--                        width="14" height="14"></span>-->
            <!--    <a href="/" class="main-text text--medium text--white text--opacity">Developers</a>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs"-->
            <!--                        width="14" height="14"></span>-->
            <!--    <span class="main-text text--medium text--white"><?php the_title(); ?></span>-->
            <!--</div>-->
            <h1><?php the_title(); ?></h1>
            <span class="main-text text--white hero__content-desc">
                    <?= the_content(); ?>
                </span>
        </div>
    </div>
</section>

<section class="section intro ">
    <div class="container intro-developers">
        <?php
        // параметры по умолчанию
        $my_posts = get_posts( array(
            'numberposts' => -1,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'developers',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        global $post;
        foreach( $my_posts as $post ){
        setup_postdata( $post );
        $page_id = $post -> ID;
        ?>
        <a href="#" class="info__card">
            <?php the_post_thumbnail(); ?>
        </a>
        <?php  }
        wp_reset_postdata(); // сброс
        ?>
    </div>
</section>

<?php get_footer(''); ?>
