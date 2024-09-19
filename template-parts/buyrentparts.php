        <div class="container hero-container">
            <div class="hero__content">
                <?php
                global $post;
                $page_id = $post -> ID; 
                $main_title = get_field("main_title", $page_id);
                $main_description_buy_rent = get_field("main_description_buy_rent", $page_id); 
                ?>
                <h1><?= $main_title; ?></h1>
                <span class="main-text text--white hero__content-desc"> 
                    <?= $main_description_buy_rent; ?>
                </span>
                <ul class="hero__list-ul hero__list--dekstop">
                    <li class="hero__list-item main-text text--white hero__list-item-select">
                        <span class="hero__list-item-title">Category</span>
                        <select class="js-example-basic-single filter__btns-select-category" name="state">
                            <option value="all" data-status="all"  class="filter__btns-btn-status active">All</option>
                            <option value="residental" data-category="residental" class="filter__btns-btn-category">Residential</option>
                            <option value="commercial" data-category="commercial" class="filter__btns-btn-category">Commercial</option>
                        </select>
                    </li>
                    <li class="hero__list-item main-text text--white hero__list-item-select">
                        <span class="hero__list-item-title">Property status</span>
                        <select class="js-example-js-example-basic-single filter__btns-btn-status-page active-desc" name="states[]" multiple="multiple" data-placeholder="All">
                            <option value="all" data-status="all" data-all class="filter__btns-btn-status active">All</option>
                            <option value="primary" data-status="primary"  class="filter__btns-btn-status">Primary</option>
                            <option value="secondary" data-status="secondary"  class="filter__btns-btn-status">Secondary</option>
                        </select>
                    </li>
                    <li class="hero__list-item main-text text--white hero__list-item-select select-residential active">
                        <span class="hero__list-item-title">Property type</span>
                        <select class="js-example-js-example-basic-single filter__btns-type" data-placeholder="Apartment">
                            <option value="all" >All</option>
                            <option value="appartment">Apartment</option>
                            <option value="villa">Villa</option>
                            <option value="townhouse">Townhouse</option>
                            <option value="penthouse">Penthouse</option>
                            <option value="duplex">Duplex</option>
                            <option value="land">Land</option>
                            <option value="whole building">Whole Building</option>
                            <option value="full floor">Full Floor</option>
                            <option value="half floor">Half Floor</option>
                        </select>
                    </li>
                    <li class="hero__list-item main-text text--white hero__list-item-select select-сommercial">
                        <span class="hero__list-item-title">Property type</span>
                        <select class="js-example-js-example-basic-single filter__btns-type_second"data-placeholder="office">
                            <option value="all" >All</option>
                            <option value="office space ">Office Space</option>
                            <option value="rentail">Retail</option>
                            <option value="warehouse">Warehouse</option>
                            <option value="shop">Shop</option>
                            <option value="villa">Villa</option>
                            <option value="show room">Show Room</option>
                            <option value="whole building">Whole Building</option>
                            <option value="full floor">Full Floor</option>
                            <option value="half floor">Half Floor</option>
                            <option value="land">Land</option>
                            <option value="business centre">Business Centre</option>
                            <option value="co working space">Co-working Space</option>
                        </select>
                    </li>
                    <li class="hero__list-item main-text text--white hero__list-item-select">
                        <span class="hero__list-item-title">Bedrooms</span>
                        <select class="js-example-js-example-basic-single filter__btns-rooms" name="states[]" multiple="multiple" data-placeholder="All types">
                            <option value="1" data-all>All types</option>
                            <option value="Studio">Studio</option>
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
                    <li class="hero__list-item--alt-minmax hero__list-item--alt-input main-text-liel text--white">
                        <span>Price</span>
                        <div class="hero__list-item-price">
                            <span>MIN</span>
                            <input type="number" class="min_price" value="">
                            <span class="text--opacity">AED</span>
                        </div>
                    </li>
                    <li class="hero__list-item--alt-minmax hero__list-item--alt-input main-text-liel text--white">
                        <span></span>
                        <div class="hero__list-item-price">
                            <span>MAX</span>
                            <input type="number" class="max_price" value="">
                            <span class="text--opacity">AED</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


