<?php
// Get the post ID
$post_id = get_the_ID();

// Retrieve post gallery
$gallery = get_post_gallery($post_id, false);
$photo_urls = [];
$urls_from_API = get_field("image_url_list", $page_id);
if (!empty ($urls_from_API)) {
    $photo_urls = explode(',', $urls_from_API);
}

// Start output buffering
ob_start();
?>

<section class="property">
    <!-- Main slider for large images -->
    <div class="slider-for-property">
        <?php
        // Loop through gallery attachment IDs for larger images
        foreach (($gallery ? explode(',', $gallery['ids']) : $photo_urls) as $attachment_id) :
            if ($gallery) {
                $large_image_src = wp_get_attachment_image_src($attachment_id, 'large');
                $image_url = esc_url($large_image_src[0]);
                $image_alt = esc_attr(get_post_meta($attachment_id, '_wp_attachment_image_alt', true));
                $image_width = esc_attr($large_image_src[1]);
                $image_height = esc_attr($large_image_src[2]);
            } else {
                $image_url = $attachment_id;
                $image_alt = '';
                $image_width = '';
                $image_height = '';
            }
        ?>
            <div class="slider-for-property__slide">
                <img class="image-slide" fetchpriority="high" src="<?= $image_url ?>" alt="<?= $image_alt ?>" width="<?= $image_width ?>" height="<?= $image_height ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Navigation slider for small preview images -->
    <div class="container">
        <div class="slider-nav-property">
            <?php
            // Loop through gallery attachment IDs for thumbnails
            foreach (($gallery ? explode(',', $gallery['ids']) : $photo_urls) as $attachment_id) :
                if ($gallery) {
                    $thumbnail_image_src = wp_get_attachment_image_src($attachment_id, 'thumbnail');
                    $image_url = esc_url($thumbnail_image_src[0]);
                    $image_alt = esc_attr(get_post_meta($attachment_id, '_wp_attachment_image_alt', true));
                    $image_width = esc_attr($thumbnail_image_src[1]);
                    $image_height = esc_attr($thumbnail_image_src[2]);
                } else {
                    $image_url = $attachment_id;
                    $image_alt = '';
                    $image_width = '';
                    $image_height = '';
                }
            ?>
                <div class="slider-nav-property__slide">
                    <img class="thumbnail-slide" src="<?= $image_url ?>" alt="<?= $image_alt ?>" width="<?= $image_width ?>" height="<?= $image_height ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Modal for image popup -->
    <div id="imageModal" class="modal" style="z-index: 10000;">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage" >
    </div>
    

<!-- JavaScript for modal functionality -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImage");
    var closeModal = document.getElementsByClassName("close")[0];

    function openModal(src) {
        modal.style.display = "block";
        modalImg.src = src;
    }

    document.querySelectorAll('.image-slide, .thumbnail-slide').forEach(function(img) {
        img.style.cursor = "pointer";
        img.onclick = function() {
            openModal(this.src);
        }
    });

    closeModal.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});
</script>

<style>
/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    padding-top: 60px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.9);
}

.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
</style>

<?php
// End output buffering, get the content, and echo it
echo ob_get_clean();
?>
