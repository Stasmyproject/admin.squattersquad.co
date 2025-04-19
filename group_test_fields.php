<?php
// Убедимся, что переменные доступны
if (!isset($fields, $post_id)) {
    echo '⛔ Нет данных для генерации документа.';
    return;
}

$field_group_key = get_post_meta($post_id, 'acf_template_slug', true);
if (!$field_group_key) {
    echo '⛔ Не передан ключ группы.';
    return;
}

$values = get_fields($post_id);
$field_objects = acf_get_fields($field_group_key);


$acf_template_slug = get_post_meta($post_id, 'acf_template_slug', true);

// Попробуем найти ACF-группу по ключу
$acf_group = acf_get_field_group($acf_template_slug);

// Название формы (если найдено)
$form_title = $acf_group['title'] ?? 'Без названия';


echo '<style>' . file_get_contents(get_template_directory() . '/assets/css/style-form-template.css') . '</style>';



    echo "<div class='border rounded bg-white doc-page'>";
            // Вывод заголовка
            echo '<div class="doc-title-h2">' . esc_html($form_title) . '</div>';

            foreach ($field_objects as $field) {
                // Если это раздел (tab), выводим как заголовок
                if ($field['type'] === 'tab') {
                    echo '<div class="doc-title-h3">' . esc_html($field['label']) . '</div>';
                    continue;
                }

                // // Пропустить пустые значения
                // if (empty($values[$field['name']])) {
                //     continue;
                // }

                $label = esc_html($field['label']);
                $value = $values[$field['name']];
                $value = is_array($value) ? implode(', ', $value) : $value;
                $value = esc_html($value);

                echo "<div class='field-label mb-3'><strong>{$label}:</strong> {$value}</div>";
    
            }
    echo "</div>";
?>
