<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lvg
 */
global $post;
$page_id = $post -> ID;

$after_title_text_buy_rent = get_field("after_title_text_buy_rent", $page_id);
$location_buy_rent = get_field("location_buy_rent", $page_id);
$beds = get_field("beds", $page_id);
$baths = get_field("baths", $page_id);
$property_area = get_field("property_area", $page_id);
$download_catalogue = get_field("download_catalogue", $page_id);
$buy_rent_price = get_field("buy_rent_price", $page_id);
$buy_rent_description = get_field("buy_rent_description", $page_id);
$location_buy_rent = get_field("location_buy_rent", $page_id);
$location_right_text = get_field("location_right_text", $page_id);
$after_title_text_buy_rent = get_field("after_title_text_buy_rent", $page_id);

get_header();
?>
<?php get_template_part('/template-parts/gallery') ?>

        <div class="property-container property-container--alt">
            <!--<div class="breadcrumbs">-->

            <!--    <a href="/" class="main-text text--medium text--white text--opacity">Home</a>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs" width="14"-->
            <!--                        height="14"></span>-->
            <!--    <a href="/buy/" class="main-text text--medium text--white text--opacity">Buy</a>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs" width="14"-->
            <!--                        height="14"></span>-->
            <!--    <span class="main-text text--medium text--white"><?php the_title(); ?></span>-->
            <!--</div>-->
            <div class="property-container__wrapper">
                <div class="property-container__content property-container__content--alt">

                    <h1 style="margin-bottom: 0;"><?php the_title(); ?></h1>
                    <span class="main-text text--white">
                        <?= $after_title_text_buy_rent; ?>
                    </span>
                </div>
                <span class="property-container__price">AED <?= $buy_rent_price; ?></span>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <button type="button" class="slider-nav__photos-btn block-title text--green text--uppercase text--underline"></button>
            <div class="property-container__wrapper property-container__wrapper--alt">
                <div class="property-container__content property-container__content--alt">

                    <h1 class="text--black"><?php the_title(); ?></h1>
                    <span class="main-text text--black">
                            <?= $after_title_text_buy_rent; ?>
                        </span>
                </div>
                <span class="property-container__price text--black">AED <?= $buy_rent_price; ?></span>
            </div>
            <div class="property__icon-group">
                <div class="property__icon-group-content">
                    <a href="#" class="section-title text--green product-card__location text--medium"><?= $location_buy_rent; ?></a>
                    <div class="property__icon-group-item">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_bed.svg" alt="intro_icon_bed" width="42" height="42">
                        <span class="section-title text--green text--medium"><?= $beds; ?></span>
                    </div>
                    <div class="property__icon-group-item">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_bath.svg" alt="intro_icon_bath" width="42" height="42">
                        <span class="section-title text--green text--medium"><?= $baths; ?></span>
                    </div>
                    <div class="property__icon-group-item">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_sq.svg" alt="intro_icon_sq" width="42" height="42">
                        <span class="section-title text--green text--medium"><?= $property_area; ?></span>
                    </div>
                </div>
                <!--<button type="button"-->
                <!--        class="product-card__download product-card__download--alt"-->
                <!--        data-modal-id="lw-confirm-modal">-->
                <!--    <a href="<?= $download_catalogue; ?>">Download catalogue</a>-->
                <!--</button>-->
            </div>
        </div>
    </section>

    <section class="section description">
        <div class="container">
            <h2 class="main-title">Description</h2>
            <p class="section__desc main-text">
                <?= $buy_rent_description; ?>
            </p>
        </div>
    </section>

    <section class=" features">
        <div class="container">
            <h2 class="main-title">Features & amenities</h2>
            <div class="features__list">
                <?php $tags = get_tags(); ?>
                    <?php foreach ( $tags as $tag ) { ?>
                        <div class="features__list-item">
                            <!--<?php  echo tag_description($tag->term_id);?>-->
                            <span class="main-text"><?php echo $tag->name; ?></span>
                        </div>
                    <?php } ?>
            </div>
        </div>
    </section>

    <section class="section--margin-top">
        <div class="container">
            <div class="property-location__header">
                <h1 class="base-title"><?= $location_buy_rent; ?></h1>
                <span class="main-text"><?= $location_right_text; ?>
                </span>
            </div>
            <div class="property-location__btns">
                <button type="button" class="property-location-btn active" data-location="schools">Schools</button>
                <button type="button" class="property-location-btn" data-location="shopping-malls">Shopping Malls</button>
                <button type="button" class="property-location-btn" data-location="hospitals">Hospitals</button>
                <button type="button" class="property-location-btn" data-location="restaurants">Restaurants</button>
                <button type="button" class="property-location-btn" data-location="metro-stations">Metro Stations</button>
            </div>

            <div id="map" class="location-map">
                <iframe class="location_iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.126044850566!2d55.15394027520808!3d25.097594277775183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b43d5cfeb55%3A0x625c793d7f78c700!2sConcord%20Tower!5e0!3m2!1sen!2skg!4v1712901025385!5m2!1sen!2skg" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

<?php get_template_part('/template-parts/bookview') ?>

<?php
get_footer();
?>