<?php
/**
 * Template Name: Business Plan — PDF генератор
 */

acf_form_head(); // обязателен ДО get_header
get_header();
?>

<div class="container py-5">
    <h1 class="mb-4">📋 Бизнес-план — генерация PDF</h1>

    <?php
    acf_form([
        'post_id' => 'new_post',
        'new_post' => [
            'post_type' => 'document',
            'post_status' => 'publish',
        ],
        'field_groups' => ['group_business_plan_form'],
        'submit_value' => 'Сохранить и Скачать PDF',
        'return' => false,
        'form_attributes' => ['id' => 'acf-bp-form']
    ]);
    ?>
</div>

<script>
(function($){
    console.log("🚀 ACF PDF Script запущен");

    acf.addAction('submit_success', function($form, response){
        const postId = response?.data?.post_id;

        if (postId) {
            const url = `/wp-admin/admin-ajax.php?action=generate_pdf&doc_id=${postId}`;
            console.log("📥 Скачиваем PDF:", url);
            window.open(url, '_blank'); // Откроет вкладку, можно заменить на window.location.href
        } else {
            console.error("❌ Не удалось получить post ID");
        }
    });

    acf.addAction('submit_fail', function($form, error){
        console.error("❌ Ошибка при отправке формы", error);
    });
})(jQuery);
</script>

<?php get_footer(); ?>
