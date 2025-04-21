<?php
// Должна быть переменная $fields доступна
if (!$fields) return;

echo '<h1 style="text-align:center;">📄 Бизнес-план</h1>';

foreach ($fields as $key => $value) {
    $label = ucwords(str_replace('_', ' ', $key));
    $value = is_array($value) ? implode(', ', $value) : $value;
    echo "<p><strong>{$label}:</strong> " . esc_html($value) . "</p>";
}
?>
