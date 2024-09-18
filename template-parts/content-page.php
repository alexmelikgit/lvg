<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lvg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php lvg_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lvg' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'lvg' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
	
	<?php
        global $dataCRM;

        $url = 'https://crm.mindall.co/api/api/integrations/website/8a0d54a2-56eb-4e98-8b08-9532a2233828/properties.json';

        // Получение JSON данных
        $json = file_get_contents($url);

        // Преобразование JSON в ассоциативный массив
        $dataCRM = json_decode($json, true);

        foreach ($dataCRM['data'] as $value) {

            $id_crm_post = findArray($value, 'id');
            $ulr_crm = findArray($value['media'], 'url');
            $price_crm = findArray($value, 'rentPerYear');
            $bed_crm = findArray($value, 'bedrooms');
            $bath_crm = findArray($value, 'bathrooms');
            $area_crm = findArray($value, 'weighted');
            $desc_crm = findArray($value, 'text');
            $reference_crm = findArray($value, 'reference');
            $city_crm = findArray($value, 'city');
            $urls_crm = urls_string($value['media']['pictures']);
            $geo_crm = findArray($value, 'lng') . ',' . findArray($value, 'lat');
            $market = findArray($value , 'market');
            $category = findArray($value , 'category');
            if($category === null) {
                $category = 'all';
            }


            if (findArray($value, 'dealType') == 'rent'){
                $p_type = 'rent';
            }else{
                $p_type = 'buy';
            }

            $existing_post_id = get_posts(array(
                'meta_key' => 'crmID',
                'meta_value' => $id_crm_post,
                'post_type' => $p_type,
            ));
			

            $post_data = [
                'post_title' => findArray($value, 'title'),
                'post_content' => findArray($value, 'text'),
                'post_status' => 'publish',
            ];

            if (findArray($value, 'dealType') == 'rent') {
                $post_data['post_type'] = 'rent';
            } else {
                $post_data['post_type'] = 'buy';
                $price_array = findArray($value, 'price');
                $price_crm = $price_array['price'];
            }
			
			if ($market === "primary") {
				if (isset($post_data['post_type']) && is_array($post_data['post_type'])) {
					$post_data['post_type'][] = 'off-plan'; 
				} else {
					$post_data['post_type'] = array('off-plan');
					
				}
			}
			print_r($post_data['post_type']);
        }



?>
</article><!-- #post-<?php the_ID(); ?> -->
