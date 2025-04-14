<?php
$form_slug = $args['slug'] ?? null;
$json_path = get_template_directory() . "/forms/definitions/{$form_slug}.json";
$form = file_exists($json_path) ? json_decode(file_get_contents($json_path), true) : null;
$step_index = 0;
$debug = [];

if (!$form_slug) {
    $debug[] = "❌ form_slug не передан в render.php";
    return;
}
if (!file_exists($json_path)) {
    $debug[] = "❌ JSON-файл НЕ НАЙДЕН: {$json_path}";
    return;
}
if (!$form || !isset($form['sections'])) {
    $debug[] = "❌ Не удалось декодировать JSON";
    return;
}

$debug[] = "✅ form_slug: {$form_slug}";
$debug[] = "📄 JSON путь: {$json_path}";
$debug[] = "✅ JSON успешно декодирован, секций: " . count($form['sections']);
?>

<!-- 🔵 BEGIN: FULL-WIDTH PROGRESS HEADER -->
<div style="background-color: #0b0c10;margin-top: -40px;" class=" py-10 mb-5">
    <div class="app-container container-xxl">
        <div class="d-flex flex-column gap-4">
            <!-- Секции формы (метки шагов) -->
            <div class="d-flex justify-content-between">
                <?php foreach ($form['sections'] as $section): ?>
                    <div class="fw-bold text-muted text-uppercase fs-7 flex-grow-1 text-center progress-nav-item"
                         data-jump-to="<?php echo esc_attr($section['label']); ?>"
                         style="cursor:pointer;">
                        <?php echo esc_html($section['label']); ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Прогресс-бар -->
            <div class="progress progress-sm w-100" style="height: 6px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
</div>
<!-- 🔵 END -->

<!-- 🔲 BEGIN: CONTENT AREA -->
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-xxl">

        <div id="form_loader">Загрузка формы...</div>

        <div id="form_wrapper" style="display: none;">
            <div class="row">
                <!-- 🔹 Левая колонка — форма -->
                <div class="col-lg-8">
                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <form class="form-wizard" data-json-form="1" data-form="<?php echo esc_attr($form_slug); ?>">
                                <?php foreach ($form['sections'] as $section): ?>
                                    <?php foreach ($section['steps'] as $step): ?>
                                        <?php
                                        $faq_json = isset($step['faq']) ? htmlspecialchars(json_encode($step['faq']), ENT_QUOTES, 'UTF-8') : '[]';
                                        ?>
                                        <div class="form-step mb-5 <?php echo $step_index === 0 ? 'active' : ''; ?>"
                                             data-step="<?php echo $step_index; ?>"
                                             data-section="<?php echo esc_attr($section['label']); ?>"
                                             data-faq='<?php echo $faq_json; ?>'>
                                            <h3 class="mb-3"><?php echo esc_html($section['label']); ?></h3>
                                            <?php
                                            $type = $step['type'];
                                            $step_file = get_template_directory() . "/template-parts/forms/steps/step-{$type}.php";
                                            if (file_exists($step_file)) {
                                                include($step_file);
                                            } else {
                                                echo "<div class='alert alert-warning'>⚠️ Шаблон для поля '{$type}' не найден.</div>";
                                            }
                                            ?>
                                        </div>
                                        <?php $step_index++; ?>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>

                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn btn-light prev-step">← Назад</button>
                                    <button type="button" class="btn btn-primary next-step">Далее →</button>
                                    <button type="button" class="btn btn-success submit-form d-none">Отправить</button>
                                </div>

                                <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const form = document.querySelector('#json-form');
                                    if (!form) return;

                                    form.addEventListener('submit', function (e) {
                                        e.preventDefault();

                                        const formData = {};
                                        new FormData(form).forEach((value, key) => {
                                            formData[key] = value;
                                        });

                                        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/x-www-form-urlencoded'
                                            },
                                            body: new URLSearchParams({
                                                action: 'save_json_form',
                                                form_slug: 'business-plan',
                                                form_data: JSON.stringify(formData)
                                            })
                                        })
                                        .then(response => response.json())
                                        .then(res => {
                                            if (res.success) {
                                                alert(res.data.message);
                                                window.location.href = res.data.redirect;
                                            } else {
                                                alert('Ошибка: ' + res.data.message);
                                            }
                                        });
                                    });
                                });
                                </script>
                                <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const form = document.querySelector('#json-form');
                                    const steps = document.querySelectorAll('.form-step');
                                    const submitButton = document.querySelector('#final-submit-button');

                                    let currentStep = 0;

                                    function showStep(step) {
                                        steps.forEach((s, i) => {
                                            s.style.display = i === step ? 'block' : 'none';
                                        });

                                        // Показать кнопку отправки, если это последний шаг
                                        if (step === steps.length - 1) {
                                            submitButton.classList.remove('d-none');
                                        } else {
                                            submitButton.classList.add('d-none');
                                        }
                                    }

                                    showStep(currentStep); // Показываем первый шаг

                                    // Для примера добавим навигацию по шагам
                                    document.querySelectorAll('.next-step').forEach(btn => {
                                        btn.addEventListener('click', () => {
                                            if (currentStep < steps.length - 1) {
                                                currentStep++;
                                                showStep(currentStep);
                                            }
                                        });
                                    });

                                    document.querySelectorAll('.prev-step').forEach(btn => {
                                        btn.addEventListener('click', () => {
                                            if (currentStep > 0) {
                                                currentStep--;
                                                showStep(currentStep);
                                            }
                                        });
                                    });
                                });
                                </script>



                            </form>
                        </div>
                    </div>
                </div>

                <!-- 🔸 Правая колонка — динамический FAQ -->
                <div class="col-lg-4">
                    <div class="card card-custom bg-light mb-5">
                        <div class="card-header">
                            <h3 class="card-title">Frequently Asked Questions</h3>
                        </div>
                        <div class="card-body" id="faq-body">
                            <p class="text-muted">Здесь будут подсказки по шагам формы.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 🧪 Отладка -->
            <?php if (!empty($debug)) : ?>
                <div style="margin-top: 30px; padding: 20px; background: #f1f1f1;">
                    <h4>🧪 Отладка:</h4>
                    <ul>
                        <?php foreach ($debug as $msg): ?>
                            <li><?php echo $msg; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php
            echo "<div style='background:#e0f7fa;padding:10px;margin:20px 0;border-left:4px solid #00acc1;'>🧪 Отладка: в HTML вставлена progress-bar? ";
            if (strpos(ob_get_contents(), 'class="progress-bar') !== false) {
                echo "<strong>✅ Да</strong></div>";
            } else {
                echo "<strong>❌ Нет</strong></div>";
            }
            ?>
        </div>
    </div>
</div>
