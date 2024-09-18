<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package montessori
 */

get_header();
global $post;
$page_id = $post -> ID;

$head_image = get_field("head_image", $page_id);
?>
<style>
.single_head{
    position:relative;
    display: flex;
    justify-content: flex-start;
    align-items: flex-end;
    width:100%;
    min-height:100vh;
    background-image:url(<?= $head_image ?>);
    padding-bottom: 100px;
}
.single_head:before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    background: #00000047;
    z-index: 2;
}
.main-title{
    position: relative;
    color:#fff;
    z-index: 5;
}
.single_head p{
    position: relative;
    color:#fff;
    z-index: 5;
}
.text--green {
    color: #7ac5cd !important;
}

@media (max-width:768px) {
    .adapt{
        min-height: 400px;
    }
    .single_head{
        position:relative;
        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
        width:100%;
        min-height:50vh;
        background-image:url(<?= $head_image ?>);
        padding-bottom: 100px;
    }
}
</style>
    <section class="single_head">
        <div class="container">
            <h2 class="main-title"><?= the_title(); ?></h2>
            <p class="main-text text--green numbers-optimization"><?php echo get_the_date('d.m.Y'); ?></p>
             <p>
                 <?= the_excerpt(); ?>
             </p>
        </div>
         
    </section>
    <section class="section description">
        <div class="container">
            <p class="section__desc main-text">
                <?php the_content(); ?>
            </p>
        </div>
    </section>



<?php
get_footer();
