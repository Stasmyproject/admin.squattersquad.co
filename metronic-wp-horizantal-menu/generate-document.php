<?php
require_once __DIR__ . '/../libs/mpdf/vendor/autoload.php';
use Mpdf\Mpdf;

// Получаем ID документа
$doc_id = isset($_GET['doc_id']) ? intval($_GET['doc_id']) : 0;
if (!$doc_id) {
    die('Invalid document ID');
}

// Загружаем WordPress (чтобы использовать функции ACF и WP)
require_once $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php';

// Получаем поля ACF
$fields = get_fields($doc_id);
if (!$fields) {
    die('No fields found.');
}

// Создаём PDF
$mpdf = new Mpdf([
    'format' => 'A4',
    'margin_top' => 20,
    'margin_bottom' => 20,
    'margin_left' => 15,
    'margin_right' => 15,
]);

// HTML-шаблон
$html = '<h1 style="text-align: center;">Document Preview</h1>';
foreach ($fields as $label => $value) {
    $html .= '<h3>' . ucwords(str_replace('_', ' ', $label)) . '</h3>';
    $html .= '<p>' . nl2br(htmlspecialchars(is_array($value) ? implode(', ', $value) : $value)) . '</p>';
}

// Генерируем
$mpdf->WriteHTML($html);
$mpdf->Output("document-$doc_id.pdf", 'D'); // D = скачивание
