<?php
// partials/toolbar.php

// авторизация
$is_logged_in = is_user_logged_in();

// базовые флаги
$is_product_page         = is_singular('product');
$is_signs_page           = is_page('signs-and-notices');
$is_create_doc_page      = is_page('create-document');
$is_choose_doc_page      = is_page('choose-document');

$is_document_page        = is_singular('document')
                         || is_post_type_archive('document')
                         || is_page('my-documents')
                         || is_page('documents')
                         || $is_create_doc_page
                         || $is_choose_doc_page;

// новый флаг: это страница «документ сохранён» или «скачать детали»
$is_document_download_page = is_page_template('page-document-saved.php')
                          || is_page_template('page-document-details-download.php');

// woocommerce
$is_wc_page = function_exists('is_woocommerce') && (
    is_cart() || is_checkout() || is_account_page() || is_shop()
);

// JSON‑формы
$is_json_form_page = ! empty( get_post_meta( get_the_ID(), 'json_form_slug', true ) );

// СПЕЦИАЛЬНЫЕ СТРАНИЦЫ
if ( $is_logged_in && ! $is_json_form_page ) {

  // 1) legal-documents (если нужно)
  if ( is_page('legal-documents') ) {
    get_template_part('partials/toolbar-documents-all');

  // 2) страницы WooCommerce / signs
  } elseif ( $is_product_page || $is_signs_page || $is_wc_page ) {
    get_template_part('partials/toolbar-woocommerce');

  // 3) страницы скачивания документа
  } elseif ( $is_document_download_page ) {
    get_template_part('partials/toolbar-documents-details-download');

  // 4) всё остальное по document CPT
  } elseif ( $is_document_page ) {
    get_template_part('partials/toolbar-documents');

  // 5) дефолтный тулбар
  } else {
    get_template_part('partials/toolbar-default');
  }

}
