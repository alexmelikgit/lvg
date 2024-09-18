<?php

// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'tempparts',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;
foreach( $my_posts as $post ){
    setup_postdata( $post );
    $page_id = $post -> ID;

    $prompt_title = get_field("prompt_title", $page_id);
    $prompt_description = get_field("prompt_description", $page_id);

    ?>

    <section class="contacts">
        <div class="container contacts-container">
            <h2 class="base-title"><?= $prompt_title; ?></h2>
            <span class="section__desc main-text">
                <?= $prompt_description; ?>
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


<?php  }
wp_reset_postdata(); // сброс
?>