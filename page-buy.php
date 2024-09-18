<?php get_header(''); 

?>
<style> 
    .product-count{
        padding: unset!important;
    }
</style>
    <section class=" hero hero-buy">
<?php get_template_part('/template-parts/buyrentparts') ?>
    
    <div class="product__grid">
    
    </div>
    <button class="show_more product-card__btn main-text--lg text--semibold text--uppercase text--green text--underline">Show more</button>
</div>
</section>

<?php get_template_part('/template-parts/tempparts') ?>

<section class="section team buy-team">
    <div class="container">
        <div class="team__grid">
            <?php get_template_part('/template-parts/teammembers') ?>
        </div>
    </div>
</section>
<?php get_footer(''); ?>