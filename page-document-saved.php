<?php
/**
 * Template Name: Document Saved
 */

get_header();

$doc_id = isset($_GET['doc_id']) ? intval($_GET['doc_id']) : 0;
?>

<div class="container py-10">
    <h1 class="mb-5">Документ сохранён</h1>

    <?php if ($doc_id && get_post_type($doc_id) === 'document'): ?>
        <p>Документ успешно создан. Вы можете скачать его в PDF.</p>
        <a href="<?php echo esc_url(admin_url('admin-ajax.php?action=generate_pdf&doc_id=' . $doc_id)); ?>"
           class="btn btn-success btn-lg mt-4">
            Скачать PDF
        </a>
    <?php else: ?>
        <div class="alert alert-danger">Документ не найден или ещё не создан.</div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
