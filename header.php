<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lvg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TJWQVZ7CSM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TJWQVZ7CSM');
</script>
    <title class="notranslate"><?=get_bloginfo('site_title')?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">-->
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lvg' ); ?></a>

	<header class="main-header">
		<div class="container header-container">
            <a href="/" class="main-header-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/img/img_logo.svg" alt="Логотип" width="119" height="119">
            </a>

        <nav class="main-nav main-nav-index">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'      => 'main-nav-list',
                )
            );
            ?>
		</nav><!-- #site-navigation -->
             <button class="language-btn eng">
               eng
            </button>
            <button class="language-btn ru">
                ru
            </button>
            <button class="burger">
                <span class="burger-line burger-line--top"></span>
                <span class="burger-line burger-line--middle"></span>
                <span class="burger-line burger-line--bottom"></span>
            </button>

        </div><!-- .header-container -->
	</header><!-- #masthead -->
