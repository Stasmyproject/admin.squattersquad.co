<?php
/**
 * Универсальный рендер JSON-формы на основе slug-а
 * Пример slug: advance-directive → значит загружаем forms/definitions/advance-directive.json
 */

$form_slug = $args['slug'] ?? null;

// Если slug не передан — ничего не выводим
if (!$form_slug) {
    echo '<p><strong>Ошибка:</strong> slug формы не передан.</p>';
    return;
}

// Путь до JSON-файла
$json_path = get_template_directory() . "/forms/definitions/{$form_slug}.json";

// Проверка: существует ли такой JSON
if (!file_exists($json_path)) {
    echo "<p><strong>Ошибка:</strong> шаблон формы '{$form_slug}' не найден.</p>";
    return;
}

// Загружаем и декодируем JSON
$form_data = json_decode(file_get_contents($json_path), true);
$steps = $form_data['steps'] ?? [];

echo '<div class="document-form">';
echo '<h2>' . esc_html($form_data['title']) . '</h2>';

// Проходимся по шагам и отрисовываем каждый
foreach ($steps as $step) {
    $type = $step['type'] ?? 'text'; // если тип не указан — по умолчанию text
    get_template_part("template-parts/forms/steps/step", $type, ['step' => $step]);
}

echo '</div>';
