<?php
/**
 * Template Name: ACF Dynamic Form Test
 */
acf_form_head(); // 👈 ЭТО ДОЛЖНО БЫТЬ ПЕРВЫМ!
get_header();

// переменная для вывода
$doc_id = get_the_ID();

// Определим авторизацию
$is_logged_in = is_user_logged_in();

// Включаем отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Проверка — выводим маркер загрузки шаблона
echo '<div style="padding:10px;background:#f0f0f0;border-bottom:1px solid #ccc;">🔍 Шаблон ACF Dynamic Form загружен</div>';

// Получаем текущий slug страницы
global $post;
$slug = get_post_field('post_name', $post->ID);
$form_group_key = 'group_' . str_replace('-', '_', $slug);

// Проверка: существует ли такая группа в ACF (по ключу)
if (!acf_get_field_group($form_group_key)) {
    echo '<div class="container"><p>Форма не найдена или не подключена к ACF.</p></div>';
    get_footer();
    exit;
}

?>

<script>
acf.addAction('ready_field', function(field){
    if (field.data.type === 'date_picker') {
        const $input = field.$input;
        if ($input && typeof $input.datepicker === 'function') {
            console.log('📅 Инициализируем календарь для:', field);
            $input.datepicker(field.get('picker'));
        } else {
            console.warn('⚠️ Datepicker не доступен на этом поле:', field);
        }
    }
});
</script>

        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <!--end::Theme mode setup on page load-->

        <!--begin::App-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">


            <?php //if ( is_user_logged_in() ) : ?>
                <!--begin::Header-->
                <?php get_template_part('partials/header-dashdoards-horizontal'); ?>
                <!--end::Header-->
            <?php //endif; ?>


            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                    <!--begin::Content-->
                      <!-- 🔥 Контентная часть -->
                        <!-- 🔵 BEGIN: прогресс бар FU -->
                        <!-- 🔵 BEGIN: FULL-WIDTH PROGRESS HEADER -->
                        <div id="acf-progress-wrapper" style="background-color: #044583;margin-top: -40px;" class=" py-10 mb-5">
                            <div class="app-container container-xxl">
                                <h2 class="mb-15 text-white text-uppercase"><?php echo str_replace([' Form', ' form'], '', get_the_title()); ?></h2>
                                <div class="d-flex flex-column gap-4">
                                    <!-- Секции формы (метки шагов) -->
                                    <div id="acf-progress-steps" class="d-flex justify-content-between">
                                        <!-- Метки шагов будут подставлены через JS -->
                                    </div>

                                    <!-- Прогресс-бар -->
                                    <div class="progress progress-sm w-100" style="height: 6px;">
                                        <div class="progress-bar bg-success" id="acf-progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 🔵 END -->
                        <!-- 🔵 END: прогресс бар-->           



                        <!-- 🔲 BEGIN: CONTENT AREA -->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <div class="d-flex flex-column flex-lg-row gap-5">

                                    <!-- 🔵 Форма слева -->
                                    <div class="flex-grow-1 col-12 col-lg-4" style="min-width: 0;">
                                         <div id="acf-form-wrapper">
                                            <?php
                                            $acf_group = acf_get_field_group($form_group_key);
                                            // echo '<div style="padding:10px;background:#d9edf7;border:1px solid #31708f;">';
                                            // echo '<strong>📋 Используем ACF форму:</strong><br>';
                                            // echo 'Группа: <code>' . $form_group_key . '</code><br>';
                                            // echo '</div>';
                                            // echo "<div style='background: #efe; padding: 10px;'>🧪 Используем группу: <code>$form_group_key</code></div>";

                                            // echo "<div style='background:#eef;padding:10px;margin:10px 0;'>🛠️ DEBUG:<br>";
                                            // echo "🔑 Slug: <code>$slug</code><br>";
                                            // echo "🧩 Group Key: <code>$form_group_key</code><br>";
                                            // if ($acf_group) {
                                            //     echo "✅ ACF группа найдена: <strong>{$acf_group['title']}</strong>";
                                            // } else {
                                            //     echo "❌ ACF группа НЕ найдена";
                                            // }
                                            // echo "</div>";


                                            acf_form([
                                                'post_id'       => 'new_post',
                                                'new_post'      => [
                                                    'post_type'   => 'document',
                                                    'post_status' => 'publish'
                                                ],
                                                'field_groups' => [$form_group_key], // Замени на свой ACF ключ

                                                'submit_value'  => 'Сохранить документ',

                                                'return' => add_query_arg('post_id', '%post_id%', home_url('/document-saved')),
                                                'form_attributes' => ['id' => 'acf-form']
                                            ]);
                                            ?>
                                         </div>
                                        <div id="payment-wrapper" class="d-none">
                                            <?php if (!empty($_GET['post_id'])): ?>
                                                <input type="hidden" id="acf-saved-post-id" value="<?php echo esc_attr($_GET['post_id']); ?>">
                                            <?php endif; ?>
                                            <!-- 💳 Оплата -->
                                            <div class="bg-light p-5 rounded shadow-sm">
                                                <h3 class="fw-bold mb-4">Your document is ready to download!</h3>
                                                <div class="fs-1 fw-bold text-success mb-3">$1.95 USD</div>

                                                <!-- 👇 Кнопка скачать (оплатить) -->
                                                <button type="button" class="btn btn-success w-100 mb-3" id="save-project">
                                                    Сохранить и скачать PDF
                                                </button>

                                                <div class="bg-white border rounded p-4">
                                                    <p class="mb-2"><strong>All your benefits:</strong></p>
                                                    <ul class="mb-0">
                                                        <li>✔ Instant access to legal library</li>
                                                        <li>✔ Edit & download unlimited documents</li>
                                                        <li>✔ Cancel any time</li>
                                                        <li>✔ Contact: +1 XXX XXX XXXX</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 🟢 Превью справа -->
                                    <div class=" col-12 col-lg-8" id="doc-preview-wrapper">
                                        <div class=" dynamic-scale mx-auto" id="doc-print-content">
                                            <?php //get_template_part('acf-templates/base-template'); ?>

                                            <?php 
                                                $slug = get_post_field('post_name', $post->ID);
                                                $slug = sanitize_title($slug);
                                                $slug = str_replace('-', '_', $slug); // 🧼 ← самое важное

                                                $preview_template_path = get_template_directory() . '/acf-templates/group_' . $slug . '.php';

                                                if (file_exists($preview_template_path)) {
                                                    include $preview_template_path;
                                                } else {
                                                    echo "<div class='alert alert-warning'>⚠️ Превью-шаблон не найден: <code>acf-templates/group_{$slug}.php</code></div>";
                                                }
                                            ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->

