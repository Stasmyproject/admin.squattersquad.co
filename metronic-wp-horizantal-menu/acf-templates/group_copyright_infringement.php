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
            <h2 style="text-align: center; font-weight: bold; margin-bottom: 3rem; text-transform: uppercase; font-size: 26px;">
                Copyright Infringement Letter
            </h2>

            <div class="fs-6 lh-lg">
                <!-- <p><strong>Date of Letter:</strong> <?php //doc_output('letter_date', $is_pdf, $post_id, $is_preview ?? false); ?></p> -->

<?php
  // получаем «сырое» значение из ACF
  $raw = get_field('letter_date', $post_id);

  // пробуем превратить в UNIX‑timestamp
  $ts = strtotime( $raw );

  if ( $ts ) {
    // если всё ок — форматируем в 04/21/2025
    $pretty = date_i18n( 'm/d/Y', $ts );
  } else {
    // иначе показываем как есть
    $pretty = $raw;
  }
?>
<p><strong>Date of Letter:</strong> <?php echo esc_html( $pretty ); ?></p>



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

    </div>
</div>
