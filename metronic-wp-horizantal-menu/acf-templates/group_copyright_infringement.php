<?php
/**
 * Шаблон предпросмотра и PDF: Copyright Infringement
 */

// Определяем режимы вывода
$is_pdf     = isset($is_pdf) && $is_pdf;
$is_preview = isset($is_preview) && $is_preview;
$post_id    = isset($post_id) ? $post_id : get_the_ID();

/**
 * Универсальный вывод поля ACF
 *
 * @param string $field_name Название поля
 * @param bool   $is_pdf     Генерация PDF?
 * @param int    $post_id    ID поста
 * @param bool   $is_preview Вывод предпросмотра сохранённого документа?
 */
function doc_output($field_name, $is_pdf = false, $post_id = null, $is_preview = false) {
    if ($is_pdf || $is_preview) {
        echo esc_html(get_field($field_name, $post_id));
    } else {
        echo '<span class="doc-field" data-source="' . esc_attr($field_name) . '">_____</span>';
    }
}
?>

<div class="doc-preview-container">
    <div class="doc-page">
        <div>
            <h2 class="text-center fw-bold mb-5 text-uppercase" style="font-size: 26px;">
                Copyright Infringement Letter
            </h2>

            <div class="fs-6 lh-lg">
                <p><strong>Date of Letter:</strong> <?php doc_output('letter_date', $is_pdf, $post_id, $is_preview ?? false); ?></p>

                <p><strong>Recipient Name:</strong> <?php doc_output('recipient_name', $is_pdf, $post_id, $is_preview ?? false); ?></p>

                <p><strong>Recipient Address:</strong><br>
                    <?php doc_output('recipient_street', $is_pdf, $post_id, $is_preview ?? false); ?><br>
                    <?php doc_output('recipient_city', $is_pdf, $post_id, $is_preview ?? false); ?>,
                    <?php doc_output('recipient_country', $is_pdf, $post_id, $is_preview ?? false); ?>,
                    <?php doc_output('recipient_postcode', $is_pdf, $post_id, $is_preview ?? false); ?>
                </p>

                <hr>

                <p>Dear <?php doc_output('recipient_name', $is_pdf, $post_id, $is_preview ?? false); ?>,</p>

                <p>I have been informed that you have made an illegal use of my copyrighted work titled
                    "<strong><?php doc_output('original_work', $is_pdf, $post_id, $is_preview ?? false); ?></strong>" without permission.</p>

                <p>It was originally published in <?php doc_output('original_year', $is_pdf, $post_id, $is_preview ?? false); ?>,
                    on: <?php doc_output('published_on', $is_pdf, $post_id, $is_preview ?? false); ?>.</p>

                <p>Your work titled "<strong><?php doc_output('work_name', $is_pdf, $post_id, $is_preview ?? false); ?></strong>"
                    contains original elements from my protected work.</p>

                <p><strong>Publication Type:</strong> <?php doc_output('publication_type', $is_pdf, $post_id, $is_preview ?? false); ?></p>

                <p><strong>Publication Title / URL:</strong> <?php doc_output('publication_title', $is_pdf, $post_id, $is_preview ?? false); ?></p>

                <p><strong>Examples of infringement:</strong><br>
                    <?php doc_output('examples', $is_pdf, $post_id, $is_preview ?? false); ?></p>

                <p><strong>Response received:</strong><br>
                    <?php doc_output('response_received', $is_pdf, $post_id, $is_preview ?? false); ?></p>

                <p>I request immediate removal of all infringing materials derived from my work and full compliance with copyright laws.</p>

                <p>Sincerely,<br>
                    <strong><?php doc_output('sender_name', $is_pdf, $post_id, $is_preview ?? false); ?></strong><br>
                    <?php doc_output('sender_street', $is_pdf, $post_id, $is_preview ?? false); ?><br>
                    <?php doc_output('sender_city', $is_pdf, $post_id, $is_preview ?? false); ?>,
                    <?php doc_output('sender_country', $is_pdf, $post_id, $is_preview ?? false); ?>,
                    <?php doc_output('sender_postcode', $is_pdf, $post_id, $is_preview ?? false); ?>
                </p>
            </div>
        </div>

        <div class="text-center text-muted mt-auto pt-5" style="font-size: 12px;">
            Page 1 of 1
        </div>
    </div>
</div>
