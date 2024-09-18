<?php get_header(''); 

?>
<section class=" hero hero-off_plan">
<?php get_template_part('/template-parts/buyrentparts') ?>

<div class="product__grid">
    
</div>
<button  class="show_more product-card__btn main-text--lg text--semibold text--uppercase text--green text--underline">Show more</button>

</section> 

<section class="contacts">
    <div class="container contacts-container">
        <h2 class="base-title">Prompt consultation</h2>
        <span class="section__desc main-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Lorem ipsum dolor sit amet,
            </span>
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
            <img class="contacts__img" src="<?= get_template_directory_uri() ?>/assets/img/off_plan/contacts_img.png" alt="contacts_img" width="1440" height="700">
    </div>
</section>



<?php get_footer(''); ?>
