<?php
add_action('wp_ajax_save_json_form', 'save_json_form');

function save_json_form() {
    if (!is_user_logged_in()) {
        wp_send_json_error(['message' => 'Вы должны авторизоваться.']);
    }

    $user_id = get_current_user_id();
    $form_slug = sanitize_text_field($_POST['form_slug']);
    $form_data = $_POST['form_data'];

    if (!$form_slug || !is_array($form_data)) {
        wp_send_json_error(['message' => 'Неверные данные формы.']);
    }

    $post_id = wp_insert_post([
        'post_type'   => 'document',
        'post_status' => 'publish',
        'post_title'  => 'Документ — ' . date('d.m.Y H:i'),
        'post_author' => $user_id,
        'meta_input'  => [
            '_form_slug' => $form_slug,
        ],
    ]);

    if (is_wp_error($post_id)) {
        wp_send_json_error(['message' => 'Ошибка при создании документа.']);
    }

    foreach ($form_data as $key => $value) {
        update_post_meta($post_id, sanitize_key($key), sanitize_text_field($value));
    }

    wp_send_json_success([
        'message' => 'Документ успешно создан!',
        'redirect' => get_permalink($post_id),
    ]);
}
