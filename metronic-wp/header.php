<!DOCTYPE html>
<!--
Theme: Metronic by Keenthemes
Version: 8.2.1
-->
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Защита от Clickjacking -->
  <script>
    if (window.top !== window.self) {
      window.top.location.replace(window.self.location.href);
    }
  </script>

  <?php wp_head(); ?>
</head>

<?php
  // Простейшая логика для установки sidebar state
  $is_logged_in = is_user_logged_in();
  $sidebar_attr = $is_logged_in ? 'off' : 'on';

  // Опционально — добавим класс для админов
  $body_class = 'app-default';
  if (current_user_can('administrator')) {
    $body_class .= ' admin-bar-visible';
  }
?>

<!-- Begin::Metronic Wrapper -->
<!--begin::Body-->
<body 
  id="kt_app_body"
  data-kt-app-layout="dark-sidebar"
  data-kt-app-header-fixed="true"
  data-kt-app-sidebar-enabled="true"
  data-kt-app-sidebar-fixed="true"
  data-kt-app-sidebar-hoverable="true"
  data-kt-app-sidebar-push-header="true"
  data-kt-app-sidebar-push-toolbar="true"
  data-kt-app-sidebar-push-footer="true"
  data-kt-app-toolbar-enabled="true"
  data-kt-app-sidebar-minimize="<?php echo esc_attr($sidebar_attr); ?>"
  class="<?php echo esc_attr($body_class); ?> <?php body_class(); ?>">

