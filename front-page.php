<?php

global $post;
$page_id = $post -> ID;
$about_us_photo = get_field("about_us_photo", $page_id);
$about_us_subtitle_1 = get_field("about_us_subtitle_1", $page_id);
$about_us_description_1 = get_field("about_us_description_1", $page_id);
$about_us_subtitle_2 = get_field("about_us_subtitle_2", $page_id);
$about_us_description_2 = get_field("about_us_description_2", $page_id);
$about_us_subtitle_3 = get_field("about_us_subtitle_3", $page_id);
$about_us_description_3 = get_field("about_us_description_3", $page_id);
$about_us_subtitle_4 = get_field("about_us_subtitle_4", $page_id);
$about_us_description_4 = get_field("about_us_description_4", $page_id);
$about_us_title = get_field("about_us_title", $page_id);
$about_us_photo_2 = get_field("about_us_photo_2", $page_id);
$about_us_text = get_field("about_us_text", $page_id);

get_header('');
?>

<style>
  @media (max-width: 1240px) {
    .hero__list {
       justify-content: flex-start;
    }
  }
    @media (max-width: 768px) {
        .about-grid__fields-grid-index {
            grid-template-columns: repeat(1, 1fr);
        }
    
    }
</style>
<section class="hero-index">
    <div class="slider-for-index">
        <div class="slider-for__slide">
            <!-- <img src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main.png" alt="Image 1" width="1920" height="900"> -->
            <picture>
                <source type="image/png" media="(max-width: 543px)" srcset="<?= get_template_directory_uri() ?>/assets/img/main_img_mobile_2.png">
                <source type="image/png" media="(max-width: 1920px)" srcset="<?= get_template_directory_uri() ?>/assets/img/img_bg_main.png">
                <img fetchpriority="high" src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main.png" alt="Баннер" width="1920" height="900">
            </picture>
        </div>
        <div class="slider-for__slide">

            <picture>
                <source type="image/png" media="(max-width: 543px)" srcset="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_2.png">
                <source type="image/png" media="(max-width: 1920px)" srcset="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_2.png">
                <img fetchpriority="high" src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_2.png" alt="Image 2" width="1920" height="900">
            </picture>
        </div>
        <div class="slider-for__slide">

            <picture>
                <source type="image/png" media="(max-width: 543px)" srcset="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_3.png">
                <source type="image/png" media="(max-width: 1920px)" srcset="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_3.png">
                <img fetchpriority="high" src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_3.png" alt="Image 3" width="1920" height="900">
            </picture>
        </div>
        <div class="slider-for__slide">
            <picture>
                <source type="image/png" media="(max-width: 543px)" srcset="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_4.png">
                <source type="image/png" media="(max-width: 1920px)" srcset="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_4.png">
                <img fetchpriority="high" src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_4.png" alt="Image 3" width="1920" height="900">
            </picture>
        </div>
    </div>

    <div class="slider-nav-index">
        <div class="slider-nav-index__slide"><img src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main.png" alt="Thumb 1" width="346" height="208"></div>
        <div class="slider-nav-index__slide"><img src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_2.png" alt="Thumb 2" width="346" height="208">
        </div>
        <div class="slider-nav-index__slide"><img src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_3.png" alt="Thumb 3" width="346" height="208">
        </div>
        <div class="slider-nav-index__slide"><img src="<?= get_template_directory_uri() ?>/assets/img/img_bg_main_4.png" alt="Thumb 3" width="346" height="208">
        </div>
    </div>
    <div class="hero-index-container">
        <div class="hero-index-container__content ">
            <h1>Welcome to the future of real estate</h1>
            <span class="main-text text--white">
            Experience innovation, integrity, and excellence with LVG Real Estate
        </span>
            <div class="hero-btns-group">
                <a href="#property_search" onclick="goToLink(event, '#property_search')" class="main-btn text--semibold yak_1">Find your property</a>
                <a href="/sell#list_your_property"  onclick="goToLink(event, '/sell#list_your_property')" class="main-btn text--semibold yak_2">List your property</a>
            </div>
        </div>
    </div>
</section>

