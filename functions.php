<?php

/**
 * lvg functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lvg
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lvg_setup()
{
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on lvg, use a find and replace
		* to change 'lvg' to the name of your theme in all the template files.
		*/
    load_theme_textdomain('lvg', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
//    add_theme_support('title-tag');

    /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'lvg'),
            'menu-2' => esc_html__('Footer', 'lvg'),
        )
    );

    /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'lvg_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'lvg_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lvg_content_width()
{
    $GLOBALS['content_width'] = apply_filters('lvg_content_width', 640);
}
add_action('after_setup_theme', 'lvg_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lvg_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'lvg'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'lvg'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'lvg_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lvg_scripts()
{
    wp_enqueue_style('fancybox',get_theme_file_uri('assets/css/fancybox.css'), [], '1.0.0');
    wp_enqueue_style('lvg-theme-normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('lvg-theme-style', get_template_directory_uri() . '/assets/css/style.css', [], '1.0.3');
    wp_enqueue_style('lvg-theme-slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('lvg-vars-all-min', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    wp_enqueue_style('lvg-vars-select', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css');

    wp_enqueue_script('fancybox', get_theme_file_uri('assets/js/fancybox.umd.js'), [], '1.0.0');
    wp_enqueue_script('lvg-jqeury', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('lvg-mindall-crm', 'https://cdn.jsdelivr.net/gh/mindallcrm/form-integration/dist/inject.js', array(), '3.0.0', true);
    wp_enqueue_script('lvg-jqeury-min', 'https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js', array(), '3.6.0', true);
    wp_enqueue_script('lvg-jqeury-masked', 'https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js', array(), '3.6.0', true);
    wp_enqueue_script('lvg-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('lvg-script-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true);
    wp_enqueue_script('lvg-script-input', get_template_directory_uri() . '/assets/js/jquery.inputmask.min.js', array(), '1.0', true);
    wp_enqueue_script('lvg-jqeury-select2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array(), '3.6.0', true);
    wp_enqueue_script('lvg-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.3', true);
    wp_enqueue_script('custom-ajax', get_template_directory_uri() . '/assets/js/custom-ajax.js', array('jquery'), null, true);

    // Localize script to pass the AJAX URL to JavaScript
    wp_localize_script('custom-ajax', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'lvg_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

// Custom theme setting

require get_template_directory() . '/inc/setting-page.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

function reg_tag()
{
    register_taxonomy_for_object_type('post_tag', 'buy');
    register_taxonomy_for_object_type('post_tag', 'offplan');
    register_taxonomy_for_object_type('post_tag', 'rent');
}
add_action('init', 'reg_tag');

remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('term_description', 'wp_kses_data');
add_filter('pre_term_description', 'wp_filter_post_kses');
add_filter('term_description', 'wp_kses_post');

// START of custom post type buy START

function theme_buy_register()
{
    $buy_post_labels = array(
        'name' => 'Buys',
        'singular_name' => 'Buy',
        'add_new' => 'Add buy',
        'add_new_item' => 'Adding buy',
        'edit_item' => 'Edit buy',
        'new_item' => 'New buy',
        'view_item' => 'Show buy',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $buy_post_args = array(

        'labels' => $buy_post_labels,
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'gallery', 'tags'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => true,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('buy', $buy_post_args);
}
theme_buy_register();


// function theme_sell_register()
// {
//     $sell_post_labels = array(
//         'name' => 'Sells',
//         'singular_name' => 'Sell',
//         'add_new' => 'Add sell',
//         'add_new_item' => 'Adding sell',
//         'edit_item' => 'Edit sell',
//         'new_item' => 'New sell',
//         'view_item' => 'Show sell',
//         'search_items' => 'Search',
//         'not_found' => 'Not found',
//         'not_found_in_trash' => 'Not found in trash',
//         'parent_item_colon' => '',
//         'dashicons-admin-post' => 'dashicons-layout'
//     );
//     $sell_post_args = array(

//         'labels' => $sell_post_labels,
//         'public' => true,
//         'supports' => ['title', 'editor', 'thumbnail', 'gallery', 'tags'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

//         'hierarchical' => true,

//         'publicly_queryable' => true,
//         'show_in_nav_menus' => false,

//         'public' => true,
//         'publicly_queryable' => true,
//         'show_in_nav_menus' => false,
//         'rewrite' => true,

//         'show_ui' => true,
//         'show_in_menu' => true,
//         'show_in_admin_bar' => true,
//         'menu_position' => 7,
//         'menu_icon' => 'dashicons-list-view',
//         'can_export' => true,
//         'has_archive' => false,
//         'exclude_from_search' => false,
//         'capability_type' => 'post',
//     );
//     // Registering your Custom Post Type
//     register_post_type('sell', $sell_post_args);

// }
// theme_sell_register();

// END of custom post type buy END


// START of custom post type rent START

function theme_rent_register()
{
    $rent_post_labels = array(
        'name' => 'Rents',
        'singular_name' => 'Rent',
        'add_new' => 'Add rent',
        'add_new_item' => 'Adding rent',
        'edit_item' => 'Edit rent',
        'new_item' => 'New rent',
        'view_item' => 'Show rent',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $rent_post_args = array(

        'labels' => $rent_post_labels,
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'tags'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('rent', $rent_post_args);
}
theme_rent_register();

// END of custom post type rent END

// custom post type Tempparts START

function  tempparts_register()
{
    $tempparts_post_labels = array(
        'name' => 'Tempparts',
        'singular_name' => 'Tempparts',
        'add_new' => 'Add tempparts',
        'add_new_item' => 'Adding tempparts',
        'edit_item' => 'Edit tempparts',
        'new_item' => 'New tempparts',
        'view_item' => 'Show tempparts',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $tempparts_post_args = array(

        'labels' => $tempparts_post_labels,
        'public' => true,
        'supports' => ['title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your ze Custom Post Type
    register_post_type('tempparts', $tempparts_post_args);
}
tempparts_register();

// custom post type tempparts END

// custom post type Teammembers START

function  teammembers_register()
{
    $teammembers_post_labels = array(
        'name' => 'Team members',
        'singular_name' => 'Team member',
        'add_new' => 'Add team member',
        'add_new_item' => 'Adding team member',
        'edit_item' => 'Edit team member',
        'new_item' => 'New team member',
        'view_item' => 'Show team member',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $teammembers_post_args = array(

        'labels' => $teammembers_post_labels,
        'public' => true,
        'supports' => ['title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('teammembers', $teammembers_post_args);
}
teammembers_register();

// custom post type teammembers END

// custom post type reviews START

function  reviews_register()
{
    $reviews_post_labels = array(
        'name' => 'Reviews',
        'singular_name' => 'Reviews',
        'add_new' => 'Add review',
        'add_new_item' => 'Adding reviews',
        'edit_item' => 'Edit reviews',
        'new_item' => 'New review',
        'view_item' => 'Show reviews',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $reviews_post_args = array(

        'labels' => $reviews_post_labels,
        'public' => true,
        'supports' => ['title', 'custom-fields'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('reviews', $reviews_post_args);
}
reviews_register();

// custom post type reviews END

// custom post type offplan START

function  theme_offplan_register()
{
    $offplan_post_labels = array(
        'name' => 'off-plan',
        'singular_name' => 'off-plan',
        'add_new' => 'Add off-plan',
        'add_new_item' => 'Adding off-plan',
        'edit_item' => 'Edit off-plan',
        'new_item' => 'New off-plan',
        'view_item' => 'Show off-plan',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $offplan_post_args = array(

        'labels' => $offplan_post_labels,
        'public' => true,
        'supports' => ['title', 'custom-fields', 'thumbnail', 'editor', 'gallery', 'tags'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('offplan', $offplan_post_args);
}
theme_offplan_register();

// custom post type offplan END

// custom post type partners START

function  theme_partners_register()
{
    $partners_post_labels = array(
        'name' => 'Partners',
        'singular_name' => 'Partners',
        'add_new' => 'Add Partners',
        'add_new_item' => 'Adding Partners',
        'edit_item' => 'Edit Partners',
        'new_item' => 'New Partners',
        'view_item' => 'Show Partners',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $partners_post_args = array(

        'labels' => $partners_post_labels,
        'public' => true,
        'supports' => ['title', 'custom-fields', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('partners', $partners_post_args);
}
theme_partners_register();

// custom post type partners END

// custom post type developers START

function  theme_developers_register()
{
    $developers_post_labels = array(
        'name' => 'Developers',
        'singular_name' => 'Developers',
        'add_new' => 'Add Developers',
        'add_new_item' => 'Adding Developers',
        'edit_item' => 'Edit Developers',
        'new_item' => 'New Developers',
        'view_item' => 'Show Developers',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $developers_post_args = array(

        'labels' => $developers_post_labels,
        'public' => true,
        'supports' => ['title', 'editor', 'custom-fields', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('developers', $developers_post_args);
}
theme_developers_register();

// custom post type developers END

// custom post type footers START

function  theme_footers_register()
{
    $footers_post_labels = array(
        'name' => 'Footer elements',
        'singular_name' => 'Footer elements',
        'add_new' => 'Add Footer elements',
        'add_new_item' => 'Adding Footer elements',
        'edit_item' => 'Edit Footer elements',
        'new_item' => 'New Footer elements',
        'view_item' => 'Show Footer elements',
        'search_items' => 'Search',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in trash',
        'parent_item_colon' => '',
        'dashicons-admin-post' => 'dashicons-layout'
    );
    $footers_post_args = array(

        'labels' => $footers_post_labels,
        'public' => true,
        'supports' => ['title', 'custom-fields', 'thumbnail'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'

        'hierarchical' => false,

        'publicly_queryable' => true,
        'show_in_nav_menus' => false,

        'public' => true,
        'publicly_queryable' => true,
        'show_in_nav_menus' => false,
        'rewrite' => true,

        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 7,
        'menu_icon' => 'dashicons-list-view',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
    );
    // Registering your Custom Post Type
    register_post_type('footers', $footers_post_args);
}
theme_footers_register();

// custom post type footers END

// filters with ajax

function load_new_post_type()
{
    // Check if the post type is set
    if (isset($_POST['post_type'])) {
        $post_type = sanitize_text_field($_POST['post_type']);

        // Query for posts of the new post type
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => -1 // You can change this as needed
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                global $post;
                $query->the_post();
                $page_id = $post->ID;
                $location_buy_rent = get_field("location_buy_rent", $page_id);
                $beds = get_field("beds", $page_id);
                $baths = get_field("baths", $page_id);
                $property_area = get_field("property_area", $page_id);
                $buy_rent_price = get_field("buy_rent_price", $page_id); ?>
                <div class="intro_slider-slide-index">

                    <div class="product-card">
                        <?php lvg_post_thumbnail(); ?>
                        <div class="product-card__content">
                            <small class="base-text text-opacity">Penthouse</small>
                            <span class="intro_slider-slide__title"><?= the_title(); ?></span>
                            <a href="#" class="main-text text--green product-card__location">Location</a>
                            <div class="product-card__icon-group">
                                <div class="product-card__icon-group-item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_bed.svg" alt="intro_icon_bed" width="24" height="24">
                                    <span class="main-text text--green">5</span>
                                </div>
                                <div class="product-card__icon-group-item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_bath.svg" alt="intro_icon_bath" width="24" height="24">
                                    <span class="main-text text--green">3</span>
                                </div>
                                <div class="product-card__icon-group-item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_sq.svg" alt="intro_icon_sq" width="24" height="24">
                                    <span class="main-text text--green">5.555 sq.ft</span>
                                </div>
                            </div>
                            <div class="product-card__footer">
                                <div class="product-card__footer-price">from AED 10,000</div>
                                <div class="product-card__footer-social">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_phone.svg" alt="intro_whatsapp" width="36" height="36">
                                    </a>
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_mail.svg" alt="intro_whatsapp" width="36" height="36">
                                    </a>
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_whatsapp.svg" alt="intro_whatsapp" width="36" height="36">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            wp_reset_postdata();
        } else {
            // echo 'No posts found';
        }
    }
    wp_die();
}
add_action('wp_ajax_load_new_post_type', 'load_new_post_type');
add_action('wp_ajax_nopriv_load_new_post_type', 'load_new_post_type');


// filters with ajax end 
// filter by tag 
function filter_posts_by_tag()
{
    if (isset($_POST['post_type']) && isset($_POST['tag_id'])) {
        $post_type = sanitize_text_field($_POST['post_type']);
        $tag_id = intval($_POST['tag_id']);

        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => -1, // Adjust the number of posts as needed
            'tag_id' => $tag_id
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                global $post;
                $query->the_post();
                $page_id = $post->ID;
                $location_buy_rent = get_field("location_buy_rent", $page_id);
                $beds = get_field("beds", $page_id);
                $baths = get_field("baths", $page_id);
                $property_area = get_field("property_area", $page_id);
                $buy_rent_price = get_field("buy_rent_price", $page_id); ?>
                <div class="intro_slider-slide-index">

                    <div class="product-card">
                        <?php lvg_post_thumbnail(); ?>
                        <div class="product-card__content">
                            <small class="base-text text-opacity">Penthouse</small>
                            <span class="intro_slider-slide__title"><?= the_title(); ?></span>
                            <a href="#" class="main-text text--green product-card__location">Location</a>
                            <div class="product-card__icon-group">
                                <div class="product-card__icon-group-item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_bed.svg" alt="intro_icon_bed" width="24" height="24">
                                    <span class="main-text text--green">5</span>
                                </div>
                                <div class="product-card__icon-group-item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_bath.svg" alt="intro_icon_bath" width="24" height="24">
                                    <span class="main-text text--green">3</span>
                                </div>
                                <div class="product-card__icon-group-item">
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/intro_icon_sq.svg" alt="intro_icon_sq" width="24" height="24">
                                    <span class="main-text text--green">5.555 sq.ft</span>
                                </div>
                            </div>
                            <div class="product-card__footer">
                                <div class="product-card__footer-price">from AED 10,000</div>
                                <div class="product-card__footer-social">
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_phone.svg" alt="intro_whatsapp" width="36" height="36">
                                    </a>
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_mail.svg" alt="intro_whatsapp" width="36" height="36">
                                    </a>
                                    <a href="#">
                                        <img src="<?= get_template_directory_uri() ?>/assets/img/intro_whatsapp.svg" alt="intro_whatsapp" width="36" height="36">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            wp_reset_postdata();
        } else {
            // echo 'No posts found';
        }
    }
    wp_die();
}
// add_action('wp_ajax_filter_posts_by_tag', 'filter_posts_by_tag');
// add_action('wp_ajax_nopriv_filter_posts_by_tag', 'filter_posts_by_tag');

// filter by tag end

// new version


function filter_posts()
{
    $post_type = sanitize_text_field($_POST['post_type']);
    $tag_ids = isset($_POST['tag_id']) ? array_map('intval', $_POST['tag_id']) : array();

    $acf_category = $_POST['acf_category'];
    $property_status = $_POST['property_status'];
	$geg = $property_status;
    $property_stype_data = $_POST['property_stype'];
    $bedrooms = $_POST['bedrooms'];

    $max_price = isset($_POST['max_price']) ? intval($_POST['max_price']) : '';
    $min_price = isset($_POST['min_price']) ? intval($_POST['min_price']) : '';
	
    
    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : false; // Get the current page
	

    if($paged){
        $args = [
            'post_type' => $post_type,
            'posts_per_page' => $paged, 
            'tag__in' => $tag_ids,
            'meta_query' => [
                'relation' => 'AND',
            ]
        ];
    }else{
        $args = [
            'post_type' => $post_type,
            'posts_per_page' => -1,
            'tag__in' => $tag_ids,
            'meta_query' => [
                'relation' => 'AND', // Вы можете поменять на 'OR', если нужно
            ]
        ];
    }
    // Category
    if (!empty($acf_category) && $acf_category !== 'all') {
        $args['meta_query'][] = [
            'key' => 'acf_category',
            'value' => $acf_category,
            'compare' => '='
        ];
    }
	
	if(is_array($property_status)){
		if (!empty($property_status) && !in_array('all', $property_status)) {
        $args['meta_query'][] = [
            'key' => 'property_status',
            'value' => $property_status,
            'compare' => 'IN'
        ];
   	 }
	}else{
		if (!empty($property_status) && $property_status !== 'all') {
        $args['meta_query'][] = [
            'key' => 'property_status',
            'value' => $property_status,
            'compare' => 'IN'
        ];
    }
	}

	if(is_array($property_stype_data)){
		if (!empty($property_stype_data) && !in_array('all', $property_stype_data)) {
        $args['meta_query'][] = [
            'key' => 'property_stype',
            'value' => $property_stype_data,
            'compare' => 'IN'
        ];
    	}
	}else{
		if (!empty($property_stype_data) && $property_stype_data !== 'all') {
        $args['meta_query'][] = [
            'key' => 'property_stype',
            'value' => $property_stype_data,
            'compare' => '='
        ];
    	}
	}
    // Type
    

    // Bedrooms
    if (!empty($bedrooms) && !in_array('all', $bedrooms)) {
        $args['meta_query'][] = [
            'key' => 'bedrooms',
            'value' => $bedrooms,
            'compare' => 'IN'
        ];
    }



    // Для проверки значения, больше чем $min_price
    if (!empty($min_price)) {
        $args['meta_query'][] = [
            'key' => 'price',
            'value' => $min_price,
            'type' => 'NUMERIC',
            'compare' => '>='
        ];
    }

    // Для проверки значения, меньше чем $max_price
    if (!empty($max_price)) {
        $args['meta_query'][] = [
            'key' => 'price',
            'value' => $max_price,
            'type' => 'NUMERIC',
            'compare' => '<='
        ];
    }


    $query_result = new WP_Query($args);
	
	ob_start();

    if ($query_result->have_posts()) {
        while ($query_result->have_posts()) :

            $query_result->the_post();
            $page_id = get_the_ID();

            $location_buy_rent = get_field("location_buy_rent", $page_id);
            $beds = get_field("beds", $page_id);
            $baths = get_field("baths", $page_id);
            $property_area = get_field("property_area", $page_id);
            $property_stype = get_field("property_stype", $page_id);
            $thumb = get_field("thumbnail_url", $page_id);
            $price = get_field("price", $page_id);

            // acf_filter
            $post_acf_category = get_field("acf_category", $page_id);
            $post_property_status = get_field("property_status", $page_id);
            $post_property_stype = get_field("property_stype", $page_id);
            $post_bedrooms = get_field("bedrooms", $page_id);
            $post_price = intval(get_field("price", $page_id));?>
            <div class="intro_slider-slide-index">
                <div class="product-card">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($thumb); ?>" alt="">
                    </a>
                    <div class="product-card__content">
                        <small class="base-text text-opacity"><?= esc_html($property_stype) ?></small>
                        <span class="intro_slider-slide__title"><?php the_title(); ?></span>
                        <a href="#" class="main-text text--green product-card__location"><?= esc_html($location_buy_rent) ?></a>
                        <div class="product-card__icon-group">
                            <div class="product-card__icon-group-item">
                                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/intro_icon_bed.svg" alt="intro_icon_bed" width="24" height="24">
                                <span class="main-text text--green"><?= esc_html($beds) ?></span>
                            </div>
                            <div class="product-card__icon-group-item">
                                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/intro_icon_bath.svg" alt="intro_icon_bath" width="24" height="24">
                                <span class="main-text text--green"><?= esc_html($baths) ?></span>
                            </div>
                            <div class="product-card__icon-group-item">
                                <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/intro_icon_sq.svg" alt="intro_icon_sq" width="24" height="24">
                                <span class="main-text text--green"><?= esc_html($property_area) ?></span>
                            </div>
                        </div>
                        <div class="product-card__footer">
                            <div class="product-card__footer-price">from AED <?= number_format((float)$price, 0) ?></div>
                            <div class="product-card__footer-social">
                                <a href="#">
                                    <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/intro_phone.svg" alt="intro_phone" width="36" height="36">
                                </a>
                                <a href="#">
                                    <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/intro_mail.svg" alt="intro_mail" width="36" height="36">
                                </a>
                                <a href="#">
                                    <img src="<?= esc_url(get_template_directory_uri()) ?>/assets/img/intro_whatsapp.svg" alt="intro_whatsapp" width="36" height="36">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
        endwhile;
    } else {
        echo '<div class="post"><h2>No posts found</h2></div>';
    }

    $posts_html = ob_get_clean();
    wp_send_json_success(['posts' => $posts_html, 'post_count' => $query_result->found_posts,  'array' => $posts_array, 'requiest' => $paged]);

    wp_die();
}

add_action('wp_ajax_filter_posts', 'filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'filter_posts');



function isMobile()
{
    return preg_match('/(android|iphone|ipad|ipod|blackberry|opera mini|windows phone|iemobile|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
}

// work with API
function fetch_realty_data()
{
    $response = wp_remote_get('https://expert.propertyfinder.ae/feed/l-v-g-real-estate-l-l-c/privatesite/bc25574a69f32ec592d9d48b583667ba');

    if (is_wp_error($response)) {
        return;
    }

    $body = wp_remote_retrieve_body($response);
    $xml = simplexml_load_string($body);

    return $xml;
}

function parse_realty_data($xml)
{
    $properties = [];

    foreach ($xml->property as $property) {
        $properties[] = [
            'permit_number' => (string) $property->permit_number,
            'reference_number' => (string) $property->reference_number,
            'offering_type' => (string) $property->offering_type, // Category RS - Residental, RR - Residental, 
            'property_type' => (string) $property->property_type, //AP - Apartments, VH - Villa, PH - Penthouse, TH - Townhouse, DX - Duplex
            'price' => (string) $property->price,
            'city' => (string) $property->city,
            'community' => (string) $property->community, //-
            'sub_community' => (string) $property->sub_community, //-
            'title_en' => (string) $property->title_en,
            'description_en' => (string) $property->description_en,
            'completion_status' => (string) $property->completion_status, //Post type off_plan_primary - off_plan , off plan - off_plan, 
            'amenities' => (string) $property->amenities, //BA - Balcony, BP - Beachfront, BW - Built in Wardrobes, CP - Children’s pool, PA - Pets allowed, SP - Shared spa, WC - Walk in closet     
            'size' => (string) $property->size,
            'bedroom' => (string) $property->bedroom,
            'bathroom' => (string) $property->bathroom,
            'agent_name' => (string) $property->agent->name, // -
            'agent_email' => (string) $property->agent->email, // -
            'agent_phone' => (string) $property->agent->phone, // -
            'agent_license_no' => (string) $property->agent->license_no, //-
            'agent_photo' => (string) $property->agent->photo, //-
            'parking' => (string) $property->parking,
            'furnished' => (string) $property->furnished,
            'photos' => $property->photo,
            'geopoints' => (string) $property->geopoints,
        ];
    }
    return $properties;
}

function insert_update_realty_posts($properties)
{
    // $count = 0;
    $amenities_map = [
        'BA' => 'Balcony',
        'BP' => 'Beachfront',
        'BW' => 'Built in Wardrobes',
        'CP' => 'Children’s pool',
        'PA' => 'Pets allowed',
        'SP' => 'Shared spa',
        'WC' => 'Walk in closet',
        'AC' => 'Air Conditioning',
        'FF' => 'Fully Furnished',
        'BK' => 'Breakfast',
        'SE' => 'Sea View',
        'CV' => 'City View',
        'NS' => 'Near School',
        'HO' => 'Home Office',
        'NM' => 'Near Mall',
        'SM' => 'Super Market',
        'ML' => 'Mall',
        'PT' => 'Pet Training',
        'MO' => 'Mountain View',
        'RT' => 'Roof Top',
        'SY' => 'Swimming Pool',
        'MS' => 'Massage',
        'WC' => 'Walk in Closet'
    ];

    foreach ($properties as $property) {
        // if ($count >= 1) return ;

        $post_type = '';
        if ($property['completion_status'] == 'off_plan_primary') {
            $post_type = 'offplan';
        }
        if ($property['completion_status'] == 'completed' || $property['completion_status'] == 'completed_primary') {
            $post_type = 'buy';
        }
        if ($property['offering_type'] == 'RR') {
            $post_type = 'rent';
        }

        // Check if post already exists by reference number

        $existing_post = get_posts([
            'post_type' => $post_type,
            'meta_key' => 'reference_number',
            'meta_value' => $property['reference_number'],
            'post_status' => 'any'
        ]);


        $post_data = [
            'post_title' => $property['title_en'],
            // 'post_content' => $property['description_en'],
            'post_status' => 'publish',
            'post_type' => $post_type,
        ];
        if ($existing_post) {
            // Update existing post
            $post_data['ID'] = $existing_post[0]->ID;
            $post_id = wp_update_post($post_data);
        } else {
            // Insert new post
            $post_id = wp_insert_post($post_data);
        }

        if (!is_wp_error($post_id)) {
            // Update ACF fields
            update_field('buy_rent_description', $property['description_en'], $post_id);
            update_field('permit_number', $property['permit_number'], $post_id);
            update_field('qr_code_dld_permit_text', $property['reference_number'], $post_id);

            update_field('acf_category', $property['offering_type'], $post_id);
            update_field('property_stype', $property['property_type'], $post_id);
            update_field('buy_rent_price', $property['price'], $post_id);
            update_field('price', $property['price'], $post_id);


            update_field('location_buy_rent', $property['city'], $post_id);

            // update_field('community', $property['community'], $post_id);
            // update_field('sub_community', $property['sub_community'], $post_id);
            if ($property['completion_status'] === 'off_plan_primary' || $property['completion_status'] === 'completed_primary') {
                update_field('property_status', 'primary', $post_id);
            } else {
                update_field('property_status', 'secondary', $post_id);
            }
            // update_field('amenities', $property['amenities'], $post_id);
            update_field('property_area', $property['size'], $post_id);
            update_field('beds', $property['bedroom'], $post_id);
            update_field('bedrooms', $property['bedroom'], $post_id);
            update_field('baths', $property['bathroom'], $post_id);
            // update_field('agent', $property['agent'], $post_id);
            update_field('parking', $property['parking'], $post_id);
            // update_field('furnished', $property['furnished'], $post_id);
            update_field('geopoints', $property['geopoints'], $post_id);
            // Add photos as gallery

            $photo_urls = json_decode(json_encode($property['photos']), true);
            $urls_string = implode(',', $photo_urls['url']);
            if ($photo_urls['url'][0]) {
                $first_photo_url = $photo_urls['url'][0];
                update_field('thumbnail_url', $first_photo_url, $post_id);


                // $attachment_id = upload_image_to_media_library($first_photo_url);

                // if ($attachment_id) {
                //     set_post_thumbnail($post_id, $attachment_id); 
                // }
            }

            update_field('image_url_list', $urls_string, $post_id);
        }
        $tags = [];
        $amenities_array = explode(',', $property['amenities']);

        foreach ($amenities_array as $amenity) {
            if (isset($amenities_map[$amenity])) {
                $tags[] = $amenities_map[$amenity];
            }
        }
        wp_set_post_tags($post_id, $tags, true);
    }
}

// function upload_image_to_media_library($image_url) {
//     $image = wp_remote_get($image_url);

//     if (is_wp_error($image)) {
//         return;
//     }

//     $image_body = wp_remote_retrieve_body($image);
//     $image_name = basename($image_url);
//     $upload = wp_upload_bits($image_name, null, $image_body);

//     if (!$upload['error']) {
//         $wp_filetype = wp_check_filetype($upload['file'], null);
//         $attachment = [
//             'post_mime_type' => $wp_filetype['type'],
//             'post_title' => sanitize_file_name($image_name),
//             'post_content' => '',
//             'post_status' => 'inherit'
//         ];

//         $attachment_id = wp_insert_attachment($attachment, $upload['file']);
//         require_once(ABSPATH . 'wp-admin/includes/image.php');
//         $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload['file']);
//         wp_update_attachment_metadata($attachment_id, $attachment_data);

//         return $attachment_id;
//     }

//     return 0;
// }


// function schedule_realty_updates() {
//     if (!wp_next_scheduled('update_realty_listings')) {
//         wp_schedule_event(time(), 'hourly', 'update_realty_listings');
//     }
// }
// add_action('wp', 'schedule_realty_updates');

// function update_realty_listings() {
//     $xml = fetch_realty_data();
//     if ($xml) {
//         $properties = parse_realty_data($xml);
//         insert_update_realty_posts($properties);
//     }
// }
// add_action('update_realty_listings', 'update_realty_listings');


// add_action('admin_init', 'update_realty_listings_on_admin_page_load');

// function update_realty_listings_on_admin_page_load() {
//     if (current_user_can('edit_posts')) {
//         update_realty_listings();
//     }
// }

// Schedule the hourly event if it doesn't already exist
// function schedule_realty_updates() {
//     if (!wp_next_scheduled('update_realty_listings')) {
//         wp_schedule_event(time(), 'hourly', 'update_realty_listings');
//     }
// }
// add_action('wp', 'schedule_realty_updates');

// // Fetch realty data and update the listings
// function update_realty_listings() {
//     $xml = fetch_realty_data();
//     if ($xml) {
//         $properties = parse_realty_data($xml);
//         insert_update_realty_posts($properties);
//         // Set a transient for 1 hour
//         set_transient('realty_last_update', time(), HOUR_IN_SECONDS);
//     }
// }
// add_action('update_realty_listings', 'update_realty_listings');

// // Update listings on admin page load if the user has permissions and the transient has expired
// function update_realty_listings_on_admin_page_load() {
//     if (current_user_can('edit_posts')) {
//         // Check if the transient exists and has not expired
//         if (!get_transient('realty_last_update')) {
//             update_realty_listings();
//         }
//     }
// }
// add_action('admin_init', 'update_realty_listings_on_admin_page_load');

// Ensure the fetch_realty_data, parse_realty_data, and insert_update_realty_posts functions are defined here as well.

// work with API end 

add_action('admin_init', 'handle_tag_icons');
function handle_tag_icons()
{
    $_POST['errors'] = [];
    if($_POST['tags_icons'] ?? false){
        if(preg_match('/zip/', $_FILES['file']['type'])){
            $zip = new ZipArchive();
            if($zip->open($_FILES['file']['tmp_name'])){

                for($i=0; $i<$zip->numFiles; $i++){
                    $name = $zip->getNameIndex($i);
                    insert_icon_to_tag($zip->getFromName($name), $name);
                }

            }
        }else{
            insert_icon_to_tag(file_get_contents($_FILES['file']['tmp_name']),$_FILES['file']['name']);
        }

    }
}
function insert_icon_to_tag($filecontent, $name){
    $tag = explode('.', $name);
    $tag = $tag[0];
    $tag = get_term_by('name', $tag, 'post_tag');
    $_POST['tag_icon_results']['success'] = 0;
    if($tag){
        if($oldimage = get_field('icon', "post_tag_$tag->term_id")){
            wp_delete_attachment($oldimage['ID'], true);
        }
        $upload_file = wp_upload_bits($name, null, $filecontent);
        if (!$upload_file['error']) {
            $wp_filetype = wp_check_filetype($name, null);
            $attachment = array(
                'post_mime_type' => $wp_filetype['type'],
                'post_parent' => null,
                'post_title' => preg_replace('/\.[^.]+$/', '', $name),
                'post_content' => '',
                'post_status' => 'inherit'
            );
            $attachment_id = wp_insert_attachment($attachment, $upload_file['file']);
            if (!is_wp_error($attachment_id)) {
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                $attachment_data = wp_generate_attachment_metadata($attachment_id, $upload_file['file']);
                wp_update_attachment_metadata($attachment_id, $attachment_data);
                update_field("icon", $attachment_id, "post_tag_$tag->term_id");
                $_POST['tag_icon_results']['success']++;
            }
        }
    }else{
        $_POST['tag_icon_results']['errors'][] = $name;
    }
}
add_filter( 'manage_edit-post_tag_columns', 'my_manage_edit_category_columns' );
function my_manage_edit_category_columns( $columns ) {
    array_splice($columns, 2,0, ['icon' => "Icon"]);
    unset($columns['description']);
    return $columns;
}
add_filter( 'manage_post_tag_custom_column', 'my_manage_category_custom_column', 10, 3 );
function my_manage_category_custom_column( $content, $column_name, $term_id ) {
    switch ( $column_name ) {
        case 'icon':
            $icon = get_field('icon', "post_tag_$term_id");
            $content = "<img style='width: 25px; height: auto' src='$icon[url]'>";
            break;
    }

    return $content;
}