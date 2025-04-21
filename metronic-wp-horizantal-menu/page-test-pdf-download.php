<?php
/**
 * Template Name: Единный PDF шаблон для форм
 */
acf_form_head(); // 👈 ЭТО ДОЛЖНО БЫТЬ ПЕРВЫМ!
get_header();

// Получаем текущий slug страницы
global $post;
$slug = get_post_field('post_name', $post->ID);

// Преобразуем слаг страницы в ключ группы
$form_group_key = 'group_' . str_replace('-', '_', $slug);

// При сабмите формы — сохраняем название группы в метаполе
add_filter('acf/pre_save_post', function($post_id) use ($form_group_key) {
    if ($post_id === 'new_post') {
        add_action('acf/save_post', function($new_post_id) use ($form_group_key) {
            update_post_meta($new_post_id, 'acf_template_slug', $form_group_key);
            error_log("📝 ACF шаблон сохранён: $form_group_key → $new_post_id");
        }, 20);
    }
    return $post_id;
});

// Проверка: существует ли такая группа в ACF (по ключу)
if (!acf_get_field_group($form_group_key)) {
    echo '<div class="container"><p>Форма не найдена или не подключена к ACF.</p></div>';
    get_footer();
    exit;


}




// Включаем отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Проверка — выводим маркер загрузки шаблона
echo '<div style="padding:10px;background:#f0f0f0;border-bottom:1px solid #ccc;">🔍 Шаблон ACF Dynamic Form загружен</div>';
?>

        <!-- Решение: вручную активировать DatePicker -->
        <script>
        jQuery(document).ready(function ($) {
            $('.acf-date-picker input[type="text"]').each(function () {
                const $input = $(this);

                // Если datepicker ещё не применён
                if (!$input.hasClass('hasDatepicker')) {
                    console.log('📅 Applying datepicker manually...');
                    $input.datepicker({
                        dateFormat: 'dd/mm/yy',
                        changeMonth: true,
                        changeYear: true,
                        showAnim: "fadeIn"
                    });
                }
            });
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
                                            <div class="flex-grow-1 col-12 col-lg-6" style="min-width: 0;">
                                                 <div id="acf-form-wrapper">
                                                    <?php
                                                    acf_form([
                                                        'post_id' => 'new_post',
                                                        'new_post' => [
                                                            'post_type' => 'document',
                                                            'post_status' => 'publish',
                                                        ],
                                                        'field_groups' => [$form_group_key], // Замени на свой ACF ключ
                                                        'submit_value' => 'Сохранить и Скачать PDF',
                                                        'return' => add_query_arg('post_id', '%post_id%', home_url('/document-saved')), // 👈 переход на новую страницу
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
                                                        <button type="submit" class="btn btn-success w-100 mb-3" id="save-project">
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

                                            <div class=" col-12 col-lg-6" id="doc-preview-wrapper">
                                                <div >
                                                    <div id="doc-print-content" class="transform-scale fs-6 lh-lg" style="transform-origin: top left;">
                                                        <?php get_template_part('template-parts/doc-preview'); ?>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>


                                        <!-- ✅ Финальный экран: оплата + предпросмотр -->
                                        <div id="final-payment-screen" class="d-none d-flex flex-column flex-lg-row gap-5 mt-10">
                                            <!-- Левая колонка: блок оплаты -->
                                            <div class="col-12 col-lg-6">
                                                <div class="bg-light p-5 rounded shadow-sm h-100">
                                                    <h3 class="fw-bold mb-4">Your document is ready to download!</h3>
                                                    <div class="fs-1 fw-bold text-success mb-3">$1.95 USD</div>
                                                    <button class="btn btn-success w-100 mb-3">Download</button>
                                                    <div class="small text-muted text-center mb-3">7-Day Access</div>
                                                    <div class="bg-white border rounded p-4">
                                                        <p class="mb-2"><strong>All your benefits:</strong></p>
                                                        <ul class="mb-0">
                                                            <li>✔ Instant access to legal library</li>
                                                            <li>✔ Edit & download unlimited documents</li>
                                                            <li>✔ Cancel any time</li>
                                                            <li>✔ Contact: +1 855 997 0206</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Правая колонка: предпросмотр -->
<!--                                        <div class="col-12 col-lg-6">
                                                <div class="doc-page scale-preview">
                                                    <?php get_template_part('doc-preview'); ?>
                                                </div>
                                            </div> -->
                                        </div>

                                    </div>
                                </div>




<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.acf-form form');
    if (!form) return;

    function updateLivePreview() {
        document.querySelectorAll('[data-source]').forEach(el => {
            const source = el.dataset.source;
            const input = form.querySelector(`[name="${source}"]`);

            if (!input) return;

            let value = '_____';

            if (input.type === 'checkbox') {
                value = input.checked ? input.value : '_____';
            } else if (input.type === 'radio') {
                const checkedRadio = form.querySelector(`[name="${source}"]:checked`);
                value = checkedRadio ? checkedRadio.value : '_____';
            } else if (input.tagName === 'SELECT') {
                value = input.selectedOptions[0]?.text || '_____';
            } else {
                value = input.value?.trim() || '_____';
            }

            el.textContent = value;
        });
    }

    // Следим за всеми полями
    form.querySelectorAll('input, textarea, select').forEach(input => {
        input.addEventListener('input', updateLivePreview);
        input.addEventListener('change', updateLivePreview);
    });

    // Инициализируем один раз
    updateLivePreview();
});
</script>



<!-- Скрипты Прогресс бара -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    // 1️⃣ Ищем ACF-форму
    const form = document.querySelector('.acf-form form');
    if (!form) return; // Если форма не найдена — выходим

    // 2️⃣ Обёртка всех полей формы (внутри .acf-form)
    const fieldsWrapper = form.querySelector('.acf-fields');

    // 3️⃣ Прячем кнопку сабмита (по умолчанию), покажем позже
    const submitBtn = form.querySelector('input[type=submit]');
    if (submitBtn) {
        submitBtn.style.display = 'none';
        submitBtn.classList.add('btn', 'btn-success', 'ms-auto');
    }

    // 4️⃣ Сканируем все табы (в ACF они визуально делят форму на шаги)
    const tabLabels = [...fieldsWrapper.querySelectorAll('.acf-field-tab')];
    const stepTitles = tabLabels.map(tab => tab.querySelector('.acf-label')?.innerText.trim());

    // 5️⃣ Группируем поля по шагам
    const steps = stepTitles.map(() => []); // steps[0], steps[1], ...
    let currentGroup = -1;

    [...fieldsWrapper.children].forEach(el => {
        if (el.classList.contains('acf-field-tab')) {
            currentGroup++;
        } else if (currentGroup >= 0) {
            steps[currentGroup].push(el);
        }
    });

    if (!steps.length) return;

    // 6️⃣ Рендерим заголовки шагов (визуальные табы в прогресс-баре)
    const stepsWrapper = document.querySelector('#acf-progress-steps');
    const progressBar = document.querySelector('#acf-progress-bar');

    stepTitles.forEach((title, index) => {
        const div = document.createElement('div');
        div.className = 'fw-bold text-muted text-uppercase fs-7 flex-grow-1 text-center progress-nav-item';
        div.textContent = title;
        div.dataset.step = index;
        div.style.cursor = 'pointer';
        stepsWrapper?.appendChild(div);
    });

    let currentStep = 0;

    // 7️⃣ Функция: Обновляем прогрессбар
    function updateProgress() {
        const allInputs = steps.flatMap(group =>
            group.flatMap(field =>
                [...field.querySelectorAll('input, textarea, select')].filter(el =>
                    el.type !== 'hidden' && !el.disabled && !el.closest('.acf-hidden-by-conditional-logic')
                )
            )
        );

        const filledCount = allInputs.filter(input => {
            if (input.type === 'checkbox' || input.type === 'radio') {
                return input.checked;
            }
            return input.value.trim().length > 0;
        }).length;

        const percent = Math.round((filledCount / allInputs.length) * 100) || 0;

        progressBar.style.width = percent + '%';
        progressBar.setAttribute('aria-valuenow', percent);

        document.querySelectorAll('.progress-nav-item').forEach((item, i) => {
            const isActive = i === currentStep;
            item.classList.toggle('text-white', isActive);
            item.classList.toggle('text-muted', !isActive);
            item.classList.toggle('fw-bold', isActive);
        });
    }

    // 8️⃣ Функция: Показываем шаг формы по номеру
    function showStep(index) {
        currentStep = index;

        // Показываем поля текущего шага, скрываем остальные
        steps.forEach((group, i) => {
            group.forEach(el => {
                el.style.display = i === index ? 'block' : 'none';
            });
        });

        // Показываем предпросмотр
        const previewWrapper = document.getElementById('doc-preview-wrapper');
        previewWrapper?.classList.remove('d-none');

        // Обновляем предпросмотр
        updatePreviewFields();

        // Прячем/показываем форму и блок оплаты
        const formWrapper = document.getElementById('acf-form-wrapper');
        const paymentWrapper = document.getElementById('payment-wrapper');

        if (index === steps.length) {
            formWrapper?.classList.add('d-none');
            paymentWrapper?.classList.remove('d-none');
        } else {
            formWrapper?.classList.remove('d-none');
            paymentWrapper?.classList.add('d-none');
        }

        // Обновляем прогресс
        updateProgress();

        // Обновления при изменениях в форме
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

        renderNav(index);
    }

    // 9️⃣ Функция: Навигационные кнопки (← Назад, Далее →)
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

        clearNav();
        fieldsWrapper.appendChild(nav);
    }

    // 1️⃣0️⃣ Очищаем старую навигацию перед созданием новой
    function clearNav() {
        form.querySelectorAll('.acf-nav').forEach(nav => nav.remove());
    }

    // 🔁 Позволяет кликать по шагам прогресса
    document.querySelectorAll('.progress-nav-item').forEach(item => {
        item.addEventListener('click', function () {
            const stepIndex = parseInt(this.dataset.step);
            if (!isNaN(stepIndex)) {
                showStep(stepIndex);
            }
        });
    });

    // ✅ Главная функция: заполняет предпросмотр
    function updatePreviewFields() {
        const preview = document.getElementById('doc-preview-content');
        if (!preview) return;

        preview.querySelectorAll('[data-source]').forEach(el => {
            const sourceName = el.dataset.source;
            const input = form.querySelector(`[name="${sourceName}"]`);

            if (!input) return;

            let value = '_____';
            if (input.type === 'checkbox' || input.type === 'radio') {
                if (input.checked) value = input.value;
            } else {
                value = input.value?.trim() || '_____';
            }

            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                el.value = value;
            } else {
                el.textContent = value;
            }
        });
    }


    // 1️⃣1️⃣ Запускаем первый шаг
    showStep(0);
    updatePreviewFields();
});
</script>


