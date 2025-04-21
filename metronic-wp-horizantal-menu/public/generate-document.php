<?php
require __DIR__ . '/../libs/mpdf/vendor/autoload.php';

// Проверка параметра
if (!isset($_GET['doc_id']) || !is_numeric($_GET['doc_id'])) {
    exit('Invalid document ID');
}

$doc_id = intval($_GET['doc_id']);
$post = get_post($doc_id);

if (!$post || $post->post_type !== 'document') {
    exit('Document not found');
}

// Загружаем поля ACF
$fields = get_field_objects($doc_id);

ob_start();
?>
<style>
body {
    font-family: sans-serif;
    font-size: 12pt;
}
h1 {
    text-align: center;
    color: #001F3F;
}
h2 {
    color: #0074cc;
    margin-top: 20px;
}
p {
    margin-bottom: 10px;
}
.label {
    font-weight: bold;
}
</style>

<h1>Business Plan</h1>

<?php foreach ($fields as $field): ?>
    <?php if ($field['type'] === 'tab'): ?>
        <h2><?php echo esc_html($field['label']); ?></h2>
    <?php else: ?>
        <p><span class="label"><?php echo esc_html($field['label']); ?>:</span>
        <?php
        $value = $field['value'];
        if (is_array($value)) {
            echo implode(', ', array_map('esc_html', $value));
        } else {
            echo $value ? esc_html($value) : '—';
        }
        ?>
        </p>
    <?php endif; ?>
<?php endforeach; ?>

<?php
$html = ob_get_clean();

// Генерация PDF
$mpdf = new \Mpdf\Mpdf([
    'format' => 'A4',
    'margin_top' => 20,
    'margin_bottom' => 20,
    'margin_left' => 15,
    'margin_right' => 15
]);

$mpdf->WriteHTML($html);
$mpdf->Output('business-plan.pdf', \Mpdf\Output\Destination::INLINE); // или DOWNLOAD
