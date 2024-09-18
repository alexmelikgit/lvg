<?php
/*
Template Name: Custom Post Gallery Template
*/

get_header();

// Check if there's a gallery attached to the post
$gallery = get_post_gallery(get_the_ID(), false);

if ($gallery) {
    // Retrieve gallery image IDs
    $gallery_ids = explode(',', $gallery['ids']);

    // Output gallery images
    echo '<div class="slider-for-property">';

    foreach ($gallery_ids as $id) {
        $image_url = wp_get_attachment_image_src($id, 'full'); // Get full image URL
        $image_alt = get_post_meta($id, '_wp_attachment_image_alt', true); // Get image alt text

        if ($image_url) {
            echo '<div class="slider-for-property__slide">';
            echo '<img src="' . esc_url($image_url[0]) . '" alt="' . esc_attr($image_alt) . '">';
            echo '</div>';
        }
    }

    echo '</div>';
} else {
    // If no gallery found
    echo '<p>No gallery found.</p>';
}

get_footer();
?>