<?php get_footer(); ?>



<!-- ✅ 1. Масштабирование превью при загрузке/resize -->
<script>
function scalePreviewToFit() {
    const preview = document.querySelector('.doc-page');
    const container = document.querySelector('.doc-preview-container');
    if (!preview || !container) return;

    const originalWidth = 210 * 3.7795; // A4 в px ≈ 794
    const containerWidth = container.clientWidth;
    const scale = containerWidth / originalWidth;

    preview.style.transform = `scale(${scale})`;
}

window.addEventListener('load', scalePreviewToFit);
window.addEventListener('resize', scalePreviewToFit);
</script>

<!-- ✅ 2. Обработка отправки формы через ACF -->
<script>
acf.addAction('submit_success', function($form, response) {
    const postId = response?.data?.post_id;

    if (!postId) {
        console.error("❌ Post ID not received — cannot redirect to download page.");
        return;
    }

    const redirectUrl = `${window.location.origin}/document-saved/?post_id=${postId}`;
    console.log("🔁 Redirecting to:", redirectUrl);

    window.location.href = redirectUrl;
});
</script>

<!-- ✅ 3. Основной функционал: шаги, прогресс, превью -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#acf-form') || document.querySelector('.acf-form form');
    if (!form) {
        console.warn("⚠️ ACF форма не найдена в DOM");
        return;
    }

    const fieldsWrapper = form.querySelector('.acf-fields');
    const submitBtn = form.querySelector('input[type=submit]');
    if (submitBtn) {
        submitBtn.style.display = 'none';
        submitBtn.classList.add('btn', 'btn-success', 'ms-auto');
    }

    const tabLabels = [...fieldsWrapper.querySelectorAll('.acf-field-tab')];
    const stepTitles = tabLabels.map(tab => tab.querySelector('.acf-label')?.innerText.trim());
    const steps = stepTitles.map(() => []);
    let currentGroup = -1;

    [...fieldsWrapper.children].forEach(el => {
        if (el.classList.contains('acf-field-tab')) {
            currentGroup++;
        } else if (currentGroup >= 0) {
            steps[currentGroup].push(el);
        }
    });



    if (!steps.length) return;

    // Создаем шаги в прогресс-баре
    const stepsWrapper = document.querySelector('#acf-progress-steps');
    const progressBar = document.querySelector('#acf-progress-bar');

    stepTitles.forEach((title, index) => {
        const div = document.createElement('div');
        div.className = 'fw-bold text-muted text-uppercase fs-7 flex-grow-1 text-center progress-nav-item';
        div.textContent = title;
        div.dataset.step = index;
        div.style.cursor = 'pointer';
        stepsWrapper.appendChild(div);
    });

    let currentStep = 0;

    function updateProgress() {
        const allInputs = steps.flatMap(group =>
            group.flatMap(field =>
                [...field.querySelectorAll('input, textarea, select')].filter(el =>
                    el.type !== 'hidden' && !el.disabled && !el.closest('.acf-hidden-by-conditional-logic')
                )
            )
        );

        const filledCount = allInputs.filter(input => {
            return input.type === 'checkbox' || input.type === 'radio' ? input.checked : input.value.trim().length > 0;
        }).length;

        const percent = Math.round((filledCount / allInputs.length) * 100) || 0;
        progressBar.style.width = percent + '%';
        progressBar.setAttribute('aria-valuenow', percent);

        document.querySelectorAll('.progress-nav-item').forEach((item, i) => {
            item.classList.toggle('text-white', i === currentStep);
            item.classList.toggle('text-muted', i !== currentStep);
            item.classList.toggle('fw-bold', i === currentStep);
        });
    }

    function clearNav() {
        form.querySelectorAll('.acf-nav').forEach(nav => nav.remove());
    }

    function renderNav(index) {
        const nav = document.createElement('div');
        nav.className = 'acf-nav d-flex justify-content-between mt-5';

        if (index > 0) {
            const backBtn = document.createElement('button');
            backBtn.type = 'button';
            backBtn.className = 'btn btn-secondary';
            backBtn.textContent = '← Назад';
            backBtn.onclick = () => showStep(index - 1);
            nav.appendChild(backBtn);
        }

        if (index < steps.length - 1) {
            const nextBtn = document.createElement('button');
            nextBtn.type = 'button';
            nextBtn.className = 'btn btn-primary ms-auto';
            nextBtn.textContent = 'Далее →';
            nextBtn.onclick = () => showStep(index + 1);
            nav.appendChild(nextBtn);
        }

        if (index === steps.length - 1) {
            const finishBtn = document.createElement('button');
            finishBtn.type = 'button';
            finishBtn.className = 'btn btn-success ms-auto';
            finishBtn.textContent = 'Continue to Download →';
            finishBtn.onclick = () => showStep(steps.length);
            nav.appendChild(finishBtn);
        }

        fieldsWrapper.appendChild(nav);
    }

    function showStep(index) {
        currentStep = index;

        steps.forEach((group, i) => {
            group.forEach(el => {
                el.style.display = i === index ? 'block' : 'none';
            });
        });

        const previewWrapper = document.getElementById('doc-preview-wrapper');
        previewWrapper?.classList.remove('d-none');

        const formWrapper = document.getElementById('acf-form-wrapper');
        const paymentWrapper = document.getElementById('payment-wrapper');

        if (index === steps.length) {
            formWrapper?.classList.add('d-none');
            paymentWrapper?.classList.remove('d-none');
        } else {
            formWrapper?.classList.remove('d-none');
            paymentWrapper?.classList.add('d-none');
        }

        updateProgress();
        updatePreviewFields();

        form.querySelectorAll('input, textarea, select').forEach(input => {
            input.addEventListener('input', () => {
                updateProgress();
                updatePreviewFields();
            });

            input.addEventListener('change', () => {
                updateProgress();
                updatePreviewFields();
            });
        });

        clearNav();
        renderNav(index);
    }

    // ✅ Автозаполнение предпросмотра документа
    function updatePreviewFields() {
        console.log("🔄 Обновляем предпросмотр...");
        document.querySelectorAll('.doc-field').forEach(field => {
            const name = field.dataset.source;
            let input = form.querySelector(`[name="acf[${name}]"]`);

            if (!input) {
                const wrapper = form.querySelector(`[data-key="field_${name}"]`);
                input = wrapper?.querySelector('input, textarea, select');
            }

            let value = '—';
            if (input) {
                if (input.type === 'checkbox' || input.type === 'radio') {
                    value = input.checked ? input.value : '—';
                } else {
                    value = input.value?.trim() || '—';
                }
            }

            field.textContent = value;
        });
    }

    // 🖱️ Клик по шагам прогресса
    document.querySelectorAll('.progress-nav-item').forEach(item => {
        item.addEventListener('click', function () {
            const stepIndex = parseInt(this.dataset.step);
            if (!isNaN(stepIndex)) {
                showStep(stepIndex);
            }
        });
    });

    // Инициализация
    showStep(0);
    updatePreviewFields();
});
</script>

