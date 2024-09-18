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
        <form class="contacts__footer" action="#">
            <div class="contacts__footer-content">
                <div class="contacts__footer-field">
                    <input type="text" required autocomplete="on">
                    <img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_name.png" alt="photo" width="419" height="66">
                </div>
                <div class="contacts__footer-field">
                    <input type="email" class="email" required autocomplete="on">
                    <img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_email.png" alt="photo" width="419" height="66">
                </div>
                <div class="contacts__footer-field">
                    <input type="tel" class="tel" id="phone-input" placeholder="+971 (___) __-__-__" required autocomplete="on">
                    <img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_phone.png" alt="photo" width="419" height="66">
                </div>
            </div>
            <div class="contacts__footer-attach-btn main-btn">
                <input type="file" class="fileInput" id="fileInput_2">
                <label for="fileInput_2" class="main-btn-label">Attach file</label>
            </div>
            <button type="submit" data-modal-id="lw-ok-modal" class="main-btn form-btn contacts__footer-content-submit">Submit application</button>
        </form>
    </div>
</section>

<?php get_footer(''); ?>
