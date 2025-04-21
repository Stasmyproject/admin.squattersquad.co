jQuery(document).ready(function($) {
    $('.download-pdf-btn').on('click', function(e) {
        e.preventDefault();

        const docId = pdfGenData.doc_id;

        if (!docId || docId === 0) {
            alert("⚠️ Документ ещё не сохранён.");
            return;
        }

        const downloadUrl = `${pdfGenData.ajax_url}?action=generate_pdf&doc_id=${docId}`;

        // Создаём временную ссылку для скачивания
        const link = document.createElement('a');
        link.href = downloadUrl;
        link.target = '_blank';
        link.download = `document-${docId}.pdf`;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
});
