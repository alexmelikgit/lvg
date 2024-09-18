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
                    <!--<img class="" src="<?= $qr_code_dld_permit; ?>" alt="code" width="127" height="138">-->
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
            <form action="<?php echo site_url();?>/thanks" class="contacts-index__footer formemail ajax-form buy_page_form" id="book_crm_form_single_page" method="POST"  enctype="multipart/form-data">
				<div class="form_fields" >
					<input type="hidden" name='property' value='<?php echo get_field('qr_code_dld_permit_text');?>' />
    				<div class="contacts-index__footer-field">
    					<input type="text" name="client_last_name" placeholder="Last name">
                    	<img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/uploads/2024/08/last_name.png" alt="photo" width="419"
                             height="66">
    				</div>
    				<div class="contacts-index__footer-field">
    					<input type="text" name="client_name" placeholder="Name">
                    	<img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/uploads/2024/08/name.png" alt="photo" width="419"
                             height="66">
    				</div>
    				 <!-- Add a hidden input field to indicate form submission -->
                    <div class="contacts-index__footer-field">
                        <input type="email" name="client_email" class="email" placeholder="E-mail" autocomplete="on" required>
                        <img class="contacts-index__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/input_form_emal.png" alt="photo" width="419"
                             height="66">
                    </div>
                    <div class="contacts-index__footer-field">
                        <input type="number" name="client_phone" id="tel"  placeholder="+971 (___) __-__-__" autocomplete="on" required  style="position:relative; z-index:2" value="+">
                        <img class="contacts-index__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/input_form_phone.png" alt="photo" width="419"
                             height="66">
                    </div>
                </div>
                <button type="submit" data-modal-id="lw-ok-modal" class="single-page-send-btn">Submit Request</button>
            </form>
            <div class="property-contacts__header-wrapper lw-qr-mobile">
                <img class="" src="<?= $qr_code_dld_permit;?>">
                <span class="main-text--md text--semibold"><?= $qr_code_dld_permit_text;?></span>
            </div>
        </div>
    </section>