<section class="section--margin-bottom product">
    <div class="container">

        <div class="hero__content">
            <ul class="hero__list hero__list--alt">
                <li class="hero__list-item main-text hero__list-item-select hero__list-item-select--alt">
                    <span class="hero__list-item-title">Category</span>
                    <select class="js-example-basic-single filter__btns-select-category_mob" name="state">
						<option value="all">All</option>
                        <option value="residentail">Residential</option>
                        <option value="commercial">Commercial</option>
                    </select>
                </li>
                <li class="hero__list-item main-text hero__list-item-select hero__list-item-select--alt">
                    <span class="hero__list-item-title">Property status</span>
                    <select class="js-example-js-example-basic-single filter__btns-select-status" name="states[]" multiple="multiple" data-placeholder="Primary">
                        <option value="all" data-all>All</option>
                        <option value="primary">Primary</option>
                        <option value="secondary">Secondary</option>
                    </select>
                </li>
                <li class="hero__list-item main-text hero__list-item-select hero__list-item-select--alt select-residential active select-stype" >
                    <span class="hero__list-item-title">Property type</span>
                    <select class="js-example-js-example-basic-single filter__btns-type_mob" data-placeholder="Apartment">
                            <option value="all">All</option>
                            <option value="appartment">Apartment</option>
                            <option value="villa">Villa</option>
                            <option value="townhouse">Townhouse</option>
                            <option value="penthouse">Penthouse</option>
                            <option value="duplex">Duplex</option>
                            <option value="land">Land</option>
                            <option value="whole building">Whole Building</option>
                            <option value="full floor">Full Floor</option>
                            <option value="half floor">Half Floor</option>
                    </select>
                </li>
                <li class="hero__list-item main-text hero__list-item-select hero__list-item-select--alt select-сommercial select-stype">
                    <span class="hero__list-item-title">Property type</span>
                    <select class="js-example-js-example-basic-single filter__btns-type_mob" data-placeholder="office">
                            <option value="all" data-all>All</option>
                            <option value="office space ">Office Space</option>
                            <option value="rentail">Retail</option>
                            <option value="warehouse">Warehouse</option>
                            <option value="shop">Shop</option>
                            <option value="villa">Villa</option>
                            <option value="show room">Show Room</option>
                            <option value="whole building">Whole Building</option>
                            <option value="full floor">Full Floor</option>
                            <option value="half floor">Half Floor</option>
                            <option value="land">Land</option>
                            <option value="business centre">Business Centre</option>
                            <option value="co working space">Co-working Space</option>
                    </select>
                </li>
                <li class="hero__list-item main-text hero__list-item-select hero__list-item-select--alt">
                    <span class="hero__list-item-title">Bedrooms</span>
                    <select class="js-example-js-example-basic-single select-bedrooms" name="states[]" multiple="multiple" data-placeholder="All types">
                            <option value="1" data-all>All types</option>
                            <option value="Studio">Studio</option>
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
                <li class="hero__list-item--alt main-text-liel">
                    <span class="price-title">Price</span>
                    <div class="hero__list-item-price hero__list-item-price--alt dropdown--alt">
                        <span>MIN</span>
                        <input type="number" class='min_price_mob'>
                        <span class="text--opacity">AED</span>
                    </div>
                </li>
                <li class="hero__list-item--alt main-text-liel">
                    <span class="price-title"></span>
                    <div class="hero__list-item-price hero__list-item-price--alt dropdown--alt">
                        <span>MAX</span>
                        <input type="number" class='max_price_mob'>
                        <span class="text--opacity">AED</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="off_plan__filteres-header">
            <button class="product__filters-item product__filters-filter product-off_plan__filter-btn main-text text--medium text--uppercase">
                Filter
            </button>
        </div>
        <div class="amenities__group active tablet-active">
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
                    <!--<button type="button" class="product__btns-btn active">Built in Wardrobes</button>-->
                    <!--<button type="button" class="product__btns-btn">Central air condition</button>-->
                    <!--<button type="button" class="product__btns-btn">Covered parking</button>-->
                    <!--<button type="button" class="product__btns-btn">Shared swimming pool</button>-->
                    <!--<button type="button" class="product__btns-btn">Sea/Water view</button>-->
                    <!--<button type="button" class="product__btns-btn">Maintenance</button>-->
                    <!--<button type="button" class="product__btns-btn">Beachfront</button>-->
                    <!--<button type="button" class="product__btns-btn">Maids room</button>-->
                    <!--<button type="button" class="product__btns-btn">Shared gym</button>-->
                    <!--<button type="button" class="product__btns-btn">Balcony</button>-->
                    <!--<button type="button" class="product__btns-btn">Near public transportation</button>-->
                    <!--<button type="button" class="product__btns-btn">Concierge Service</button>-->
                    <!--<button type="button" class="product__btns-btn">Pets allowed</button>-->
                    <!--<button type="button" class="product__btns-btn">Gym</button>-->
                    <!--<button type="button" class="product__btns-btn">Shared spa</button>-->
                    <!--<button type="button" class="product__btns-btn">Study</button>-->
                    <!--<button type="button" class="product__btns-btn">Private garden</button>-->
                    <!--<button type="button" class="product__btns-btn">Private pool</button>-->
                    <!--<button type="button" class="product__btns-btn">Private gym</button>-->
                    <!--<button type="button" class="product__btns-btn">Private jacuzzi</button>-->
                    <!--<button type="button" class="product__btns-btn">Walk in closet</button>-->
                    <!--<button type="button" class="product__btns-btn">Maid services</button>-->
                    <!--<button type="button" class="product__btns-btn">Children’s play area</button>-->
                    <!--<button type="button" class="product__btns-btn">Children’s pool</button>-->
                </div>
            </div>
        </div>

        <div class="product__filters">
            <button class="product__filters-item product__filters-filter product__filters-filter-dekstop main-text text--medium text--uppercase active">
                Show all filters
            </button>
            <button class="product__filters-item product__filters-reset off_plan__filter-reset product__filters-filter-dekstop main-text text--medium text--uppercase">
                reset all filters
            </button>
                <span class="product-count text--uppercase text--bold text--green margin-left">Found 10 results</span>
        </div>