<section class="section intro" id="property_search">
    <div class="container intro-container">
        <div class="chape-header">
            <h2 class="main-title">Property Search</h2>
            <div class="chape-header-btns">
                <button type="button"  data-post-type="buy" class="filter__btns-btn change_post_type  active">Buy</button>
                <button type="button"  data-post-type="rent" class="filter__btns-btn change_post_type">Rent</button>
            </div>
        </div>
        <div class="hero__content">
            <ul class="hero__list hero__list-mobile--alt">
                <li class="hero__list-item main-text text--white hero__list-item-mobile">
                    <span class="main-text cstm-h">Category</span>
                    <div>
                        <button type="button" data-category="all" class="filter__btns-btn-category all active">All</button>
                        <button type="button" data-category="RS" class="filter__btns-btn-category res">Residential</button>
                        <button type="button" data-category="RR" class="filter__btns-btn-category com">Commercial</button>
                    </div>
                </li>
                <li class="hero__list-item main-text hero__list-item-mobile">
                    <span class="main-text cstm-h">Property status</span>
                    <div>
                        <button type="button" data-status="all"  class="filter__btns-btn-status active">All</button>
                        <button id="prim" type="button" data-status="primary"  class="filter__btns-btn-status">Primary</button>
                        <button id="seco" type="button" data-status="secondary"  class="filter__btns-btn-status">Secondary</button>
                    </div>
                </li>
                <li class="hero__list-item main-text dropdown-mobile hero__list-item-select hero__list-item-select--alt">
                    <span class="main-text cstm-h">Category</span>
                    <select class="js-example-basic-single filter__btns-select-category filter__btns-select-category_mob" name="state" >
                        <option selected value="all">All</option>
                        <option value="RS">Residential</option>
                        <option value="RR">Commercial</option>
                    </select>
                </li>
                <li class="hero__list-item main-text dropdown-mobile hero__list-item-select">
                    <span class="main-text cstm-h">Property status</span>
                    <select class="js-example-js-example-basic-single filter__btns-select-status" name="states[]" multiple="multiple" data-placeholder="All types">
                        <option selected value="all">All</option>
                        <option id="primMob" value="primary">Primary</option>
                        <option id="secoMob" value="secondary">Secondary</option>
                    </select>
                </li>
                <li class="hero__list-item main-text hero__list-item-select  select-residential active select-stype property-select">
                    <span class="main-text cstm-h">Property type</span>
                    <select class="js-example-js-example-basic-single filter__btns-type" data-placeholder="Property type">
                        <option selected value="all">All</option>
                        <option value="apartment">Apartment</option>
                        <option value="villa">Villa</option>
                        <option value="townhouse">Townhouse</option>
                        <option value="penthouse">Penthouse</option>
                        <option value="duplex">Duplex</option>
                        <option value="land">Land</option>
                        <option value="whole-building">Whole Building</option>
                        <option value="full-floor">Full Floor</option>
                        <option value="half-floor">Half Floor</option>
                    </select>
                </li>
                <li class="hero__list-item main-text hero__list-item-select select-сommercial select-stype property-select">
                    <span class="main-text cstm-h">Property type</span>
                    <select class="js-example-js-example-basic-single filter__btns-type_second" data-placeholder="office">
                        <option selected value="all">All</option>
                        <option value="office-space ">Office Space</option>
                        <option value="rental">Retail</option>
                        <option value="warehouse">Warehouse</option>
                        <option value="shop">Shop</option>
                        <option value="villa">Villa</option>
                        <option value="showroom">Show Room</option>
                        <option value="whilebuilding">Whole Building</option>
                        <option value="full-floor">Full Floor</option>
                        <option value="half-floor">Half Floor</option>
                        <option value="land">Land</option>
                        <option value="business-center">Business Centre</option>
                        <option value="co-working-space">Co-working Space</option>
                    </select>
                </li>
                <li class="hero__list-item main-text hero__list-item-select">
                    <span class="main-text cstm-h">Bedrooms</span>
                    <select class="js-example-js-example-basic-single filter__btns-rooms select-bedrooms" name="states[]" multiple="multiple" data-placeholder="All types">
                        <option selected value="all" data-all >All types</option>
                        <option value="studio">Studio</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="7+">7+</option>
                    </select>
                </li>
                <li class="hero__list-item--alt-minmax main-text-liel ">
                    <span class="main-text cstm-h">Price</span>
                    <div class="minmax-wrapper">
                        <div class="hero__list-item-price hero__list-item-price--alt">
                            <span>MIN</span>
                            <input type="number" class="min_price min_price_mob" >
                            <span class="text--opacity">AED</span>
                        </div>
                        <div class="hero__list-item-price hero__list-item-price--alt ">
                            <span class="">MAX</span>
                            <input type="number" class="max_price max_price_mob" >
                            <span class="text--opacity">AED</span>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
        
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

        <div class="off_plan__filteres-header index-intro__filteres-header ">
            <button class="product__filters-item product__filters-filter product-advanced__filter-btn main-text text--medium text--uppercase btn-open-close-filter">
                Advanced Filter
            </button>
            <button class="product__filters-item product__filters-filter product-off_plan__filter-btn main-text text--medium text--uppercase">
                Advanced Filter
            </button>
            <button class="product__filters-item product__filters-reset off_plan__filter-reset main-text text--medium text--uppercase margin-left reset-btn">
                reset all filters
            </button>
        </div>
        <div class="amenities__group desc-filters-adv active tablet-active">
            <span class="main-text margin-bottom margin-top">Amenities</span>
            <div>
                <div class="product__btns">
                    <?php
                        $tags = get_tags();
                        if ($tags) {
                            foreach ($tags as $tag) {
                                echo '<button class="filter-tag product__btns-btn"  data-tag-id="' . $tag->term_id . '">' . $tag->name . '</button>';
                            }
                        }
                    ?>
                </div>
                <button class="product__filters-item product__filters-reset off_plan__filter-reset-tablet main-text text--medium text--uppercase  reset-btn">
                    reset all filters
                </button>
            </div>
        </div>


        <span class="product-count">Found 10 results</span>
        <div class="intro_slider-wrapper">
            <div id="post-container" data-type="buy" class="intro_slider_index">
           

            </div>
        </div>
    </div>
