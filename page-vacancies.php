<?php
get_header('');
global $post;
$page_id = $post -> ID;

$vacancies_title = get_field("vacancies_title", $page_id);
$vacancies_subtitle = get_field("vacancies_subtitle", $page_id);
$vacancies_description = get_field("vacancies_description", $page_id);
$vacancies_main_photo = get_field("vacancies_main_photo", $page_id);
$vacancies_text_1 = get_field("vacancies_text_1", $page_id);
$vacancies_text_2 = get_field("vacancies_text_2", $page_id);
$vacancies_text_3 = get_field("vacancies_text_3", $page_id);
$vacancies_send_your_resume_description = get_field("vacancies_send_your_resume_description", $page_id);
?>

<section class="hero hero-vacancies">
    <div class="container hero-container">
        <div class="hero__content">
            <!--<div class="breadcrumbs">-->
            <!--    <button type="button" class="main-text text--medium text--white text--opacity">Main</button>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs"-->
            <!--                        width="14" height="14"></span>-->
            <!--    <button type="button" class="main-text text--medium text--white text--opacity">Lorem ipsum</button>-->
            <!--    <span class=""><img src="<?= get_template_directory_uri() ?>/assets/img/developers/simple-line-icons_arrow-right.svg" alt="breadcrumbs"-->
            <!--                        width="14" height="14"></span>-->
            <!--    <span class="main-text text--medium text--white">Vacancies</span>-->
            <!--</div>-->
            <h1><?= $vacancies_title; ?></h1>
            <span class="main-text text--white hero__content-desc">
                    <?= the_content(); ?>
                </span>
            <a id="sell_a" href="#contacts" class="main-btn">Send your resume</a>
        </div>
    </div>
</section>

<section class="section intro" id="buy">
    <div class="container intro-vacancies">
        <h2 class="main-title"><?= $vacancies_subtitle; ?></h2>
        <p class="section__desc main-text"><?= $vacancies_description; ?>
        </p>
        <picture>
            <source type="image/png" media="(max-width: 543px)" srcset="<?= $vacancies_main_photo; ?>">
            <source type="image/png" media="(max-width: 1920px)" srcset="<?= $vacancies_main_photo; ?>">
            <img fetchpriority="high" class="intro__img" src="<?= $vacancies_main_photo; ?>" alt="vacancies_text" width="1441" height="700">
        </picture>
        <div class="intro-vacancies__advantages">
            <div class="intro-vacancies__advantages-card">
                <span class="block-title text--green">01</span>
                <span class="main-text"><?= $vacancies_text_1; ?></span>
            </div>
            <div class="intro-vacancies__advantages-card">
                <span class="block-title text--green">02</span>
                <span class="main-text"><?= $vacancies_text_2; ?></span>
            </div>
            <div class="intro-vacancies__advantages-card">
                <span class="block-title text--green">03</span>
                <span class="main-text"><?= $vacancies_text_3; ?></span>
            </div>
        </div>
    </div>
</section>

<section class="section contacts" id="contacts">
    <div class="container contacts-container">
        <h2 class="base-title">Send Your CV</h2>
        <span class="section__desc main-text">
            <?= $vacancies_send_your_resume_description; ?>
          </span>
        <form action="<?php echo site_url();?>/thanks" class="contacts-index__footer formemail ajax-form buy_page_form" id="book_crm_form" method="POST" enctype="multipart/form-data">
            <div class="form_fields" >
                <div class="contacts-index__footer-field">
                    <input type="text" name="client_last_name" placeholder="Last name">
                    <img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/uploads/2024/08/last_name.png" alt="photo" width="419" height="66">
                </div>
                <div class="contacts-index__footer-field">
                    <input type="text" name="client_name" placeholder="Name">
                    <img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/uploads/2024/08/name.png" alt="photo" width="419" height="66">
                </div>
                <!-- Add a hidden input field to indicate form submission -->
                <div class="contacts-index__footer-field">
                    <input type="email" name="client_email" class="email" placeholder="E-mail" autocomplete="on" required="">
                    <img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/themes/lvg/assets/img/input_form_emal.png" alt="photo" width="419" height="66">
                </div>
                <div class="contacts-index__footer-field">
                    <input type="number" name="client_phone" id="tel" placeholder="971 (___) __-__-__" autocomplete="on" required="" style="position:relative; z-index:2">
                    <img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/themes/lvg/assets/img/input_form_phone.png" alt="photo" width="419" height="66">
                </div>

            </div>

            <button type="submit" data-modal-id="lw-ok-modal" class="main-btn">Submit Request</button>
        </form>
    </div>
</section>

<?php get_footer(''); ?>
