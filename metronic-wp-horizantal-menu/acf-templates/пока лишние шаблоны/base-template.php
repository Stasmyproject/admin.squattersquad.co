<?php
// Убедимся, что переменные доступны
if (!isset($post_id)) {
    echo '⛔ Нет $post_id';
    return;
}

$fields = get_fields($post_id);
if (!$fields) {
    echo '⛔ Нет данных для генерации документа.';
    return;
}

// Получаем ключ группы из мета
$field_group_key = get_post_meta($post_id, 'acf_template_slug', true);
if (!$field_group_key) {
    echo '⛔ Не передан ключ группы.';
    return;
}

// Получаем все поля и заголовок формы
$values = $fields;
$field_objects = acf_get_fields($field_group_key);
$acf_group = acf_get_field_group($field_group_key);
$form_title = $acf_group['title'] ?? 'Без названия';

// Подключаем стили
echo '<style>' . file_get_contents(get_template_directory() . '/assets/css/style-form-template.css') . '</style>';

// Подключаем тело шаблона
$template_file = get_template_directory() . '/acf-templates/' . $field_group_key . '-body.php';
if (file_exists($template_file)) {
    include $template_file;
} else {
    echo "<p>⚠️ Шаблон <code>{$field_group_key}-body.php</code> не найден.</p>";
}
?>
