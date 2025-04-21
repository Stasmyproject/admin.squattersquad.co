<?php
/**
 * Template Name: Business Plan Form
 */
acf_form_head();
get_header();
?>

<div class="container my-5">
    <h2 class="mb-4">Создание бизнес-плана</h2>

    <?php
    acf_form([
        'post_id'       => 'new_post',
        'new_post'      => [
            'post_type'   => 'document',
            'post_status' => 'publish'
        ],
        'field_groups'  => ['group_business_plan'], // ключ группы, см. ниже
        'submit_value'  => 'Сохранить бизнес-план',
        'return'        => home_url('/kabinet/'), // редирект после сохранения
        'form_attributes' => ['id' => 'json-form']
    ]);
    ?>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('.acf-tab-wrap .acf-tab-button');
    const fieldGroups = document.querySelectorAll('.acf-field-tab');
    const form = document.querySelector('#json-form') || document.querySelector('.acf-form form');

    if (!tabs.length || !form) return;

    const fieldsWrapper = form.querySelector('.acf-fields');

    const steps = [];
    let currentStep = 0;

    // Скрыть стандартную кнопку ACF
    const submitBtn = form.querySelector('input[type=submit]');
    if (submitBtn) submitBtn.style.display = 'none';

    // Найти все блоки полей после табов
    const groups = Array.from(fieldsWrapper.children).reduce((acc, el) => {
        if (el.classList.contains('acf-field-tab')) {
            acc.push([]);
        } else if (acc.length) {
            acc[acc.length - 1].push(el);
        }
        return acc;
    }, []);

    function renderNavigation(stepIndex) {
        const navWrapper = document.createElement('div');
        navWrapper.className = 'acf-nav d-flex justify-content-between mt-4';

        if (stepIndex > 0) {
            const prevBtn = document.createElement('button');
            prevBtn.type = 'button';
            prevBtn.className = 'btn btn-secondary';
            prevBtn.textContent = 'Назад';
            prevBtn.onclick = () => showStep(stepIndex - 1);
            navWrapper.appendChild(prevBtn);
        }

        if (stepIndex < groups.length - 1) {
            const nextBtn = document.createElement('button');
            nextBtn.type = 'button';
            nextBtn.className = 'btn btn-primary ms-auto';
            nextBtn.textContent = 'Далее';
            nextBtn.onclick = () => showStep(stepIndex + 1);
            navWrapper.appendChild(nextBtn);
        } else if (submitBtn) {
            submitBtn.style.display = 'inline-block';
            navWrapper.appendChild(submitBtn);
        }

        groups[stepIndex][groups[stepIndex].length - 1].after(navWrapper);
    }

    function showStep(index) {
        currentStep = index;

        groups.forEach((group, i) => {
            group.forEach(el => {
                el.style.display = i === index ? 'block' : 'none';
            });
        });

        // Удалить старые кнопки навигации
        const oldNavs = form.querySelectorAll('.acf-nav');
        oldNavs.forEach(nav => nav.remove());

        renderNavigation(index);
    }

    // Инициализация
    showStep(0);
});
</script>

<?php get_footer(); ?>
