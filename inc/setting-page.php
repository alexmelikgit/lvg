<?php

// integration Mindall CRM







function findArray($array, $key)
{
    if (array_key_exists($key, $array)) {
        return $array[$key];
    }

    foreach ($array as $subArray) {
        if (is_array($subArray)) {
            $result = findArray($subArray, $key);
            if ($result !== null) {
                return $result;
            }
        }
    }

    return null;
}




// Добавляем страницу настроек в админку
add_action('admin_menu', 'custom_settings_page');

function custom_settings_page()
{
    add_menu_page(
        'Обновить посты',
        'Обновить посты',
        'manage_options',
        'custom-settings-page',
        'custom_settings_page_html',
        'dashicons-update',
        20
    );
}

// Функция отображения страницы настроек
function custom_settings_page_html()
{
?>
    <div class="wrap">
        <h1><?php esc_html_e('Интегрировать записи из Mindall CRM', 'textdomain'); ?></h1>
        <p><?php esc_html_e('Для загрузки записей на ваш сайт нажмите на кнопку обновить посты . Это займет несколько минут просим не закрывать окно или страницу', 'textdomail'); ?></p>
        <form method="post" action="">
            <input type="hidden" name="update_posts" value="true">
            <?php submit_button('Обновить посты'); ?>
        </form>
        <h1>Импортировать иконки тэгов</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" required accept="application/zip, image/jpeg , image/*">
            <input type="hidden" name="tags_icons" value="true">
            <?php submit_button('Импортировать иконки'); ?>
        </form>
        <?php if($_POST['tag_icon_results']['success']):?>
            <p style="color: limegreen">Uploaded files(<?=$_POST['tag_icon_results']['success']?>)</p>
        <?php endif ; ?>
        <?php foreach ($_POST['tag_icon_results']['errors'] ?? [] as $error) :?>
            <p style="color: red">Not found tag with name -> <?=$error?></p>
        <?php endforeach;?>
    </div>
<?php
}

function update_acf_fields($acfName, $acfValue, $postId)
{
    update_field($acfName, $acfValue, $postId);
}

function urls_string($urls)
{
    $links = '';
    foreach ($urls as $url) {
        $links .= findArray($url, 'url') . ',';
    }
    return $links;
}

// Обработка формы
add_action('admin_init', 'handle_update_posts');

function handle_update_posts()
{
    if (isset($_POST['update_posts']) && $_POST['update_posts'] === 'true') {
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
            $reference_crm = findArray($value,'rera') ?: '';
            $reference = findArray($value,'reference') ?: '';
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
                $existing_post_id_offplan = get_posts(array(
                    'meta_key' => 'crmID',
                    'meta_value' => $id_crm_post,
                    'post_type' => 'offplan',
                ));

                if (!empty($existing_post_id_offplan)) {
                    $post_data['ID'] = $existing_post_id_offplan[0]->ID;
                    $update_post_id = wp_update_post($post_data);
                    $insert_tags = wp_set_post_tags($update_post_id, findArray($value, 'amenities'));
                    update_field('buy_rent_price', $price_crm, $update_post_id);
                    update_field('beds', $bed_crm, $update_post_id);
                    update_field('baths', $bath_crm, $update_post_id);
                    update_field('property_area', $area_crm, $update_post_id);
                    update_field('buy_rent_description', $desc_crm, $update_post_id);
                    update_field('location_buy_rent', $city_crm, $update_post_id);
                    update_field('qr_code_dld_permit_text', $reference_crm, $update_post_id);
                    update_field('image_url_list', $urls_crm, $update_post_id);
                    update_field('thumbnail_url', $ulr_crm, $update_post_id);
                    update_field('geopoints', $geo_crm, $update_post_id);
                    update_field('property_status', $market, $update_post_id);
                    update_field('property_stype', $category, $update_post_id);
                    update_field('bedrooms', $bed_crm, $update_post_id);
                    update_field('price', $price_crm, $update_post_id);
                    update_field('acf_category', 'all', $update_post_id);
                    update_field('reference', $reference, $update_post_id);

                } else {
//                    if(empty($existing_post_id)){
//                        $update_post_id = wp_insert_post($post_data, false, true);
//                    }else{
//                        $update_post_id = $existing_post_id[0]->ID;
//                    }
                    $update_post_id = wp_insert_post($post_data, false, true);
                    $insert_tags = wp_set_post_tags($update_post_id, findArray($value, 'amenities'));
                    $add_id_post_meta = add_post_meta($update_post_id, 'crmID', findArray($value, 'id'));
                    update_field('buy_rent_price', $price_crm, $update_post_id);
                    update_field('beds', $bed_crm, $update_post_id);
                    update_field('baths', $bath_crm, $update_post_id);
                    update_field('property_area', $area_crm, $update_post_id);
                    update_field('buy_rent_description', $desc_crm, $update_post_id);
                    update_field('location_buy_rent', $city_crm, $update_post_id);
                    update_field('qr_code_dld_permit_text', $reference_crm, $update_post_id);
                    update_field('image_url_list', $urls_crm, $update_post_id);
                    update_field('thumbnail_url', $ulr_crm, $update_post_id);
                    update_field('geopoints', $geo_crm, $update_post_id);
                    update_field('property_status', $market, $update_post_id);
                    update_field('property_stype', $category, $update_post_id);
                    update_field('bedrooms', $bed_crm, $update_post_id);
                    update_field('price', $price_crm, $update_post_id);
                    update_field('acf_category', 'all', $update_post_id);
                    update_field('reference', $reference, $update_post_id);

                }
            }



            if (!empty($existing_post_id)) {
                $post_data['ID'] = $existing_post_id[0]->ID;
                $update_post_id = wp_update_post($post_data);
                $insert_tags = wp_set_post_tags($update_post_id, findArray($value, 'amenities'));
            } else {

                $update_post_id = wp_insert_post($post_data, false, true);
                $insert_tags = wp_set_post_tags($update_post_id, findArray($value, 'amenities'));
                $add_id_post_meta = add_post_meta($update_post_id, 'crmID', findArray($value, 'id'));
            }

            update_field('buy_rent_price', $price_crm, $update_post_id);
            update_field('beds', $bed_crm, $update_post_id);
            update_field('baths', $bath_crm, $update_post_id);
            update_field('property_area', $area_crm, $update_post_id);
            update_field('buy_rent_description', $desc_crm, $update_post_id);
            update_field('location_buy_rent', $city_crm, $update_post_id);
            update_field('qr_code_dld_permit_text', $reference_crm, $update_post_id);
            update_field('image_url_list', $urls_crm, $update_post_id);
            update_field('thumbnail_url', $ulr_crm, $update_post_id);
            update_field('geopoints', $geo_crm, $update_post_id);
            update_field('property_status', $market, $update_post_id);
            update_field('property_stype', $category, $update_post_id);
            update_field('bedrooms', $bed_crm, $update_post_id);
            update_field('price', $price_crm, $update_post_id);
            update_field('acf_category', 'all', $update_post_id);
            update_field('reference', $reference, $update_post_id);
        }
        // Сообщение об успешном обновлении
        add_action('admin_notices', 'custom_admin_notice');
    }
}



function custom_admin_notice()
{
?>
    <div class="notice notice-success is-dismissible">
        <p><?php esc_html_e('Все посты были успешно обновлены.', 'textdomain'); ?></p>
    </div>
<?php
}

?>