<!-- Скрипты которые работают с PDF документом -->
<script>
    // ### 1. ✅ Авто-масштаб предпросмотра PDF
    function scaleBootstrapPreview() {
        const preview = document.querySelector('.transform-scale');
        const container = preview?.parentElement;

        if (!preview || !container) return;

        const originalWidth = 794; // A4 в px при 96dpi
        const containerWidth = container.clientWidth;

        if (containerWidth === 0) return;

        const scale = containerWidth / originalWidth;
        preview.style.transform = `scale(${scale})`;
        preview.style.transformOrigin = 'top left';
    }

    window.addEventListener('load', () => setTimeout(scaleBootstrapPreview, 100));
    window.addEventListener('resize', scaleBootstrapPreview);
</script>


<script>
// // ### 9. ✅ Ручной submit формы по кнопке
// document.addEventListener('DOMContentLoaded', function () {
//     const saveBtn = document.getElementById('save-project');
//     const form = document.getElementById('json-form');

//     if (saveBtn && form) {
//         saveBtn.addEventListener('click', function (e) {
//             e.preventDefault();
//             form.requestSubmit(); // 👉 отправка формы
//         });
//     }
// });
</script>




<?php
// Проверим — загружены ли нужные скрипты и стили
echo '<div style="padding:15px;background:#eef;border:1px solid #99f;margin-top:40px;">';
echo '<strong>Debug info (Date Picker):</strong><br>';

if (wp_script_is('jquery-ui-datepicker', 'enqueued')) {
    echo '✅ jQuery UI Datepicker JS подключен<br>';
} else {
    echo '❌ jQuery UI Datepicker JS <b>не</b> подключен<br>';
}

if (wp_style_is('jquery-ui-style', 'enqueued')) {
    echo '✅ jQuery UI стили подключены<br>';
} else {
    echo '❌ jQuery UI стили <b>не</b> подключены<br>';
}

if (wp_script_is('acf-input', 'enqueued')) {
    echo '✅ ACF Input JS подключен<br>';
} else {
    echo '❌ ACF Input JS <b>не</b> подключен<br>';
}

if (wp_style_is('acf-input', 'enqueued')) {
    echo '✅ ACF Input CSS подключен<br>';
} else {
    echo '❌ ACF Input CSS <b>не</b> подключен<br>';
}

echo '</div>';
?>

<?php get_footer(); ?>