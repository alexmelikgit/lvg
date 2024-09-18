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

$book_property_viewing = get_field("book_property_viewing", $page_id);
$book_property_viewing_subtext = get_field("book_property_viewing_subtext", $page_id);
$qr_code_dld_permit_text = get_field("qr_code_dld_permit_text", $page_id);
$qr_code_dld_permit = get_field("qr_code_dld_permit", $page_id);
$reference = get_post_meta($page_id,'crmID',true);


?>
   <style>
        .data__list {
            display: flex;
            flex-wrap: wrap;
        }

    </style>
<section class="section contacts">
        <div class="container contacts-container">
            <div class="property-contacts__header">
                <div class="property-contacts__header-wrapper">
                    <h2 class="base-title">Book property viewing</h2>
                    <span class="section__desc main-text">
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet,
                    </span>
                </div>
                <div class="property-contacts__header-wrapper lw-qr-top">
                    <img class="" src="<?= $qr_code_dld_permit; ?>" alt="code" width="127" height="138">
                    <span class="main-text--md text--semibold"><?= $qr_code_dld_permit_text; ?></span>
                </div>
            </div>
            <div class="property-contacts__header-wrapper lw-qr-bottom">
                <img class="" src="<?= $qr_code_dld_permit; ?>" alt="code" width="127" height="138">
                <span class="main-text--md text--semibold"><?= $qr_code_dld_permit_text; ?></span>
            </div>
 <div class="data__list" id="date-buttons-container">
        <!-- Buttons will be inserted here by JavaScript -->
    </div>
            <form action="<?php echo site_url();?>/thanks" class="contacts__footer ajax-form" id="single_book_form" method="POST"  enctype="multipart/form-data">
                <input type="hidden" name="form_submitted" value="4"> <!-- Add a hidden input field to indicate form submission -->
                <div class="contacts__footer-content contacts__footer-content-property">
                    <div class="contacts__footer-field">
                        <input type="text" name="yourname" required autocomplete="on">
                        <input type="hidden" name="yourlastname" value="None">
                        <?
                        if (isMobile()) {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_name.png" alt="photo"
                           width="419" height="66"><?
                        } else {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_name_big.png" alt="photo"
                           width="419" height="66"> <?
                        }
                        ?>
                        
                    </div>
                    <div class="contacts__footer-field">
                        <input type="tel" name="phonenum" id="phone-input" class="tel phone-correct" placeholder="+971 (___) __-__-__" required autocomplete="on">
                        <?
                        if (isMobile()) {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_phone.png" alt="photo"
                             width="419" height="66"><?
                        } else {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_phone_big.png" alt="photo"
                             width="419" height="66"> <?
                        }
                        ?>
                        
                    </div>
                </div>
                <div class="contacts__footer-content contacts__footer-content-property">
                    <div class="contacts__footer-field">
                        <input type="email" name="email" class="email">
                        <?
                        if (isMobile()) {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_email.png" alt="photo"
                             width="419" height="66"><?
                        } else {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_email_big.png" alt="photo"
                             width="419" height="66"> <?
                        }
                        ?>
                        
                    </div>
                    <div class="contacts__footer-field">
                        <input type="text" name="yourmessage">
                        <?
                        if (isMobile()) {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_textarea.png" alt="photo"
                             width="419" height="66"><?
                        } else {
                           ?><img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_textarea_big.png" alt="photo"
                             width="419" height="66"> <?
                        }
                        ?>
                        
                    </div>
                </div>
                <button type="submit"  data-modal-id="lw-ok-modal" class="main-btn contacts__footer-content-submit send_form" data-form='single_book_form' data-reference="<?php echo $reference;?>">Submit</button>
            </form>
            <div class="property-contacts__header-wrapper lw-qr-mobile">
                <img class="" src="<?= $qr_code_dld_permit;?>">
                <span class="main-text--md text--semibold"><?= $qr_code_dld_permit_text;?></span>
            </div>
        </div>
    </section>