<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lvg
 */

?>
<?php

// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'footers',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;
foreach( $my_posts as $post ){
setup_postdata( $post );
$page_id = $post -> ID;
$logo_description = get_field("logo_description", $page_id);
$footer_phone_number = get_field("footer_phone_number", $page_id);
$footer_location = get_field("footer_location", $page_id);
$footer_email = get_field("footer_email", $page_id);
$footer_whatsapp_link = get_field("footer_whatsapp_link", $page_id);
$footer_instagram_link = get_field("footer_instagram_link", $page_id);
$footer_facebook_link = get_field("footer_facebook_link", $page_id);
$footer_linkedin_link = get_field("footer_linkedin_link", $page_id);
$office_location_url = get_field("office_location_url", $page_id);

?>

    
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        let dropdown = document.querySelector('.js-example-js-example-basic-single');
        
        dropdown.addEventListener('click', function (event) {
            event.stopPropagation(); // Prevent body click event when clicking on dropdown
        });

        document.body.addEventListener('click', function () {
            dropdown.removeAttribute('size'); // Close dropdown
        });
    });
</script>
    
<footer class="footer">
    <div class="container footer-container">
        <div class="footer__top">
            <a href="/" class="main-header-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/img/img_logo.svg" alt="Логотип" width="119" height="119">
            </a>
            <span class="main-text"><?= $logo_description; ?></span>
            <div class="footer__top-phone">
                <a href="tel:<?= $footer_phone_number; ?>"><img src="<?= get_template_directory_uri() ?>/assets/img/phone.svg" alt="phone" width="80" height="80"></a>
                <a class="main-title text--green" href="tel:<?= $footer_phone_number; ?>"><?= $footer_phone_number; ?></a>
            </div>
        </div>
        <div class="footer-middle__list">
            <a class="footer-middle__list-item main-text" href="/buy/">
                Buy
            </a>
            <a class="footer-middle__list-item main-text" href="/rent/">
                Rent
            </a>
            <a class="footer-middle__list-item main-text" href="/sell/">
                Sell
            </a>
            <a class="footer-middle__list-item main-text" href="/offplan/">
                Off-Plan
            </a>
            <a class="footer-middle__list-item main-text" href="/about/">
                About us
            </a>
            <a class="footer-middle__list-item main-text" href="/developers/">
                Developers
            </a>
            <a class="footer-middle__list-item main-text" href="/vacancies/">
                Vacancies
            </a>
            <a class="footer-middle__list-item main-text" href="/news/">
                Blog
            </a>
            <a class="footer-middle__list-item main-text" href="/contacts/">
                Contact us
            </a>
        </div>
        <div class="footer-bottom">
            <span class="footer-bottom__title">Contact information</span>
            <div class="footer-bottom__info">
                <div class="footer-bottom__location">
                    <span class="section-subtitle">Location</span>
                    <span class="base-text"><a target="_blank" href="<?= $office_location_url; ?>"><?= $footer_location; ?></a</span>
                </div>
                <div class="footer-bottom__email">
                    <span class="section-subtitle">E-mail</span>
                    <a href="mailto:<?= $footer_email; ?>" class="base-text"><?= $footer_email; ?></a>
                </div>
            </div>
            <div class="footer-bottom__social">
                <a href="<?= $footer_whatsapp_link; ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icon_whatsapp.svg" alt="intro_whatsapp" width="36" height="36">
                </a>
                <a href="<?= $footer_instagram_link; ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icon_inst.svg" alt="icon_inst" width="36" height="36">
                </a>
                <a href="<?= $footer_facebook_link; ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icon_fb.svg" alt="icon_fb" width="36" height="36">
                </a>
                <a href="<?= $footer_linkedin_link; ?>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/icon_linkedin.svg" alt="icon_linkedin" width="36" height="36">
                </a>
                <a href="https://www.tiktok.com/@lvgrealestate?_t=8louq6SYRVo&_r=1>">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/mage_tiktok-circle-blue.svg" alt="icon_tiktok" width="36" height="36">
                </a>
            </div>
        </div>
    </div>
    <div class="footer-info">
        <div class="container footer-info-container">
            <span class="main-text text--white">© 2024</span>
            <span class="main-text text--white">Designed and developed by <span
                        class="main-text text--white text--underline"><a target="_blank" href="https://uniondesign.ae/">Union Design</a></span></span>
            <a href="https://lvgrealestatedubai.com/privacy-policy/" class="main-text text--white">Privacy Policy</a>
        </div>
    </div>
</footer><!-- #colophon -->
<!--</div> #page -->

<div class="lw-modal-overlay">
    <div class="lw-modal" id="lw-ok-modal">
        <span class="lw-modal__title base-title">Thank you!</span>
        <div class="close-modal-btn">
            <img src="<?= get_template_directory_uri() ?>/assets/img/off_plan/icon_close.svg" alt="settings" width="40" height="40">
        </div>
        <span class="lw-modal__subtitle main-text">
        We have received your request. One of our representative will contact you shortly.
      </span>
        <button class="lw-form__check-btn">
            <img class="lw-modal__check-icon" src="<?= get_template_directory_uri() ?>/assets/img/off_plan/icon_check.svg" alt="photo"
                 width="163" height="163">
        </button>
    </div>