</section>

<section class="section about">
    <div class="container">
        <div class="about-grid">
            <div class="about-grid__fields order_2">
                <img class="about-grid__fields-left-img order_2" src="<?= $about_us_photo; ?>" alt="img_about1" width="608" height="660">
                <div class="about-grid__fields-grid-index order_1">
                    <div class="about-grid__fields-grid-item">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1012 0.103621C19.8739 0.158652 19.434 0.329923 19.1236 0.484231C18.0962 0.994994 17.3838 1.71947 16.8801 2.76539C16.5303 3.49198 16.4085 4.00665 16.4085 4.75873C16.4085 5.5108 16.5303 6.02547 16.8801 6.75207C17.3972 7.82589 18.1105 8.53888 19.1849 9.05574C19.9118 9.40539 20.4267 9.5271 21.1791 9.5271C21.9354 9.5271 22.4454 9.40547 23.2004 9.04519C24.4148 8.46563 25.378 7.28761 25.7153 5.9695C26.2801 3.76229 25.2148 1.43361 23.2004 0.472271C22.8415 0.301 22.3612 0.12246 22.1333 0.0755574C21.5923 -0.0356786 20.6214 -0.0222334 20.1012 0.103621ZM15.5276 9.95469C15.0431 10.5717 14.5772 11.4828 14.3271 12.3021C14.1281 12.9546 14.1121 13.1088 14.107 14.4261C14.1018 15.7444 14.1131 15.8625 14.2634 16.0677C14.3525 16.1893 14.546 16.3503 14.6935 16.4255C14.9421 16.5522 15.4124 16.5622 21.14 16.5622C26.8676 16.5622 27.3379 16.5522 27.5865 16.4255C27.734 16.3503 27.9276 16.1893 28.0166 16.0677C28.167 15.8625 28.1782 15.7444 28.1731 14.4261C28.168 13.1101 28.1519 12.9542 27.9538 12.306C27.6963 11.4631 27.2508 10.5866 26.768 9.97338L26.4116 9.52062L25.9265 9.96196C23.1581 12.4804 19.0914 12.4624 16.3076 9.91928L15.8696 9.51921L15.5276 9.95469ZM13.6713 18.4874C11.3165 18.73 9.7583 19.4631 7.64938 21.3205C7.28377 21.6425 6.97595 21.9261 6.96539 21.9506C6.95483 21.9751 8.43974 24.994 10.2652 28.6592L13.5842 35.3232H20.6519C25.2459 35.3232 27.8822 35.2945 28.1838 35.2411C29.757 34.9626 31.3073 34.1057 32.297 32.9677C32.7723 32.4212 39.5179 22.7981 39.8065 22.2548C40.064 21.7699 40.0646 20.7362 39.8075 20.2524C39.5479 19.7638 39.1537 19.3593 38.7232 19.1394C38.4079 18.9785 38.2356 18.9469 37.6807 18.9485C37.1119 18.95 36.9574 18.9809 36.6103 19.1623C36.141 19.4074 36.2347 19.2991 32.3645 24.0667C30.8463 25.937 29.5297 27.5312 29.4388 27.6094C29.3479 27.6877 29.0447 27.8636 28.7652 28.0003L28.2568 28.2488H25.1148C22.0634 28.2488 21.9666 28.2442 21.7568 28.0877C21.369 27.7984 21.2272 27.5381 21.2272 27.1154C21.2272 26.6928 21.3688 26.4326 21.7565 26.1431C21.9628 25.9889 22.0979 25.9802 24.8408 25.9428C27.6302 25.9048 27.7184 25.8989 28.0396 25.7274C28.538 25.4612 28.9085 25.102 29.1405 24.6601C29.3194 24.3195 29.3495 24.1665 29.3495 23.5977C29.3495 23.029 29.3194 22.876 29.1405 22.5354C28.9085 22.0934 28.538 21.7342 28.0396 21.4681C27.7142 21.2943 27.6573 21.2912 24.151 21.2526C21.3035 21.2214 20.5535 21.1917 20.3971 21.1042C20.2895 21.0441 19.9273 20.7672 19.5922 20.4889C18.4544 19.5442 17.1615 18.9023 15.8637 18.6378C15.3084 18.5246 14.1092 18.4423 13.6713 18.4874ZM2.82498 22.716C2.6878 22.733 2.08389 22.9902 1.4828 23.2874C0.263633 23.8902 0.0615472 24.0811 0.00351789 24.6848C-0.0301109 25.0346 0.107611 25.3264 3.61009 32.3278C7.57892 40.2614 7.38239 39.9266 8.10908 39.9934C8.42981 40.0228 8.58606 39.9694 9.49545 39.5195C10.6668 38.9399 10.967 38.7064 11.2902 38.1232C11.4958 37.7521 11.5206 37.6342 11.5206 37.0263V36.3452L8.3742 30.0514C6.25285 25.8081 5.13598 23.656 4.9457 23.4455C4.46403 22.9126 3.60822 22.6183 2.82498 22.716Z" fill="#7AC5CD"/>
                        </svg>

                        <span class="section-title"><?= $about_us_subtitle_1; ?></span>
                        <span class="main-text text-opacity"><?= $about_us_description_1 ; ?></span>
                    </div>
                    <div class="about-grid__fields-grid-item">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4_107)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8672 2.19178C18.266 3.39726 17.7674 4.38356 17.7591 4.38356C17.7507 4.38356 16.6672 4.54207 15.3511 4.73581C14.035 4.92955 12.9323 5.08963 12.9008 5.09151C12.8692 5.09339 13.6488 5.87843 14.6333 6.83609L16.4232 8.57714L16.0105 10.9829C15.7835 12.3061 15.6157 13.4067 15.6376 13.4286C15.6595 13.4506 16.6517 12.9552 17.8425 12.3279L20.0076 11.1872L22.1682 12.3263C23.3566 12.9528 24.346 13.4481 24.3671 13.4271C24.388 13.406 24.2196 12.3066 23.9927 10.9839L23.5801 8.57894L25.3685 6.84564L27.157 5.11233L26.8845 5.06168C26.6836 5.02434 22.2928 4.38356 22.2378 4.38356C22.2328 4.38356 21.737 3.39726 21.1359 2.19178C20.5348 0.986301 20.0243 0 20.0015 0C19.9788 0 19.4683 0.986301 18.8672 2.19178ZM6.19371 10.1761C5.59258 11.3816 5.1002 12.3679 5.09957 12.368C4.95844 12.375 0.0154777 13.0834 0.000144327 13.0988C-0.0126074 13.1115 0.82126 13.8921 1.85321 14.8333C2.88516 15.7745 3.73045 16.5647 3.73162 16.5893C3.73287 16.6139 3.55098 17.6996 3.32748 19.002C3.10397 20.3043 2.93976 21.3886 2.96253 21.4114C2.98529 21.4342 3.97828 20.9396 5.16904 20.3123L7.33417 19.1716L9.49476 20.3106C10.6831 20.9371 11.6726 21.4325 11.6936 21.4114C11.7146 21.3904 11.5461 20.2905 11.3191 18.9673L10.9064 16.5615L12.6943 14.829L14.4824 13.0964L14.2105 13.0459C14.01 13.0086 9.61915 12.3679 9.56431 12.3679C9.55938 12.3679 9.06355 11.3816 8.46242 10.1761C7.86129 8.97065 7.35083 7.98434 7.32807 7.98434C7.3053 7.98434 6.79484 8.97065 6.19371 10.1761ZM31.5406 10.1761C30.9395 11.3816 30.4409 12.3679 30.4326 12.3679C30.4242 12.3679 29.3406 12.5264 28.0245 12.7202C26.7085 12.9139 25.6058 13.0738 25.5743 13.0756C25.5427 13.0774 26.3224 13.8621 27.3069 14.8193L29.097 16.5598L28.6841 18.9665C28.457 20.2902 28.2892 21.3911 28.3111 21.413C28.333 21.4349 29.3252 20.9396 30.516 20.3123L32.6811 19.1716L34.8417 20.3106C36.03 20.9371 37.0195 21.4325 37.0405 21.4114C37.0615 21.3904 36.8967 20.3068 36.6743 19.0036C36.4518 17.7004 36.2707 16.6146 36.2717 16.5909C36.2728 16.5672 37.1183 15.7774 38.1507 14.8357C39.1831 13.8941 40.0152 13.111 39.9998 13.0957C39.9794 13.0752 35.0436 12.3679 34.9213 12.3679C34.9109 12.3679 34.4105 11.3816 33.8093 10.1761C33.2082 8.97065 32.6978 7.98434 32.675 7.98434C32.6522 7.98434 32.1418 8.97065 31.5406 10.1761ZM18.7784 16.5502C17.6271 16.8128 16.6988 17.3266 15.8604 18.1656C14.7145 19.3121 14.1369 20.7008 14.1369 22.3092C14.1369 23.9176 14.7145 25.3063 15.8604 26.4528C16.7054 27.2984 17.6605 27.8243 18.7784 28.0598C19.1487 28.1378 19.2137 28.1703 19.0628 28.2023C18.9552 28.225 18.6018 28.2965 18.2775 28.361C15.9712 28.82 13.7453 30.5342 12.6683 32.681C11.93 34.1526 11.7872 34.9851 11.7872 37.8185V40H20.0015H28.2158V37.8185C28.2158 34.9184 28.07 34.1097 27.2684 32.5636C26.1611 30.4282 23.9227 28.748 21.6386 28.3379C20.7009 28.1695 20.7015 28.1699 21.2247 28.0598C22.3425 27.8243 23.2976 27.2984 24.1427 26.4528C25.3739 25.2208 25.9249 23.791 25.8449 22.0352C25.7294 19.5005 24.1411 17.4542 21.6835 16.6738C20.9818 16.451 19.4916 16.3876 18.7784 16.5502ZM7.15455 23.6049C5.08416 24.1072 3.56976 26.0488 3.57414 28.1955C3.57844 30.3204 5.10982 32.2694 7.15455 32.7523C7.63708 32.8662 7.63567 32.8675 6.81956 33.0626C4.86323 33.5304 3.27326 35.0497 2.63161 37.0646C2.49384 37.497 2.44902 37.8642 2.41874 38.8063L2.38049 40H5.90144H9.4224L9.46237 37.593C9.50305 35.1432 9.54045 34.7894 9.87997 33.6395C9.95312 33.3916 9.99317 33.1689 9.96892 33.1447C9.94467 33.1204 9.71013 33.0597 9.44782 33.0099C8.99971 32.9246 8.79936 32.7984 9.11221 32.7984C9.18989 32.7984 9.4698 32.7253 9.73423 32.636L10.2149 32.4736L10.5283 31.8257C10.9792 30.8937 11.556 30.0672 12.3058 29.2788L12.9607 28.5901L12.9595 28.0915C12.9547 26.0076 11.4088 24.0885 9.34213 23.6009C8.73936 23.4587 7.74973 23.4605 7.15455 23.6049ZM30.6239 23.6049C28.594 24.0974 27.0423 26.0477 27.0423 28.107V28.5901L27.6997 29.2813C28.4468 30.0668 29.1074 31.0175 29.5058 31.8802L29.7782 32.4702L30.2639 32.6343C30.531 32.7246 30.8132 32.7984 30.8909 32.7984C31.2037 32.7984 31.0033 32.9246 30.5552 33.0099C30.2929 33.0597 30.0603 33.1186 30.0382 33.1407C30.0161 33.1627 30.0889 33.5262 30.1998 33.9485C30.4891 35.0495 30.5614 35.871 30.5621 38.0626L30.5627 40H34.0927H37.6226L37.5843 38.8063C37.554 37.8642 37.5092 37.497 37.3715 37.0646C36.7298 35.0497 35.1398 33.5304 33.1835 33.0626C32.3675 32.8675 32.3661 32.8662 32.8471 32.7526C34.152 32.4444 35.3049 31.5188 35.9293 30.2781C37.5037 27.1501 35.2033 23.461 31.6971 23.491C31.3529 23.494 30.87 23.5452 30.6239 23.6049Z" fill="#7AC5CD"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_4_107">
                            <rect width="40" height="40" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>

                        <span class="section-title"><?= $about_us_subtitle_2; ?></span>
                        <span class="main-text text-opacity"><?= $about_us_description_2; ?> </span>
                    </div>
                    <div class="about-grid__fields-grid-item">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4_103)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1667 0.133669C18.9604 0.208336 18.6792 0.348755 18.5417 0.445673C17.8766 0.914513 3.68392 12.0385 3.52083 12.2188C3.23625 12.5334 3.28208 12.8322 3.7 13.3878C4.45742 14.3945 4.742 14.6669 5.037 14.6669C5.2715 14.6669 6.31825 13.8777 12.4918 9.04629C16.4419 5.95492 19.7472 3.40238 19.8369 3.37388C19.9266 3.34546 20.0752 3.34596 20.167 3.37513C20.2589 3.4043 23.5651 5.95692 27.5141 9.04754C35.4359 15.2475 34.9795 14.9413 35.49 14.396C35.6295 14.2471 35.9513 13.8501 36.2052 13.5139C36.7213 12.8303 36.7801 12.5522 36.4792 12.2178C36.1362 11.8368 21.4648 0.421172 21.0833 0.238503C20.5831 -0.00108339 19.6757 -0.0506674 19.1667 0.133669ZM26.2046 0.204586C26.0112 0.397922 26 0.461257 26 1.36377V2.31853L29.2292 4.83882C31.0053 6.225 32.5053 7.39544 32.5625 7.43985C32.6455 7.50411 32.6667 6.79684 32.6667 3.96481V0.409089L32.4621 0.204586L32.2576 0H29.3333H26.4091L26.2046 0.204586ZM13.6505 9.77622L7.34267 14.7085L7.338 18.3544L7.33333 22.0003H9H10.6667V19.2959C10.6667 16.4346 10.6878 16.26 11.0548 16.0927C11.3378 15.9638 17.9955 15.9638 18.2786 16.0927C18.3903 16.1436 18.5233 16.2766 18.5742 16.3883C18.6365 16.5251 18.6667 17.5692 18.6667 19.5875C18.6667 21.2354 18.6972 22.5836 18.7344 22.5836C18.7716 22.5836 19.0841 22.8435 19.4287 23.161L20.0553 23.7383L20.625 23.161C20.9383 22.8435 21.2259 22.5836 21.2641 22.5836C21.3022 22.5836 21.3333 21.2354 21.3333 19.5875C21.3333 17.5692 21.3635 16.5251 21.4258 16.3883C21.4767 16.2766 21.6098 16.1436 21.7214 16.0927C22.0045 15.9638 28.6622 15.9638 28.9452 16.0927C29.3122 16.26 29.3333 16.4346 29.3333 19.2959V22.0003H31H32.6667L32.6613 18.3544L32.656 14.7085L26.3612 9.7918C22.8992 7.0876 20.0422 4.86807 20.0124 4.85948C19.9827 4.8509 17.1198 7.06343 13.6505 9.77622ZM12 19.6669V22.0003H14.6667H17.3333V19.6669V17.3336H14.6667H12V19.6669ZM22.6667 19.6669V22.0003H25.3333H28V19.6669V17.3336H25.3333H22.6667V19.6669ZM0.204583 21.5382L0 21.7427V29.0004V36.2581L0.204583 36.4626C0.408 36.6661 0.417833 36.6672 2.06725 36.6672C3.65392 36.6672 3.7375 36.659 4.0065 36.4777C4.16117 36.3735 4.373 36.1617 4.47717 36.007L4.66667 35.7258V29.0004V22.275L4.47717 21.9938C4.373 21.8391 4.16117 21.6273 4.0065 21.5231C3.7375 21.3418 3.65392 21.3336 2.06725 21.3336C0.417833 21.3336 0.408 21.3347 0.204583 21.5382ZM35.9935 21.5231C35.8388 21.6273 35.627 21.8391 35.5228 21.9938L35.3333 22.275V29.0004V35.7258L35.5228 36.007C35.627 36.1617 35.8388 36.3735 35.9935 36.4777C36.2625 36.659 36.3461 36.6672 37.9328 36.6672C39.5822 36.6672 39.592 36.6661 39.7954 36.4626L40 36.2581V29.0004V21.7427L39.7954 21.5382C39.592 21.3347 39.5822 21.3336 37.9328 21.3336C36.3461 21.3336 36.2625 21.3418 35.9935 21.5231ZM6 29.0004V34.6672H7.197C9.59467 34.6672 9.58183 34.6602 12.5437 37.5925C14.0553 39.089 14.9608 39.9251 15.1108 39.9627C15.8802 40.1559 16.6656 39.5726 16.6663 38.8075C16.6667 38.3857 16.5742 38.2262 15.9522 37.5762C15.663 37.274 15.4013 36.9269 15.3707 36.8048C15.266 36.3874 15.7298 35.9355 16.1536 36.0419C16.2863 36.0752 17.0095 36.7265 17.9583 37.6672C18.9633 38.6636 19.627 39.2584 19.7753 39.2956C20.5468 39.4891 21.3323 38.9069 21.333 38.1409C21.3335 37.6904 21.2495 37.5649 20.2922 36.5838C19.8225 36.1026 19.4113 35.6217 19.3783 35.5152C19.2396 35.0681 19.7329 34.5742 20.1813 34.7112C20.2878 34.7437 21.2375 35.6254 22.2917 36.6707C23.5311 37.8995 24.2909 38.5916 24.442 38.6293C24.7448 38.7048 25.2138 38.6268 25.4712 38.4581C25.9242 38.1612 26.1394 37.4284 25.9068 36.9742C25.8555 36.8741 25.2773 36.2484 24.6217 35.5838C23.9323 34.8849 23.4065 34.2821 23.3745 34.1541C23.2674 33.7259 23.72 33.267 24.1453 33.3725C24.2937 33.4092 25.1715 34.2216 26.625 35.6672C28.1028 37.1369 28.9552 37.9248 29.1087 37.9629C29.9748 38.1778 30.7557 37.4771 30.6268 36.6005C30.5704 36.2173 30.4919 36.1311 26.9677 32.5838C24.2275 29.8258 23.3173 28.8591 23.1623 28.5421C23.0501 28.3129 22.9483 28.1091 22.9362 28.0893C22.9239 28.0695 22.1149 28.8468 21.1383 29.8167C19.1023 31.8387 18.9334 31.9505 17.9167 31.9505C17.184 31.9505 16.7068 31.7702 16.1798 31.294C15.6593 30.8238 15.3791 30.1801 15.3821 29.4617C15.3862 28.483 15.5231 28.2757 17.4228 26.3715L19.0894 24.7011L18.4794 24.1096C18.0605 23.7033 17.7659 23.4894 17.5389 23.4263C17.3134 23.3637 15.4268 23.3344 11.6042 23.3342L6 23.3337V29.0004ZM22.3333 23.4661C22.0103 23.6054 16.9833 28.56 16.7857 28.9337C16.6178 29.2512 16.6385 29.7448 16.8329 30.0637C17.1716 30.6192 17.8638 30.8186 18.4644 30.5336C18.6191 30.4602 19.6836 29.4472 20.8299 28.2824C21.9762 27.1176 23.0067 26.1224 23.1199 26.0709C23.5647 25.8682 24 26.2666 24 26.8762C24 27.7517 24.7918 28.817 25.6933 29.1542C26.1082 29.3095 26.3464 29.3337 27.4575 29.3337C28.2348 29.3337 28.8238 29.3709 28.9488 29.4279C29.4116 29.6387 29.4116 30.3621 28.9488 30.5729C28.8352 30.6248 28.3411 30.6671 27.8509 30.6671H26.9597L28.9583 32.6671L30.957 34.6672H32.4785H34V29.0004V23.3337L28.3125 23.3369C23.4288 23.3397 22.5837 23.358 22.3333 23.4661Z" fill="#7AC5CD"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_4_103">
                            <rect width="40" height="40" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>

                        <span class="section-title"><?= $about_us_subtitle_3; ?></span>
                        <span class="main-text text-opacity"><?= $about_us_description_3; ?> </span>
                    </div>
                    <div class="about-grid__fields-grid-item">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.45578 2.14996C1.96527 2.5542 0.718079 3.74228 0.201701 5.24986L0 5.83854V14.6818V23.5251L0.201701 24.1138C0.599955 25.2764 1.40737 26.2377 2.46159 26.8045C3.32946 27.271 3.81033 27.3528 5.68426 27.3528H7.36243L7.38895 30.0146C7.41259 32.3852 7.43231 32.7014 7.56936 32.9049C7.75169 33.1754 8.06829 33.3364 8.4183 33.3364C8.74127 33.3364 8.99086 33.1213 12.3882 29.9148L15.0927 27.3623L23.2095 27.3576C30.1058 27.3535 31.4015 27.3331 31.8252 27.2218C33.3664 26.8169 34.6032 25.654 35.1308 24.1138L35.3325 23.5251V14.6818V5.83854L35.1308 5.24986C34.6032 3.70963 33.3664 2.5468 31.8252 2.14186C31.0858 1.94766 4.17343 1.95523 3.45578 2.14996ZM37.2075 15.0558C37.2072 20.048 37.1737 23.2096 37.1174 23.5691C36.7124 26.1585 35.0726 28.0859 32.5408 28.9486L31.9301 29.1567L23.8745 29.1813L15.8189 29.206L14.3652 30.5718C13.5658 31.3231 12.8986 31.9752 12.8826 32.021C12.8644 32.0731 15.1325 32.106 18.9022 32.1084L24.9509 32.1124L27.6117 34.6215C31.1445 37.9528 31.2006 38 31.6279 38C31.8836 38 32.0435 37.9346 32.2559 37.7433L32.5408 37.4867L32.5662 34.8074L32.5916 32.1281L34.3546 32.0809C36.2791 32.0292 36.6625 31.9557 37.6008 31.4582C38.6862 30.8825 39.6525 29.5741 39.9047 28.3384C39.9696 28.0204 39.9999 25.152 39.9999 19.3156C39.9999 9.89343 40.0201 10.2683 39.4562 9.20128C39.092 8.51203 38.5062 7.8651 37.8708 7.45057C37.5874 7.2657 37.3225 7.11444 37.2819 7.11444C37.2414 7.11444 37.2079 10.688 37.2075 15.0558ZM10.2072 12.5583C11.0791 12.9593 11.5607 13.7148 11.5575 14.6771C11.553 16.0229 10.6171 16.9697 9.29115 16.9697C7.96622 16.9697 7.02672 16.0205 7.02672 14.6818C7.02672 13.739 7.45333 13.028 8.26345 12.6209C8.82537 12.3384 9.66986 12.3113 10.2072 12.5583ZM18.5823 12.5583C19.4543 12.9593 19.9358 13.7148 19.9326 14.6771C19.9282 16.0229 18.9922 16.9697 17.6663 16.9697C16.3413 16.9697 15.4018 16.0205 15.4018 14.6818C15.4018 13.739 15.8284 13.028 16.6386 12.6209C17.2005 12.3384 18.045 12.3113 18.5823 12.5583ZM26.9574 12.5583C27.8294 12.9593 28.311 13.7148 28.3077 14.6771C28.3033 16.0229 27.3674 16.9697 26.0414 16.9697C24.7165 16.9697 23.777 16.0205 23.777 14.6818C23.777 13.739 24.2036 13.028 25.0137 12.6209C25.5756 12.3384 26.4201 12.3113 26.9574 12.5583Z" fill="#7AC5CD"/>
                        </svg>

                        <span class="section-title"><?= $about_us_subtitle_4; ?></span>
                        <span class="main-text text-opacity"><?= $about_us_description_4; ?> </span>
                    </div>
                </div>
            </div>
            <div class="about-grid__fields order_1">
                <a href="/about/" class="main-title"><?= $about_us_title; ?></a>
                <span class="main-text">
                    <?= $about_us_text; ?>
                </span>
                <img class="about-grid__fields-right-img" src="<?= $about_us_photo_2; ?>" alt="img_about1" width="730" height="500">
            </div>
        </div>
    </div>
