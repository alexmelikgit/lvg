<?php

// параметры по умолчанию
$my_posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'post_type'   => 'teammembers',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

global $post;
foreach( $my_posts as $post ){
setup_postdata( $post );
$page_id = $post -> ID;

$team_member_photo = get_field("team_member_photo", $page_id);
$team_member_post = get_field("team_member_post", $page_id);
$team_member_name = get_field("team_member_name", $page_id);
$team_member_phone = get_field("team_member_phone", $page_id);
$team_member_email = get_field("team_member_email", $page_id);
$team_member_whatsapp = get_field("team_member_whatsapp", $page_id);

?>


            <div class="team__grid-item">
                <img src="<?= $team_member_photo; ?>" alt="team" width="345" height="421">
                <div class="team__grid-item-content">
                    <span class="main-text--md text--opacity"><?= $team_member_post; ?></span>
                    <span class="team__grid-item-name text--uppercase"><?= $team_member_name; ?></span>
                    <div class="team__grid-item-footer">
                        <button type="button" class="team__grid-item-btn main-text--lg text--uppercase text--green text--underline"
                        >contact</button>
                        <div class="team__grid-item-social">
                            <a href="tel:<?= $team_member_phone; ?>">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/about/phone.svg" alt="phone" width="36" height="36">
                            </a>
                            <a href="mailto:<?= $team_member_email; ?>">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/about/mail.svg" alt="mail" width="36" height="36">
                            </a>
                            <a href="wa.me/<?= $team_member_whatsapp; ?>">
                                <img src="<?= get_template_directory_uri() ?>/assets/img/about/whatsapp.svg" alt="whatsapp" width="36" height="36">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

<?php  }
wp_reset_postdata(); // сброс
?>