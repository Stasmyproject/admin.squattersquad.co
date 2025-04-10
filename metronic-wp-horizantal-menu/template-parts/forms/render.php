<?php
// 📌 Получаем slug формы, переданный через get_template_part
$form_slug = $args['slug'] ?? 'business-plan';
$json_path = get_template_directory() . "/forms/definitions/{$form_slug}.json";

if (!file_exists($json_path)) {
    echo "<div class='alert alert-danger'>❌ JSON-файл формы '{$form_slug}' не найден.</div>";
    return;
}

$form = json_decode(file_get_contents($json_path), true);
$step_index = 0;
?>

<!-- ⏳ Лоадер -->
<div id="form_loader">Загрузка формы...</div>

<!-- 🧩 Основной контейнер -->
<div id="form_wrapper" style="display: none;">
    <form class="form-wizard" data-json-form="1" data-form="<?php echo esc_attr($form_slug); ?>">
        <!-- Прогресс-бар -->
        <div class="progress progress-sm mb-4">
            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <!-- 🚶 Шаги -->
        <?php foreach ($form['sections'] as $section): ?>
            <?php foreach ($section['steps'] as $step): ?>
                <div class="form-step mb-5 <?php echo $step_index === 0 ? 'active' : ''; ?>" data-step="<?php echo $step_index; ?>">
                    <h3 class="mb-3"><?php echo esc_html($section['label']); ?></h3>
                    <?php
                        $type = $step['type'];
                        $step_file = get_template_directory() . "/template-parts/forms/steps/step-{$type}.php";
                        if (file_exists($step_file)) {
                            include($step_file);
                        } else {
                            echo "<div class='alert alert-warning'>⚠️ Шаблон для '{$type}' не найден.</div>";
                        }
                    ?>
                </div>
                <?php $step_index++; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <!-- 🔘 Кнопки -->
        <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-light prev-step">← Назад</button>
            <button type="button" class="btn btn-primary next-step">Далее →</button>
            <button type="button" class="btn btn-success submit-form d-none">Отправить</button>
        </div>
    </form>
</div>
