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
$book_property_viewing = get_field("book_property_viewing", $page_id);
$book_property_viewing_subtext = get_field("book_property_viewing_subtext", $page_id);

get_header();
?>
<style>
    .slick-list {
        position: relative;
    }
    .slider-for-property .slick-list:before{
        content :'';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #00000057;
        z-index: 1000;
    }
</style>
<?php get_template_part('/template-parts/gallery') ?>

        <div class="property-container property-container--alt">
            <!--<div class="breadcrumbs">-->

            <!--    <a href="/" class="main-text text--medium text--white text--opacity">Home</a>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs" width="14"-->
            <!--                        height="14"></span>-->
            <!--    <a href="/offplan/" class="main-text text--medium text--white text--opacity">Off-plan</a>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs" width="14"-->
            <!--                        height="14"></span>-->
            <!--    <span class="main-text text--medium text--white"><?php the_title(); ?></span>-->
            <!--</div>-->
            <div class="property-container__wrapper">
                <div class="property-container__content property-container__content--alt">

                    <h1><?php the_title(); ?></h1>
                    <span class="main-text text--white">
                        <?= $after_title_text_buy_rent; ?>
                    </span>
                </div>
                <span class="property-container__price">AED <?= number_format($buy_rent_price); ?></span>
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
                <span class="property-container__price text--black">AED <?= number_format($buy_rent_price); ?></span>
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
            <p class="section__desc main-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                dolor sit amet, consectetur
                adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem
                ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit.
            </p>
            <div class="video-section">
                <a href="#">
                    <img class="video-section-img" src="<?= get_template_directory_uri() ?>/assets/img/off-plan_projects/video_icon.svg" alt="video" width="143"
                         height="143">
                </a>
            </div>
            <div class="features__list">
                <?php $tags = get_tags(); ?>
                <?php foreach ( $tags as $tag ) { ?>
                    <div class="features__list-item">
                        <?php echo tag_description($tag->term_id);?>
                        <span class="main-text"><?php echo $tag->name; ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="section payment">
        <div class="container">
            <h2 class="main-title">Payment plan</h2>
            <p class="section__desc main-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Lorem ipsum dolor
            </p>
            <div class="payment__grid">
                <a href="#" class="payment__grid-item">
                    <span class="block-title">Installment 1</span>
                    <span class="payment__grid-item-percent">10%</span>
                    <span class="main-text--lg">Lorem ipsum dolor sit amet</span>
                </a>
                <a href="#" class="payment__grid-item">
                    <span class="block-title">Installment 1</span>
                    <span class="payment__grid-item-percent">10%</span>
                    <span class="main-text--lg">Lorem ipsum dolor sit amet</span>
                </a>
                <a href="#" class="payment__grid-item">
                    <span class="block-title text--white">Installment 1</span>
                    <span class="payment__grid-item-percent">10%</span>
                    <span class="main-text--lg text--white">Lorem ipsum dolor sit amet</span>
                </a>
            </div>
        </div>
    </section>

    <section class=" plans section--margin-bottom">
        <div class="container">
            <div class="plans__header">
                <h2 class="main-title">Types of Prescott floor plans</h2>
                <button type="button"
                        class="product-card__download product-card__download--alt plans__header-download main-text--lg text--green text--underline text--semibold"
                        data-modal-id="lw-confirm-modal">
                    Download catalogue
                </button>
            </div>
            <div class="intro_slider">
                <div class="intro_slider-slide">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/off-plan_projects/div_img.png" alt="intro_icon_sq" width="832" height="524">
                    <div class="intro_slider-slide__side">
                        <span class="intro_slider-slide__side-title">Apartment - <span
                                    class="text--semibold">76m м<sup>2</sup></span></span>
                        <div class="intro_slider-slide-group">
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Bedrooms</span>
                                <span class="block-title text--uppercase text--regular"><?= $beds; ?></span>
                            </div>
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Living area</span>
                                <span class="block-title text--uppercase text--regular">76m2</span>
                            </div>
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Balcony</span>
                                <span class="block-title text--uppercase text--regular">Yes</span>
                            </div>
                        </div>
                        <span class="intro_slider-slide__side-price">AED 2.800.000</span>
                        <button type="button"
                                class="main-text--lg text--bold text--green text--uppercase text--underline lw-plans-btn">Lorem
                            ipsum dolo</button>
                    </div>
                    <button type="button"
                            class="product-card__download product-card__download--alt main-text--lg text--green text--underline text--semibold product-card__download-plans-slide"
                            data-modal-id="lw-confirm-modal">
                        Download catalogue
                    </button>
                </div>
                <div class="intro_slider-slide">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/off-plan_projects/div_img.png" alt="intro_icon_sq" width="832" height="524">
                    <div class="intro_slider-slide__side">
                        <span class="intro_slider-slide__side-title">Apartment - <span
                                    class="text--semibold">76m м<sup>2</sup></span></span>
                        <div class="intro_slider-slide-group">
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Bedrooms</span>
                                <span class="block-title text--uppercase text--regular">1 bedroom</span>
                            </div>
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Living area</span>
                                <span class="block-title text--uppercase text--regular">76m2</span>
                            </div>
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Balcony</span>
                                <span class="block-title text--uppercase text--regular">Yes</span>
                            </div>
                        </div>
                        <span class="intro_slider-slide__side-price">AED 2.800.000</span>
                        <button type="button"
                                class="main-text--lg text--bold text--green text--uppercase text--underline lw-plans-btn">Lorem
                            ipsum dolo</button>
                    </div>
                    <button type="button"
                            class="product-card__download product-card__download--alt main-text--lg text--green text--underline text--semibold product-card__download-plans-slide"
                            data-modal-id="lw-confirm-modal">
                        Download catalogue
                    </button>
                </div>
                <div class="intro_slider-slide">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/off-plan_projects/div_img.png" alt="intro_icon_sq" width="832" height="524">
                    <div class="intro_slider-slide__side">
                        <span class="intro_slider-slide__side-title">Apartment - <span
                                    class="text--semibold">76m м<sup>2</sup></span></span>
                        <div class="intro_slider-slide-group">
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Bedrooms</span>
                                <span class="block-title text--uppercase text--regular">1 bedroom</span>
                            </div>
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Living area</span>
                                <span class="block-title text--uppercase text--regular">76m2</span>
                            </div>
                            <div class="intro_slider-slide__side-item">
                                <span class="section-title text--opacity text--unset ">Balcony</span>
                                <span class="block-title text--uppercase text--regular">Yes</span>
                            </div>
                        </div>
                        <span class="intro_slider-slide__side-price">AED 2.800.000</span>
                        <button type="button"
                                class="main-text--lg text--bold text--green text--uppercase text--underline lw-plans-btn">Lorem
                            ipsum dolo</button>
                    </div>
                    <button type="button"
                            class="product-card__download product-card__download--alt main-text--lg text--green text--underline text--semibold product-card__download-plans-slide"
                            data-modal-id="lw-confirm-modal">
                        Download catalogue
                    </button>
                </div>
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
            <?php
            $cords = explode(',', get_field('geopoints'))

            ?>
            <div id="map" class="location-map">
                <iframe class="location_iframe" src="https://maps.google.com/maps?q=<?=$cords[1]?>,<?=$cords[0]?>&hl=es&z=14&amp;output=embed" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <?php get_template_part('/template-parts/bookview') ?>

<?php
get_footer();
?>