<!-- ✅ 4. Ручная отправка формы с кнопки -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const saveBtn = document.getElementById('save-project');
    const form = document.getElementById('acf-form');

    if (saveBtn && form) {
        saveBtn.addEventListener('click', function (e) {
            e.preventDefault();
            form.requestSubmit(); // Отправка формы вручную
        });
    }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Подключим datepicker только если jQuery UI действительно доступен
    if (typeof jQuery.ui !== 'undefined' && typeof jQuery.fn.datepicker === 'function') {
        console.log('📅 jQuery UI Datepicker доступен, инициализируем...');

        acf.addAction('ready_field', function(field){
            if (field.data.type === 'date_picker') {
                const $input = field.$input;

                if ($input && typeof $input.datepicker === 'function') {
                    console.log('📅 Datepicker активирован для:', $input);
                    $input.datepicker(field.get('picker'));
                }
            }
        });
    } else {
        console.warn('⚠️ Datepicker не найден в jQuery UI');
    }
});
</script>
<?php
// Проверим — загружены ли нужные скрипты и стили
// echo '<div style="padding:15px;background:#eef;border:1px solid #99f;margin-top:40px;">';
// echo '<strong>Debug info (Date Picker):</strong><br>';

// if (wp_script_is('jquery-ui-datepicker', 'enqueued')) {
//     echo '✅ jQuery UI Datepicker JS подключен<br>';
// } else {
//     echo '❌ jQuery UI Datepicker JS <b>не</b> подключен<br>';
// }

// if (wp_style_is('jquery-ui-style', 'enqueued')) {
//     echo '✅ jQuery UI стили подключены<br>';
// } else {
//     echo '❌ jQuery UI стили <b>не</b> подключены<br>';
// }

// if (wp_script_is('acf-input', 'enqueued')) {
//     echo '✅ ACF Input JS подключен<br>';
// } else {
//     echo '❌ ACF Input JS <b>не</b> подключен<br>';
// }

// if (wp_style_is('acf-input', 'enqueued')) {
//     echo '✅ ACF Input CSS подключен<br>';
// } else {
//     echo '❌ ACF Input CSS <b>не</b> подключен<br>';
// }

// echo '</div>';
?>