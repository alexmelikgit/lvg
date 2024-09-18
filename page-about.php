<?php

global $post;
$page_id = $post -> ID;

$about_us_page_title = get_field("about_us_page_title", $page_id);
$about_us_page_description = get_field("about_us_page_description", $page_id);
$about_us_page_subtitle = get_field("about_us_page_subtitle", $page_id);
$about_us_page_subtitle_description = get_field("about_us_page_subtitle_description", $page_id);
$about_us_page_benefit_subtitle = get_field("about_us_page_benefit_subtitle", $page_id);
$about_us_page_benefit_description = get_field("about_us_page_benefit_description", $page_id);
$about_us_page_benefit_subtitle_2 = get_field("about_us_page_benefit_subtitle_2", $page_id);
$about_us_page_benefit_description_2 = get_field("about_us_page_benefit_description_2", $page_id);
$about_us_page_benefit_subtitle_3 = get_field("about_us_page_benefit_subtitle_3", $page_id);
$about_us_page_benefit_description_3 = get_field("about_us_page_benefit_description_3", $page_id);
$about_us_page_benefit_subtitle_4 = get_field("about_us_page_benefit_subtitle_4", $page_id);
$about_us_page_benefit_description_4 = get_field("about_us_page_benefit_description_4", $page_id);
$about_us_page_our_services_title = get_field("about_us_page_our_services_title", $page_id);
$about_us_page_our_services_title_description = get_field("about_us_page_our_services_title_description", $page_id);
$about_us_page_consulting_title = get_field("about_us_page_consulting_title", $page_id);
$about_us_page_consulting_description = get_field("about_us_page_consulting_description", $page_id);
$about_us_page_purchasing_support = get_field("about_us_page_purchasing_support", $page_id);
$about_us_page_purchasing_support_description = get_field("about_us_page_purchasing_support_description", $page_id);
$about_us_page_after_sales = get_field("about_us_page_after_sales", $page_id);
$about_us_page_after_sales_description = get_field("about_us_page_after_sales_description", $page_id);
$about_us_page_selecting_title = get_field("about_us_page_selecting_title", $page_id);
$about_us_page_selecting_title_description = get_field("about_us_page_selecting_title_description", $page_id);

get_header(''); 

?>
<style>
    .hero__content .hero__content-desc.main-text{
        color:#fff !important;
    }
</style>
<section class="hero hero-about">
    <div class="container hero-container">
        <div class="hero__content">
            <h1 class=""><?= $about_us_page_title; ?></h1>
            <span class="main-text hero__content-desc about__content-desc">
                    <?= $about_us_page_description; ?>
                </span>
        </div>
    </div>
</section>

<section class="section intro">
    <div class="container">
        <h2 class="main-title"><?= $about_us_page_subtitle; ?></h2>
        <p class="section__desc main-text">
            <?= $about_us_page_subtitle_description; ?>
        </p>
        <div class="about-grid__fields-grid">
            <div class="about-grid__fields-grid-item">
                <span class="section-title"><?= $about_us_page_benefit_subtitle; ?></span>
                <span class="main-text text--opacity"><?= $about_us_page_benefit_description; ?>
                    </span>
            </div>
            <div class="about-grid__fields-grid-item">
                <span class="section-title"><?= $about_us_page_benefit_subtitle_2; ?></span>
                <span class="main-text text--opacity"><?= $about_us_page_benefit_description_2; ?>
                    </span>
            </div>
            <div class="about-grid__fields-grid-item">
                <span class="section-title"><?= $about_us_page_benefit_subtitle_3; ?></span>
                <span class="main-text text--opacity"><?= $about_us_page_benefit_description_3; ?>
                    </span>
            </div>
            <div class="about-grid__fields-grid-item">
                <span class="section-title"><?= $about_us_page_benefit_subtitle_4; ?></span>
                <span class="main-text text--opacity"><?= $about_us_page_benefit_description_4; ?>
                    </span>
            </div>
        </div>
    </div>
</section>

<section class="section team" id="team">
    <div class="container">
        <h2 class="main-title">Our team</h2>
        <div class="team__grid">
            <?php get_template_part('/template-parts/teammembers') ?>
        </div>
    </div>
</section>

<section class="section services ">
    <div class="container">
        <h2 class="main-title"><?= $about_us_page_our_services_title; ?></h2>
        <p class="section__desc main-text">
            <?= $about_us_page_our_services_title_description; ?>
        </p>
        <div class="services__grid">
            <div class="services__grid-item">
                <img src="<?= get_template_directory_uri() ?>/assets/img/about/services_1.png" alt="services" width="790" height="404">
                <div class="services__grid-item-content services__grid-item-content__img_1">
                    <span class="block-title text--regular"><?= $about_us_page_consulting_title; ?></span>
                    <ul>
                        <?= $about_us_page_consulting_description; ?>
                    </ul>
                </div>
            </div>
            <div class="services__grid-item">
                <img src="<?= get_template_directory_uri() ?>/assets/img/about/services_2.png" alt="services" width="790" height="404">
                <div class="services__grid-item-content services__grid-item-content__img_2">
                    <span class="block-title text--regular"><?= $about_us_page_purchasing_support; ?></span>
                    <ul>
                        <?= $about_us_page_purchasing_support_description; ?>
                    </ul>
                </div>
            </div>
            <div class="services__grid-item">
                <img src="<?= get_template_directory_uri() ?>/assets/img/about/services_3.png" alt="services" width="790" height="404">
                <div class="services__grid-item-content services__grid-item-content__img_3">
                    <span class="block-title text--regular"><?= $about_us_page_after_sales; ?></span>
                    <ul>
                        <?= $about_us_page_after_sales_description; ?>
                    </ul>
                </div>
            </div>
            <div class="services__grid-item">
                <img src="<?= get_template_directory_uri() ?>/assets/img/about/services_4.png" alt="services" width="790" height="404">
                <div class="services__grid-item-content services__grid-item-content__img_4">
                    <span class="block-title text--regular"><?= $about_us_page_selecting_title; ?></span>
                    <ul>
                        <?= $about_us_page_selecting_title_description; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section partners ">
    <div class="container partners-container">
        <div class="section-header">
            <h2 class="main-title">Our partners</h2>
        </div>
        <div class="partners__slider">
<?php

// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'partners',
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
        <div class="nav__slider"></div>
    </div>
</section>



<section class="section contacts" id="contacts">
<?php get_template_part('/template-parts/tempparts') ?>
    <div class="container contacts-container">
        <img class="contacts__img" src="<?= get_template_directory_uri() ?>/assets/img/about/contacts_img.png" alt="contacts_img" width="1440" height="700">
    </div>
</section>
<?php get_footer(''); ?>