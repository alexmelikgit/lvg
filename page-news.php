<?php
echo "Template is loaded";
get_header('');
$title = get_field("title", $page_id);
$img = get_field("img", $page_id);
?>

<style>
    .hero-sell {
        background-image: url(<?= $img ?>);
    }
    .cstm-mt{
        margin-top: 130px;
    }
    @media(max-width:768px){
        .cstm-mt{
            margin-top: 60px;
        }
    }
</style>

    <section class="hero hero-sell ">
        <div class="container hero-container">
            <div class="hero__content">
                <h1><?= $title; ?></h1>
                <span class="main-text text--white hero__content-desc">
                   
                </span>
                <!-- <a href="#list_your_property" class="main-btn">List your property</a> -->
            </div>
        </div>
    </section>
<section class="product">
    <div class="container cstm-mt">
        <div class="product__grid">
            <?php
            // Define the custom query to fetch the latest posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8, // Change this number to the number of posts you want to display
            );
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="product-card blog-product-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" width="470" height="305">
                        <?php else : ?>
                            <img src="img/img_card.png" alt="img_card" width="470" height="305">
                        <?php endif; ?>
                        <div class="product-card__content">
                            <span class="section-subtitle text--regular"><?php the_title(); ?></span>
                            <p class="main-text text--green numbers-optimization"><?php echo get_the_date('d.m.Y'); ?></p>
                            <span class="main-text--md"><?php echo get_the_excerpt(); ?></span>
                            <button class="product-card__content-btn main-text--lg text--semibold text--uppercase text--green text--underline">Show more</button>
                        </div>
                    </a>
                <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <!--<a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">-->
        <!--<button class="product-card__btn main-text--lg text--semibold text--uppercase text--green text--underline">-->
        <!--    Show more-->
        <!--</button></a> -->
    </div>
</section>

<?php get_footer(''); ?>
