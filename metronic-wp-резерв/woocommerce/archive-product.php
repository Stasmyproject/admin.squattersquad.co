<?php
defined('ABSPATH') || exit;

get_header();

// Динамически определим, что это shop (архив товаров), и не пытаемся искать шаблон
$is_shop_page = true;

get_template_part('template-app-layout');
get_footer();