</div>
<script>
// jQuery(document).ready(function($) {
//     $('.language-btn').on('click', function() {
//         var translatorButtons = $('#flags a');
//         var currentLanguage = $(this).text().trim().toLowerCase();
//         var languageButton;
//         if (currentLanguage === 'eng') {
//             languageButton = translatorButtons.filter('.en');
//         } else if (currentLanguage === 'rus') {
//             languageButton = translatorButtons.filter('.ru');
//         }
//         languageButton.trigger('click');
//         googleTranslateElementInit();
//         $(this).text(currentLanguage === 'eng' ? 'rus' : 'eng');
//     });
// });


jQuery(document).ready(function($) {
    let currentUrl = window.location.href;
    let homePageUrl = window.location.origin + '/'; // Assuming home page is the root of the domain
    let buyPageUrl = window.location.origin + '/buy/'; // Assuming home page is the root of the domain
    let sellPageUrl = window.location.origin + '/sell/'; // Assuming home page is the root of the domain


    $('.language-btn.eng').on('click', function() {
        $(this).addClass('hide')
        $('.language-btn.ru').removeClass('hide')
        $('#flags .en').click();  

        $('#menu-item-23 a').text('Off-Plan')
        $('#menu-item-24 a').text('Sell')
        if (currentUrl === homePageUrl) {
            $('#gld_btn').text('Find your property')
            $('#slv_btn').text('List your property')
            $('#title_main_h1 h1').text('Welcome to the future of real estate')
            $('#prim').text('Primary')
            $('#seco').text('Secondary')
            $('#primMob').text('Primary')
            $('#secoMob').text('Secondary')
            $('#offplan_mainp').text('Off-Plan Projects')
            $('#cntct_us').text('Contact Us')
            $('#cntc_small').text('We are here to assist you with your real estate needs. Leave your details below, and one of our dedicated team members will get in touch with you promptly')
            $('#loc_add').text('Our Office Location')
            $('#loc_text').text('Office 704, Thuraya Tower, Al Barsha South (TECOM), Dubai UAE')

            console.log("This is the home page");
        }
        if (currentUrl === buyPageUrl) {
            $('#cat_res').text('Residential')
            $('#cat_res_desc').text('Residential')
            $('#cat_com').text('Commercial')  
            $('#cat_com_desc').text('Commercial')  
            $('#status_pr').text('Primary')  
            $('#status_pr_desc').text('Primary')  
            $('#status_sc').text('Secondary')  
            $('#status_sc_desc').text('Secondary')  
            $('#consul').text('Prompt consultation')  
            $('#consl_desc').text('Please leave your contact details and we will contact you shortly.')  
            console.log('buy');

        }
        if (currentUrl === sellPageUrl) {
            $('#sell_title').text('Sell')
            $('#sell_a').text('List your property')
            $('#sell_cont_title').text('List your Property')
            $('#sell_btn_sub').text('Submit')

        }
    });
    $('.language-btn.ru').on('click', function() {
        $(this).addClass('hide')
        $('.language-btn.eng').removeClass('hide')
        $('#flags .ru').click()


        $('#menu-item-23 a').text('Новостройки')
        $('#menu-item-24 a').text('Продажа')

        if (currentUrl === homePageUrl) {
            $('#gld_btn').text('Купить Недвижимость')
            $('#slv_btn').text('Продать Недвижимость')
        
            $('#title_main_h1 h1').text('Добро Пожаловать в Недвижимость будущего')
            $('#prim').text('Первичная')
            $('#seco').text('Вторичная')
            $('#primMob').text('Первичная')
            $('#secoMob').text('Вторичная')
            $('#offplan_mainp').text('Проекты от Застройщиков')
            $('#cntct_us').text('Свяжитесь с нами')
            $('#cntc_small').text('Мы поможем с подбором недвижимости,управлением и перепродажей. Оставьте свои контактные данные ниже, наши специалисты свяжутся с вами.')
            $('#loc_add').text('Наш Адрес')
            $('#loc_text').text('Офис 704, Thuraya Telecommunications Tower, Al Barsha Heights, Дубай, ОАЭ')

            console.log("это главная");
        }
        if (currentUrl === buyPageUrl) {
            console.log('купить');
            $('#cat_res').text('Жилая')
            $('#cat_res_desc').text('Жилая')
            $('#cat_com').text('Коммерческая')  
            $('#cat_com_desc').text('Коммерческая')  
            $('#status_pr').text('Первичная')  
            $('#status_pr_desc').text('Первичная')  
            $('#status_sc').text('Вторичная')  
            $('#status_sc_desc').text('Вторичная')  
            $('#consul').text('БЫСТРАЯ КОНСУЛЬТАЦИЯ')  
            $('#consl_desc').text('Заполните форму и наш агент свяжется с вами в ближайшее время.')  
        }
        if (currentUrl === sellPageUrl) {
            $('#sell_title').text('Продать')
            $('#sell_a').text('Получить Консультацию')
            $('#sell_cont_title').text('Получить Консультацию')
            $('#sell_btn_sub').text('Отправить запрос')
        }

       
        // $(this).text(currentLanguage === 'eng' ? 'rus' : 'eng');
    });
});

</script>


<?php  }
wp_reset_postdata(); // сброс
?>
<?php wp_footer(); ?>

</body>
</html>
