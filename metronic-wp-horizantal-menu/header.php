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
  data-kt-app-layout="dark-header"
  data-kt-app-header-fixed="true" 
  data-kt-app-toolbar-enabled="true" 
  class="app-default"
  data-kt-app-sidebar-minimize="<?php echo esc_attr($sidebar_attr); ?>"
  class="<?php echo esc_attr($body_class); ?> <?php body_class(); ?>">

        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <!--end::Theme mode setup on page load-->

        <!-- Это система защиты страницы для атворизованных  и не авторизованных  -->
        <?php //if ( is_user_logged_in() ) : ?>
        <?php //endif; ?>

         <!--begin::App-->
        <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
            <!--begin::Page-->
            <div class="app-page flex-column flex-column-fluid" id="kt_app_page">       





              <!--begin::Header-->
              <div id="kt_app_header" 
                 class="app-header <?php echo current_user_can('administrator') ? 'drop-admin-bar' : ''; ?>"
                 data-kt-sticky="true" 
                 data-kt-sticky-activate="{default: true, lg: true}" 
                 data-kt-sticky-name="app-header-minimize" 
                 data-kt-sticky-offset="{default: '200px', lg: '0'}" 
                 data-kt-sticky-animation="false">

                <!--begin::Header container-->
                <div class="app-container container-xxl d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
                  <!--begin::Logo-->
                  <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
                    <a href="https://squattersquad.co/">
                      <!-- <img alt="Logo" src="<?php //echo get_template_directory_uri(); ?>/metronic/assets/media/logos/custom-3.svg" class="h-20px h-lg-30px app-sidebar-logo-default" /> -->
                      <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/logos/custom-3.svg" class="h-30px" />
                    </a>
                  </div>
                  <!--end::Logo-->





                  <!--begin::Header wrapper-->
                  <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">


                    <!--begin::Menu-->
                    <div class="app-header-menu app-header-mobile-drawer align-items-stretch"
                         data-kt-drawer="true"
                         data-kt-drawer-name="app-header-menu"
                         data-kt-drawer-activate="{default: true, lg: false}"
                         data-kt-drawer-overlay="true"
                         data-kt-drawer-width="250px"
                         data-kt-drawer-direction="end"
                         data-kt-drawer-toggle="#kt_app_header_menu_toggle"
                         data-kt-swapper="true"
                         data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                         data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

                        <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                             id="kt_app_header_menu" data-kt-menu="true">
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'main-horizontal-menu',
                                'container' => false,
                                'items_wrap' => '%3$s', // убираем <ul> и оставляем только элементы
                                'walker' => new Metronic_Menu_Walker()
                            ]);
                            ?>
                        </div>
                    </div>
                    <!--end::Menu-->





                    <!--begin::Navbar-->
                    <?php if ( is_user_logged_in() ) {
                        get_template_part('partials/header-navbar-user');
                    } else {
                        get_template_part('partials/header-navbar-guest'); // тут — облегчённый хедер
                    } ?>
                    <!--end::Navbar-->


                  </div>
                  <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
              </div>
              <!--end::Header-->









