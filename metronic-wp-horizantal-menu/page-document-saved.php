<?php
/**
 * Template Name: Document Saved
 */
get_header();

$post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;

if (!$post_id || get_post_type($post_id) !== 'document') {
    echo '<div class="container py-5"><div class="alert alert-danger">⛔️ Документ не найден.</div></div>';
    get_footer();
    exit;
}

// Получаем сохранённый шаблон
$acf_template_slug = get_post_meta($post_id, 'acf_template_slug', true);

// Fallback — если не найден
if (!$acf_template_slug) {
    echo '<div class="container py-5"><div class="alert alert-danger">❌ Метаполе <code>acf_template_slug</code> не задано.</div></div>';
    get_footer();
    exit;
}

// Очистка
$slug = str_replace('group_', '', sanitize_title($acf_template_slug));
$template_file = "acf-templates/group_{$slug}.php";
$preview_template = get_template_directory() . '/' . $template_file;
$template_exists = file_exists($preview_template);
?>

<div class="container py-5">
        <div class="row">
                <div class="col-lg-4">
                <h1>🎉 Ваш документ готов!</h1>

                <p><strong>🆔 ID документа:</strong> <?php echo esc_html($post_id); ?></p>
                <p><strong>📄 Шаблон превью:</strong> 
                    <code><?php echo esc_html($template_file); ?></code>
                    — <?php echo $template_exists ? '✅ Найден' : '❌ Не найден'; ?>
                </p>

                

                <a href="<?php echo esc_url(admin_url('admin-ajax.php?action=generate_pdf&doc_id=' . $post_id)); ?>"
                   class="btn btn-primary btn-lg mt-4" target="_blank" download>
                    📥 Скачать PDF
                </a>

                <hr class="my-5">
                    
        </div>
        <div class="col-lg-8">
            
            <h2 class="mb-4">📄 Превью документа</h2>
            <div class="border p-4 bg-light">
                <?php

                // echo '<div style="background:#ffe;padding:15px;border:1px solid #fc0;margin-bottom:20px;">';
                // echo '<strong>🛠️ DEBUG:</strong><br>';
                // echo '📌 <strong>post_id:</strong> ' . $post_id . '<br>';
                // echo '📄 <strong>Post Title:</strong> ' . get_the_title($post_id) . '<br>';
                // echo '🔢 <strong>Post Type:</strong> ' . get_post_type($post_id) . '<br>';

                // $fields = get_fields($post_id);

                // if ($fields) {
                //     echo '<pre>📦 <strong>ACF поля:</strong><br>' . print_r($fields, true) . '</pre>';
                // } else {
                //     echo '❌ <strong>ACF поля не найдены для этого документа.</strong>';
                // }
                // echo '</div>';

            // ✅ Правильное продолжение PHP-кода
            global $post;
            $post = get_post($post_id);
            setup_postdata($post);

            // ✅ Устанавливаем контекст для ACF
            acf_setup_meta(get_fields($post_id), $post_id);

            // ✅ Флаги
            $is_pdf = false;
            $is_preview = true; // 🔥 Новый режим: финальное предпросмотр

            if ($template_exists) {
                include $preview_template;
            } else {
                echo '<p class="text-danger">❌ Шаблон не найден: <code>' . esc_html($template_file) . '</code></p>';
            }

            wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>



</div>

<?php get_footer(); ?>
