<?php
/**
 * Template Name: Document Saved
 */
get_header();

$post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;

if (!$post_id || !get_post($post_id)) {
    echo '<div class="container py-5"><div class="alert alert-danger">⛔️ Документ не найден.</div></div>';
    get_footer();
    exit;
}

$template_slug = get_post_meta($post_id, 'acf_template_slug', true);
if (!$template_slug) {
    $template_slug = get_post_field('post_name', $post_id);
}

$preview_template = get_template_directory() . "/acf-templates/{$template_slug}.php";
$template_exists = file_exists($preview_template);
?>

<div class="container py-5">
    <h1>🎉 Ваш документ готов!</h1>

    <p><strong>🆔 ID документа:</strong> <?php echo esc_html($post_id); ?></p>
    <p><strong>📄 Шаблон превью:</strong> 
        <code><?php echo esc_html($template_slug); ?>.php</code>
        — <?php echo $template_exists ? '✅ Найден' : '❌ Не найден'; ?>
    </p>

    <a href="<?php echo admin_url('admin-ajax.php?action=generate_pdf&doc_id=' . $post_id); ?>"
       class="btn btn-primary btn-lg mt-4" target="_blank" download>
        📥 Скачать PDF
    </a>

    <hr class="my-5">

    <h2 class="mb-4">📄 Превью документа</h2>

    <div class="border p-4 bg-light">
        <?php
        setup_postdata(get_post($post_id));
        if ($template_exists) {
            include $preview_template;
        } else {
            echo '<p class="text-danger">❌ Шаблон превью не найден: <code>' . esc_html($template_slug) . '.php</code></p>';
        }
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php get_footer(); ?>
