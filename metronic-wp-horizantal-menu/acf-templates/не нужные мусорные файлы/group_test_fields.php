<?php
echo "<div class='border rounded bg-white doc-page'>";
echo '<div class="doc-title-h2">' . esc_html($form_title) . '</div>';

foreach ($field_objects as $field) {
    if ($field['type'] === 'tab') {
        echo '<div class="doc-title-h3">' . esc_html($field['label']) . '</div>';
        continue;
    }

    $label = esc_html($field['label']);
    $value = $values[$field['name']] ?? '';
    $value = is_array($value) ? implode(', ', $value) : esc_html($value);

    echo "<div class='field-label mb-3'><strong>{$label}:</strong> {$value}</div>";
}
echo "</div>";
