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
    const steps = document.querySelectorAll('.acf-tab-group');
    const groups = document.querySelectorAll('.acf-fields');
    const nav = document.createElement('div');
    nav.className = 'acf-nav d-flex justify-content-between mt-4';

    let currentStep = 0;

    function showStep(index) {
        groups.forEach((group, i) => {
            group.style.display = (i === index) ? 'block' : 'none';
        });

        // Обновить навигацию
        nav.innerHTML = '';
        if (index > 0) {
            const prevBtn = document.createElement('button');
            prevBtn.textContent = 'Назад';
            prevBtn.className = 'btn btn-secondary';
            prevBtn.onclick = () => {
                currentStep--;
                showStep(currentStep);
            };
            nav.appendChild(prevBtn);
        }

        if (index < groups.length - 1) {
            const nextBtn = document.createElement('button');
            nextBtn.textContent = 'Далее';
            nextBtn.className = 'btn btn-primary ms-auto';
            nextBtn.onclick = () => {
                currentStep++;
                showStep(currentStep);
            };
            nav.appendChild(nextBtn);
        } else {
            const submit = document.querySelector('#json-form input[type=submit]');
            if (submit) {
                submit.style.display = 'inline-block';
            }
        }

        // Добавляем навигацию к последнему шагу
        groups[index].appendChild(nav);
    }

    if (groups.length > 0) {
        // Прячем кнопку отправки
        const submit = document.querySelector('#json-form input[type=submit]');
        if (submit) {
            submit.style.display = 'none';
        }

        // Скрыть все группы кроме первой
        showStep(currentStep);
    }
});
</script>

<?php get_footer(); ?>
