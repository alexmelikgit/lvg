<?php

global $post;
$page_id = $post -> ID;

$sell_title = get_field("sell_title", $page_id);
$sell_description = get_field("sell_description", $page_id);
$sell_subtitle = get_field("sell_subtitle", $page_id);
$sell_subtitle_description = get_field("sell_subtitle_description", $page_id);
$sale_process_title = get_field("sale_process_title", $page_id);
$step_1 = get_field("step_1", $page_id);
$step_2 = get_field("step_2", $page_id);
$step_3 = get_field("step_3", $page_id);
$step_4 = get_field("step_4", $page_id);
$list_your_property_title = get_field("list_your_property_title", $page_id);
$list_your_property_description = get_field("list_your_property_description", $page_id);

get_header(''); ?>


    <section class="hero hero-sell">
        <div class="container hero-container">
            <div class="hero__content">
                <h1 id="sell_title" ><?= $sell_title; ?></h1>
                <span class="main-text text--white hero__content-desc">
                    <?= $sell_description; ?>
                </span>
                <a id="sell_a" href="#list_your_property" class="main-btn">List your property</a>
            </div>
        </div>
    </section>

    <section class="section intro">
        <div class="container intro-vacancies">
            <h2 class="main-title"><?= $sell_subtitle; ?></h2>
            <p class="section__desc main-text">
                <?= $sell_subtitle_description; ?>
            </p>
        </div>
    </section>

    <section class="intro">
        <div class="container intro-sell">
            <h2 class="main-title"><?= $sale_process_title; ?></h2>
            <div class="intro-sell__advantages">
                <div class="intro-sell__advantages-card">
                    <div class="intro-sell__advantages-card-header">
                        <span class="block-title text--green">01</span>
                        <span class="block-title text--uppercase text--regular">Step</span>
                    </div>
                    <span class="main-text text--opacity "><?= $step_1; ?>
                    </span>
                </div>
                <div class="intro-sell__advantages-card">
                    <div class="intro-sell__advantages-card-header">
                        <span class="block-title text--green">02</span>
                        <span class="block-title text--uppercase text--regular">Step</span>
                    </div>
                    <span class="main-text text--opacity "><?= $step_2; ?>
                    </span>
                </div>
                <div class="intro-sell__advantages-card">
                    <div class="intro-sell__advantages-card-header">
                        <span class="block-title text--green">03</span>
                        <span class="block-title text--uppercase text--regular">Step</span>
                    </div>
                    <span class="main-text text--opacity "><?= $step_3; ?>
                    </span>
                </div>
                <div class="intro-sell__advantages-card">
                    <div class="intro-sell__advantages-card-header">
                        <span class="block-title text--green">04</span>
                        <span class="block-title text--uppercase text--regular">Step</span>
                    </div>
                    <span class="main-text text--opacity "><?= $step_4; ?>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="section contacts">
        <div class="container contacts-container">
            <img class="intro__img" src="<?= get_template_directory_uri() ?>/assets/img/sell/sell_progress.png" alt="vacancies_text" width="1441" height="700">
            <h2 id="sell_cont_title" class="base-title"><?= $list_your_property_title; ?></h2>
            <span id="list_your_property" class="section__desc main-text">
               <?= $list_your_property_description; ?>
            </span>
            <!-- <form id="list_your_property" class="contacts__footer" action="#">
                <div class="contacts__footer-content">
                    <div class="contacts__footer-field">
                        <input type="text">
                        <img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_name.png" alt="photo"
                             width="419" height="66">
                    </div>
                    <div class="contacts__footer-field">
                        <input type="email" class="email" required autocomplete="on">
                        <img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_email.png" alt="photo"
                             width="419" height="66">
                    </div>
                    <div class="contacts__footer-field">
                        <input type="tel" class="tel" placeholder="+971 (___) __-__-__" required autocomplete="on">
                        <img class="contacts__footer-field-img" src="<?= get_template_directory_uri() ?>/assets/img/vacancies/input_phone.png" alt="photo"
                             width="419" height="66">
                    </div>
                </div>
                <div class="contacts__footer-content contacts__footer-content--alt">
                    <select class="js-example-js-example-basic-single" name="states[]" multiple="multiple" data-placeholder="Apartment">
                        <option value="Apartment">Apartment</option>
                        <option value="Penthouse">Penthouse</option>
                        <option value="Townhouse">Townhouse</option>
                        <option value="Duplex">Duplex</option>
                        <option value="Villa">Villa</option>
                    </select>
                    <select class="js-example-js-example-basic-single" name="states[]" multiple="multiple" data-placeholder="Location">
                        <option value="Location">Location</option>
                        <option value="Location">Location</option>
                    </select>
                    <div class="main-btn contacts__footer-content-attach-photos-btn">
                        <input type="file" class="fileInput" id="fileInput">
                        <label for="fileInput" class="main-btn-label">Attach photos</label>
                    </div>
                </div>

                <button type="submit" data-modal-id="lw-ok-modal" class="main-btn contacts__footer-content-submit">Send</button>
            </form> -->
                      <form class="contacts-index__footer formemail ajax-form buy_page_form" id="book_crm_form" method="POST" enctype="multipart/form-data">
               <div class="form_fields" >
                   	<div class="contacts-index__footer-field">
					<input type="text" name="last_name" placeholder="Last name">
                	<img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/uploads/2024/08/last_name.png" alt="photo" width="419" height="66">
    				</div>
    				<div class="contacts-index__footer-field">
    					<input type="text" name="name" placeholder="Name">
                    	<img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/uploads/2024/08/name.png" alt="photo" width="419" height="66">
    				</div>
    				 <!-- Add a hidden input field to indicate form submission -->
                    <div class="contacts-index__footer-field">
                        <input type="email" name="email" class="email" placeholder="E-mail" autocomplete="on" required="">
                        <img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/themes/lvg/assets/img/input_form_emal.png" alt="photo" width="419" height="66">
                    </div>
                    <div class="contacts-index__footer-field">
                        <input type="number" name="phonenum" id="" placeholder="971 (___) __-__-__" autocomplete="on" required="" style="position:relative; z-index:2">
                        <img class="contacts-index__footer-field-img" src="https://lvgrealestatedubai.com/wp-content/themes/lvg/assets/img/input_form_phone.png" alt="photo" width="419" height="66">
                    </div>
                 
               </div>
			
                <button type="submit" data-modal-id="lw-ok-modal" class="main-btn">Submit Request</button>
            </form>
        </div>
    </section>

<?php get_footer(''); ?>