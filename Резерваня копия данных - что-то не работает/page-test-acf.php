<?php
/**
 * Template Name: ACF Test Page
 */

acf_form_head();
add_action('wp_footer', function() {
    echo '<script>console.log("🧪 wp_footer загружен, всё живое");</script>';
});

get_header();
?>

<div class="container py-5">
    <h1 class="mb-4">🚀 ACF Test Form</h1>

    <?php
    acf_form([
        'post_id' => 'new_post',
        'new_post' => [
            'post_type' => 'page',
            'post_status' => 'publish',
        ],
        'field_groups' => ['group_test_fields'],
        'submit_value' => 'Создать и Скачать PDF',
        'return' => false
    ]);
    ?>
</div>

<script>
(function($){
    console.log("🚀 ACF Debug JS загружен");

    acf.addAction('submit_success', function($form, response){
        console.log("🎯 submit_success сработал!");
        console.log("📦 Ответ от ACF:", response);

        const postId = response?.data?.post_id;
        console.log("📌 Получен post ID:", postId);

        if (postId) {
            const url = `/wp-admin/admin-ajax.php?action=generate_pdf&doc_id=${postId}`;
            console.log("📥 Скачиваем PDF:", url);
            window.location.href = url;
        }
    });

    acf.addAction('submit_fail', function($form, e){
        console.error("❌ submit_fail: что-то пошло не так", e);
    });

    acf.addAction('prepare_for_ajax', function($form){
        console.log("📤 prepare_for_ajax: форма отправляется");
    });

})(jQuery);
</script>

<?php get_footer(); ?>
