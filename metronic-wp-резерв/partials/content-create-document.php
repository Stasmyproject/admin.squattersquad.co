<?php
// Получаем тип документа из GET-параметра
$document_type = isset($_GET['type']) ? sanitize_key($_GET['type']) : '';

// Проверяем, есть ли такой шаблон формы
$template_path = get_template_directory() . '/partials/forms/form-' . $document_type . '.php';


// Если тип передан и файл существует — подключаем форму
if ($document_type && $template_path) {
    include $template_path;
}
// Если параметр отсутствует или файл не найден — показываем выбор типа документа
else {
    get_template_part('partials/forms/form-select-document');
}

?>

