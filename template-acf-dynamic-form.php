<?php
/**
 * Template Name: ACF Dynamic Form
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

// Строим ключ группы на основе slug (заменяем дефисы на подчёркивания)
$form_group_key = 'group_' . str_replace('-', '_', $slug);

// Проверка: существует ли такая группа в ACF (по ключу)
if (!acf_get_field_group($form_group_key)) {
    echo '<div class="container"><p>Форма не найдена или не подключена к ACF.</p></div>';
    get_footer();
    exit;
}

?>


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
                                'post_type'   => 'document',
                                'post_status' => 'publish'
                            ],
                            'field_groups'  => [$form_group_key],
                            'submit_value' => false,
                            'return' => false, // ❗ без перехода
                            'honeypot' => false,
                            'form_attributes' => ['id' => 'json-form']
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
                <div class=" dynamic-scale mx-auto" id="doc-print-content">
                    <?php get_template_part('template-parts/doc-preview'); ?>
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
            <div class="col-12 col-lg-6">
                <div class="doc-page scale-preview">
                    <?php get_template_part('doc-preview'); ?>
                </div>
            </div>
        </div>





    </div>
</div>

<script>
(function($){
    console.log("🔍 ACF debug started");

    // Проверим, что форма вообще существует
    const form = $('#json-form');
    if (!form.length) {
        console.warn("⚠️ Форма #json-form не найдена в DOM");
    } else {
        console.log("✅ Форма найдена: #json-form");
    }

    // Проверим подключен ли ACF
    if (typeof acf === 'undefined') {
        console.error("❌ ACF не подключен (acf не определён)");
    } else {
        console.log("✅ ACF доступен:", acf);

        // Подключим дебаг по отправке
        acf.addAction('prepare_for_ajax', function($form){
            console.log("📤 prepare_for_ajax: форма отправляется через ACF", $form);
        });

        acf.addAction('submit_success', function($form, response){
            console.log("🎯 submit_success: отправка прошла УСПЕШНО!");
            console.log("📦 Ответ:", response);

            const postId = response?.data?.post_id;
            console.log("🆔 Получен post ID:", postId);

            if (postId) {
                const downloadUrl = `/wp-admin/admin-ajax.php?action=generate_pdf&doc_id=${postId}`;
                console.log("📥 Переход к PDF:", downloadUrl);
                window.location.href = downloadUrl;
            } else {
                console.error("🚫 postId пустой или не получен");
            }
        });

        acf.addAction('submit_fail', function($form, e){
            console.error("❌ submit_fail: ошибка при сабмите", e);
        });
    }
})(jQuery);
</script>

<script>
    // Проверим: работает ли вообще JS

(function($){
    console.log("📣 ACF Submit Script loaded");

    acf.addAction('prepare_for_ajax', function($form){
        console.log("📤 prepare_for_ajax: ACF начал отправку");
    });

    acf.addAction('submit_success', function($form, response){
        console.log("📨 Ответ от ACF:", response);

        const postId = response?.data?.post_id;
        console.log("📌 Получен post ID через submit_success:", postId);

        if (postId && postId !== 'new_post') {
            window.location.href = '/wp-admin/admin-ajax.php?action=generate_pdf&doc_id=' + postId;
        } else {
            console.error("❌ Post ID не получен");
        }
    });
})(jQuery);



</script>








<script>
// ### 1. ✅ Авто-масштаб предпросмотра PDF
function scalePreviewToFit() {
        const preview = document.querySelector('.doc-page');
        const container = document.querySelector('.doc-preview-container');
        if (!preview || !container) return;

        const originalWidth = 210 * 3.7795; // A4 в пикселях ≈ 794px
        const containerWidth = container.clientWidth;

        const scale = containerWidth / originalWidth;
        preview.style.transform = `scale(${scale})`;
    }

    // Запуск при загрузке и изменении окна
    window.addEventListener('load', scalePreviewToFit);
    window.addEventListener('resize', scalePreviewToFit);


// ### 2. ✅ Скрипт прогресс-бара + пошаговая навигация
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('#json-form') || document.querySelector('.acf-form form');
    if (!form) return;

    const fieldsWrapper = form.querySelector('.acf-fields');
    const submitBtn = form.querySelector('input[type=submit]');
    if (submitBtn) {
        submitBtn.style.display = 'none'; // спрячем до последнего шага
        submitBtn.classList.add('btn', 'btn-success', 'ms-auto');
    }


    // Найдём все заголовки табов
    const tabLabels = [...fieldsWrapper.querySelectorAll('.acf-field-tab')];
    const stepTitles = tabLabels.map(tab => tab.querySelector('.acf-label')?.innerText.trim());

    // Группировка полей по шагам
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

    // Создаём визуальные шаги
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

    // ### 4. ✅ Подсчёт заполненных полей (прогресс%)
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


    function clearNav() {
        form.querySelectorAll('.acf-nav').forEach(nav => nav.remove());
    }

    // ### 5. ✅ Навигационные кнопки (назад, далее, сохранить)
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
            finishBtn.onclick = () => showStep(steps.length); // финальный шаг
            nav.appendChild(finishBtn);
        }

        fieldsWrapper.appendChild(nav);
    }


// ### 6. ✅ Скрытие/показ блоков формы и оплаты
function showStep(index) {
    currentStep = index;

    // Показываем нужную группу полей
    steps.forEach((group, i) => {
        group.forEach(el => {
            el.style.display = i === index ? 'block' : 'none';
        });
    });

    // Превью всегда видно
    const previewWrapper = document.getElementById('doc-preview-wrapper');
    previewWrapper?.classList.remove('d-none');
    updatePreviewFields();

    // Переключаем форму и оплату
    const formWrapper = document.getElementById('acf-form-wrapper');
    const paymentWrapper = document.getElementById('payment-wrapper');

    if (index === steps.length) {
        formWrapper?.classList.add('d-none');
        paymentWrapper?.classList.remove('d-none');
    } else {
        formWrapper?.classList.remove('d-none');
        paymentWrapper?.classList.add('d-none');
    }

    // Обновим прогресс
    updateProgress(index);

    // Привязка live-обновления
    // ### 7. ✅ Live-обновление предпросмотра при вводе
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

    // Получаем ID созданного документа из скрытого поля
    const savedPostId = document.querySelector('#acf-saved-post-id')?.value;
    console.log('📌 Сохранённый пост:', savedPostId);

    clearNav();
    renderNav(index);
}




// ### 3. ✅ Формирование предпросмотра документа (preview)

    function updatePreviewFields() {
        document.querySelectorAll('.doc-field').forEach(field => {
            const name = field.dataset.source;
            const input = form.querySelector(`[name="${name}"]`);

            if (input) {
                const value = input.value?.trim() || '—';
                field.textContent = value;
            }
        });
    }


     // Привязка live-обновлений на поля
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


    // Включаем кликабельность шагов
    document.querySelectorAll('.progress-nav-item').forEach(item => {
        item.addEventListener('click', function () {
            const stepIndex = parseInt(this.dataset.step);
            if (!isNaN(stepIndex)) {
                showStep(stepIndex);
            }
        });
    });


    function updatePreviewFields() {
        const wrapper = document.getElementById('doc-preview-content');
        if (!wrapper) return;

        wrapper.innerHTML = ''; // Очищаем перед генерацией

        [...form.querySelectorAll('.acf-fields > .acf-field')].forEach(field => {
            const type = field.dataset.type;
            const label = field.querySelector('.acf-label label')?.innerText.trim();

            if (type === 'tab') {
                const tab = document.createElement('h3');
                tab.className = 'text-uppercase mt-10 mb-3';
                tab.textContent = label;
                wrapper.appendChild(tab);
            } else {
                const input = field.querySelector('input, textarea, select');
                if (!input || input.type === 'hidden') return;

                const value = (input.type === 'checkbox' || input.type === 'radio')
                    ? (input.checked ? input.value : '')
                    : input.value?.trim();

                const paragraph = document.createElement('p');
                paragraph.className = 'mb-3';
                paragraph.innerHTML = `<strong>${label}:</strong> ${value || '<span class="text-muted">_____</span>'}`;

                wrapper.appendChild(paragraph);
            }
        });
    }








    // ### 10. ✅ Инициализация шага №0
    showStep(0);
    updatePreviewFields(); // 👈 вот это добавь
  
});
</script>

<script>
(function($){
    console.log("📣 ACF Submit Script loaded");

    acf.addAction('submit_success', function($form, response){
        console.log("🎯 submit_success сработал!");
        console.log("📦 Ответ:", response);

        const postId = response?.data?.post_id;

        if (postId) {
            console.log("📌 Получен post ID:", postId);

            // Генерируем PDF на сервере и скачиваем
            const pdfUrl = `/wp-admin/admin-ajax.php?action=generate_pdf&doc_id=${postId}`;
            console.log("📥 Скачиваем PDF:", pdfUrl);
            window.location.href = pdfUrl;
        } else {
            console.error("❌ postId не получен");
        }
    });

    acf.addAction('submit_fail', function($form, e){
        console.error("❌ submit_fail", e);
    });

    acf.addAction('prepare_for_ajax', function($form){
        console.log("📤 prepare_for_ajax: форма отправляется");
    });
})(jQuery);
</script>



<script>
// ### 9. ✅ Ручной submit формы по кнопке
document.addEventListener('DOMContentLoaded', function () {
    const saveBtn = document.getElementById('save-project');
    const form = document.getElementById('json-form');

    if (saveBtn && form) {
        saveBtn.addEventListener('click', function (e) {
            e.preventDefault();
            form.requestSubmit(); // 👉 отправка формы
        });
    }
});
</script>




                        <!--begin::Footer-->
                        <div id="kt_app_footer" class="app-footer">
                            <!--begin::Footer container-->
                            <div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                                <!--begin::Copyright-->
                                <div class="text-gray-900 order-2 order-md-1">
                                    <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                                </div>
                                <!--end::Copyright-->
                                <!--begin::Menu-->
                                <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                    <li class="menu-item">
                                        <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                                    </li>
                                </ul>
                                <!--end::Menu-->
                            </div>
                            <!--end::Footer container-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->
<script>
  console.log("✅ Проверка — JS работает");
</script>


<?php get_footer(); ?>
