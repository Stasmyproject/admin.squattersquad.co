<?php
/**
 * Template Name: Test PDF Download
 */
get_header();
$post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
?>

<div class="container py-5">
    <h1>🎉 Документ сохранён — вы на странице загрузки PDF</h1>

    <?php if ($post_id): ?>
        <p><strong>🆔 ID документа:</strong> <?php echo esc_html($post_id); ?></p>

        <?php
        $template_slug = get_post_meta($post_id, 'acf_template_slug', true);
        if (!$template_slug) {
            echo '<div class="alert alert-danger mt-4">⚠️ Шаблон не определён — не найдено мета-поле <code>acf_template_slug</code>.</div>';
            get_footer();
            exit;
        }

        $group = acf_get_field_group($template_slug);
        $group_name = $group ? $group['title'] : 'Неизвестно';

        $template_file = get_template_directory() . '/acf-templates/' . $template_slug . '.php';
        $template_status = file_exists($template_file) ? '✅ Найден' : '❌ Не найден';
        ?>

        <p><strong>🧩 ACF-группа:</strong> <?php echo esc_html($group_name); ?></p>
        <p><strong>📄 Шаблон:</strong> <code><?php echo esc_html($template_slug); ?>.php</code> — <?php echo $template_status; ?></p>

        <a href="<?php echo admin_url('admin-ajax.php?action=generate_pdf&doc_id=' . $post_id); ?>"
           class="btn btn-primary btn-lg mt-4" target="_blank">
           📥 Скачать PDF
        </a>

        <hr class="my-5">

        <h2 class="mb-15">📄 Превью документа</h2>

        <div class="border rounded bg-white doc-page">
            <?php
            $fields = get_fields($post_id);
            if (file_exists($template_file)) {
                // 👇 Передаём переменные в шаблон
                include $template_file;
            } else {
                echo '<p class="text-danger">❌ Шаблон не найден для предпросмотра.</p>';
            }
            ?>
        </div>

    <?php else: ?>
        <div class="alert alert-danger mt-4">⛔️ Документ не найден. Пожалуйста, вернитесь и попробуйте снова.</div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
