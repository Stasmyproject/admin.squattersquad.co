<?php
// Устанавливаем правильный статус
http_response_code(404);
get_header();
?>

<?php
/* Template Name: 404 */
$bg_light = get_template_directory_uri() . '/metronic/assets/media/auth/bg4.jpg';
$bg_dark  = get_template_directory_uri() . '/metronic/assets/media/auth/bg4-dark.jpg';
?>

    <!--begin::Body-->
    <body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Page bg image-->
            <style>
                body {
                  background-image: url('<?php echo esc_url($bg_light); ?>');
                }
                [data-bs-theme="dark"] body {
                  background-image: url('<?php echo esc_url($bg_dark); ?>');
                }
            </style>
            <!--end::Page bg image-->
            <!--begin::Authentication - Signup Welcome Message -->
            <div class="d-flex flex-column flex-center flex-column-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center text-center p-10">
                    <!--begin::Wrapper-->
                    <div class="card card-flush w-lg-650px py-5">
                        <div class="card-body py-15 py-lg-20">
                            <!--begin::Title-->
                            <h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Oops!</h1>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <div class="fw-semibold fs-6 text-gray-500 mb-7">We can't find that page.</div>
                            <!--end::Text-->
                            <!--begin::Illustration-->
                            <div class="mb-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/auth/404-error.png" class="mw-100 mh-300px theme-light-show" alt="" />
                                <img src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/auth/404-error-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
                            </div>
                            <!--end::Illustration-->
                            <!--begin::Link-->
                            <div class="mb-0">
                                <a href="index.php" class="btn btn-sm btn-primary">Return Home</a>
                            </div>
                            <!--end::Link-->
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Authentication - Signup Welcome Message-->
        </div>
    </body>
    <!--end::Body-->

<?php get_footer(); ?>