</section>

<section class="section intro">
    <div class="container intro-container">
        <a href="/offplan/" class="main-title">Off-Plan Projects</a>
        <div class="intro_slider-wrapper intro_slider-wrapper--padding-top">
            <div class="intro_slider_index">

                        <?php

// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'offplan',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;
foreach( $my_posts as $post ){
    setup_postdata( $post );
    $page_id = $post -> ID;
    $location_buy_rent = get_field("location_buy_rent", $page_id);
    $beds = get_field("beds", $page_id);
    $baths = get_field("baths", $page_id);
    $property_area = get_field("property_area", $page_id);
    $buy_rent_price = get_field("buy_rent_price", $page_id);
    ?>
                    <div class="intro_slider-slide-index">
                        <a href="<?php echo get_permalink(); ?>" class="product-card">
                        <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                        <div class="product-card__content">
                            <small class="base-text text-opacity">Penthouse</small>
                            <span class="intro_slider-slide__title"><?php the_title(); ?></span>
                            <span class="main-text text--green product-card__location"><?= $location_buy_rent; ?></span>
                            <div class="product-card__footer">
                                <span class="product-card__footer-price"><?= $buy_rent_price; ?></span>
                            </div>
                        </div>
                                            </a>
                                            </div>
                        <?php  }
wp_reset_postdata(); // сброс
?>

            </div>
        </div>
    </div>
