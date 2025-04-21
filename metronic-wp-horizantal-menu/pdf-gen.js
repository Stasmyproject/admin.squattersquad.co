jQuery(document).ready(function($) {
    $('#download-pdf-btn').on('click', function () {
        const postId = $('#acf-saved-post-id').val();

        if (!postId) {
            alert('Документ ещё не сохранён.');
            return;
        }

        window.open(`${pdfGenData.ajax_url}?action=generate_pdf&doc_id=${postId}`, '_blank');
    });
});

