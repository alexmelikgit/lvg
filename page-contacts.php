<?php
global $post;
$page_id = $post -> ID;

$our_contacts_title = get_field("our_contacts_title", $page_id);
$contacts_page_subtitle = get_field("contacts_page_subtitle", $page_id);
$contacts_address = get_field("contacts_address", $page_id);
$contacts_number = get_field("contacts_number", $page_id);
$contacts_email = get_field("contacts_email", $page_id);

get_header(''); ?>
<section class=" location">
    <div class="container">
        <h1 class="base-title"><?= $our_contacts_title; ?></h1>
        <span class="main-text hero__content-desc">
            <?= $contacts_page_subtitle; ?>
        </span>
        <div class="location__content">
            <a class="location__content-item location__content-item-address" href="https://www.google.com/maps?ll=25.097036,55.17149&z=17&t=m&hl=ru&gl=KG&mapclient=embed&q=25%C2%B005%2749.3%22N+55%C2%B010%2726.6%22E+25.097028,+55.174056@25.0970278,55.1740556"><?= $contacts_address; ?></a>
            <a class="location__content-item location__content-item-phone" href="tel:+97145856235"><?= $contacts_number; ?></a>
            <a class="location__content-item location__content-item-email" href="mailto:<?= $contacts_email; ?>"><?= $contacts_email; ?></a>
        </div>
        <iframe class="location_iframe" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3613.1425350056907!2d55.17149007537854!3d25.097035977775626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDA1JzQ5LjMiTiA1NcKwMTAnMjYuNiJF!5e0!3m2!1sru!2skg!4v1716421569397!5m2!1sru!2skg" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
</section>


<section class="section contacts" id="contacts">
    <?php get_template_part('/template-parts/tempparts') ?>
    <div class="container contacts-container">
        <img class="contacts__img" src="<?= get_template_directory_uri() ?>/assets/img/contacts/contacts_img.png" alt="contacts_img" width="1440" height="700">
    </div>
</section>
<?php get_footer(''); ?>
