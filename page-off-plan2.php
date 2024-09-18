<?php get_header(''); ?>

    <section class=" hero hero-off_plan">
        <div class="container hero-container">
            <div class="hero__content">
                <h1>Off-plan</h1>
                <span class="main-text text--white hero__content-desc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing
          elit. Lorem ipsum dolor sit amet,
        </span>
            </div>
        </div>
    </section>

    <section class="product">
        <div class="container">
            <div class="off_plan__filteres-header">
                <button class="product__filters-item product__filters-filter product-off_plan__filter-btn main-text text--medium text--uppercase">
                    hide
                </button>
                <span class="product__filters-objects product__filters-objects-tablet section-subtitle text--bold text--uppercase text--green">
        Found <span>100</span> properties
    </span>
            </div>
            <div class="product-off_plan__list">
                <select class="js-example-js-example-basic-single" name="states[]" multiple="multiple" data-placeholder="All types">
                    <option value="All types">All types</option>
                    <option value="types">types</option>
                </select>
                <select class="js-example-js-example-basic-single" name="states[]" multiple="multiple" data-placeholder="Developer">
                    <option value="All types">All types</option>
                    <option value="types">types</option>
                </select>
                <select class="js-example-js-example-basic-single" name="states[]" multiple="multiple" data-placeholder="Projects">
                    <option value="All types">All types</option>
                    <option value="types">types</option>
                </select>
                <select class="js-example-js-example-basic-single" name="states[]" multiple="multiple" data-placeholder="Completion Status">
                    <option value="All">All</option>
                    <option value="Completeds">Completeds</option>
                    <option value="Under construction">Under construction</option>
                </select>
                <select class="js-example-js-example-basic-single" name="states[]" multiple="multiple" data-placeholder="Property type">
                    <option value="All">All</option>
                    <option value="Property type">Property type</option>
                    <option value="Penthouse">Penthouse</option>
                    <option value="Townhouse">Townhouse</option>
                    <option value="Duplex">Duplex</option>
                    <option value="Villa">Villa</option>
                </select>

                <button class="product__filters-item product__filters-reset off_plan__filter-reset-tablet main-text text--medium text--uppercase">
                    reset all filters
                </button>
            </div>
            <div class="product__filters">
                <button class="product__filters-item product__filters-reset off_plan__filter-reset product__filters-filter-dekstop main-text text--medium text--uppercase">
                    reset all filters
                </button>
                <span class="product__filters-objects product__filters-objects-decktop section-subtitle text--bold text--uppercase text--green">
            Found <span>100</span> properties
        </span>
            </div>
            <div class="product__grid">
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">Madinat Jumeirah Living</span>
                        <span class="main-text text--green product-card__location">Umm Suqeim — Umm Suqeim 3, Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">DAMAC Casa</span>
                        <span class="main-text text--green product-card__location">Palm Jumeirah 1, Al Sufouh, Dubai
              Media City, Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price ">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">Sobha Hartland II</span>
                        <span class="main-text text--green product-card__location">58GG+6MX — Bukadra, Nad Al Sheba 1,
              Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">Madinat Jumeirah Living</span>
                        <span class="main-text text--green product-card__location">Umm Suqeim — Umm Suqeim 3, Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">DAMAC Casa</span>
                        <span class="main-text text--green product-card__location">Palm Jumeirah 1, Al Sufouh, Dubai
              Media City, Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">Sobha Hartland II</span>
                        <span class="main-text text--green product-card__location">58GG+6MX — Bukadra, Nad Al Sheba 1,
              Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price ">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">Madinat Jumeirah Living</span>
                        <span class="main-text text--green product-card__location">Umm Suqeim — Umm Suqeim 3, Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">DAMAC Casa</span>
                        <span class="main-text text--green product-card__location">Palm Jumeirah 1, Al Sufouh, Dubai
              Media City, Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
                <a href="#" class="product-card">
                    <img src="<?= get_template_directory_uri() ?>/assets/img/img_card.png" alt="img_card" width="470" height="305">
                    <div class="product-card__content">
                        <small class="base-text text--opacity">Penthouse</small>
                        <span class="section-subtitle text--uppercase text--medium">Sobha Hartland II</span>
                        <span class="main-text text--green product-card__location">58GG+6MX — Bukadra, Nad Al Sheba 1,
              Dubai</span>
                        <div class="product-card__footer product-card__footer--alt margin-top--auto">
                            <span class="product-card__footer-price">from 1,8M AED</span>
                        </div>
                        <button type="button"
                                class="product-card__download main-text--lg text--green text--underline text--semibold"
                                data-modal-id="lw-confirm-modal">
                            Download catalogue
                        </button>
                    </div>
                </a>
            </div>
            <button class="product-card__btn main-text--lg text--semibold text--uppercase text--green text--underline">Show
                more</button>
        </div>
    </section>

    <section class="section contacts" id="contacts">
        <?php get_template_part('/template-parts/tempparts') ?>
        <div class="container contacts-container">
            <img class="contacts__img" src="<?= get_template_directory_uri() ?>/assets/img/off_plan/contacts_img.png" alt="contacts_img" width="1440" height="700">
        </div>
    </section>

<?php get_footer(''); ?>