<?php
/**
 * Template Name: ACF PDF Download Test
 */
acf_form_head();
get_header();
?>

<div class="container py-5">
    <h1>📄 ACF PDF Demo</h1>

    <?php
    acf_form([
        'post_id' => 'new_post',
        'new_post' => [
            'post_type' => 'document',
            'post_status' => 'publish',
        ],
        'field_groups' => ['group_business_plan_form'], // ЗАМЕНИ на свой ключ группы!
        'submit_value' => 'Сохранить и Скачать PDF',
        'return' => false,
        'form_attributes' => ['id' => 'acf-test-form']
    ]);
    ?>
</div>

<script>
(function($){
    console.log("🚀 ACF PDF Script загружен точно знаю что я тут");

    acf.addAction('submit_success', function($form, response){
        console.log("✅ Форма отправлена", response);
        const postId = response?.data?.post_id;

        if (postId) {
            const url = `/wp-admin/admin-ajax.php?action=generate_pdf&doc_id=${postId}`;
            console.log("📥 Скачиваем PDF:", url);
            window.open(url, '_blank'); // 👈 открываем в новой вкладке
        } else {
            console.error("❌ postId не получен");
        }
    });

    acf.addAction('submit_fail', function($form, e){
        console.error("❌ submit_fail", e);
    });

})(jQuery);
</script>


<?php get_footer(); ?>