</section>

<section class="section contacts-index">
    <div class="container">
        <div class="contacts__footer contacts-index-container">
            <h2 class="main-title text--white">Contact Us</h2>
            <span class="main-text text--white">
            We're here to assist you with your real estate needs. Leave your details below, and one of our dedicated team members will get in touch with you promptly
        </span>
            <form action="<?php echo site_url();?>/thanks" class="contacts-index__footer formemail ajax-form" id="book_crm_form" method="POST"  enctype="multipart/form-data" >
				<div class="form_fields">
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
                <button type="submit" data-modal-id="lw-ok-modal" class="main-btn">Submit Request</button>
            </form>
        </div>
    </div>
</section>


<section class="section location-index">
    <div class="container">
        <div class="location-index__title-group">
            <h2 class="main-title">Our Office Location</h2>
            <span class="main-text">Office 704, Thuraya Telecommunications Tower, Barsha Heights (TECOM), Dubai, UAE</span>
        </div>
        <div class="location-index-grid">
            <!-- <iframe class="location_iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.119546755036!2d55.153619975208095!3d25.097814277774976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b4164e9f477%3A0x873c65b1c9eb0f7e!2zQ29uY29yZCBUb3dlciAtIEFsIFN1Zm91aCAtIEFsIFN1Zm91aCAyIC0gRHViYWkgLSDQntCx0YrQtdC00LjQvdC10L3QvdGL0LUg0JDRgNCw0LHRgdC60LjQtSDQrdC80LjRgNCw0YLRiw!5e0!3m2!1sru!2skg!4v1712041629893!5m2!1sru!2skg&language=en" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3613.1425350056907!2d55.17149007537854!3d25.097035977775626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDA1JzQ5LjMiTiA1NcKwMTAnMjYuNiJF!5e0!3m2!1sru!2skg!4v1716421569397!5m2!1sru!2skg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <img src="<?= get_template_directory_uri() ?>/assets/img/img_office.png" alt="img_office" width="465" height="550">
        </div>
    </div>
</section>
<script>
    function goToLink(event, url) {
    event.preventDefault(); // Prevent the default action of the link
    window.location.href = url; // Redirect to the specified URL
}

</script>
<?php get_footer(''); ?>
