<?php
/**
 * Template Name: Страница корзины (Metronic)
 */
get_header();

// Подключаем кастомный layout
//get_template_part('template-app-layout-horizontal');

// Определим авторизацию
$is_logged_in = is_user_logged_in();

// Только теперь — загружаем header
get_header();
echo '<div style="padding: 10px; background: #e0f7fa;">[DEBUG] Старт шаблона</div>';
?>


                <!--begin::Wrapper-->
                <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">


                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">


                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">


                            <!--begin::Toolbar-->
                            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                                <!--begin::Toolbar container-->
                                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                    <!--begin::Page title-->
                                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                                            <?php echo get_the_title(); ?>
                                        </h1>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
                                        <?php metronic_breadcrumbs(); ?>
                                        <!--end::Breadcrumb-->

                                    </div>
                                    <!--end::Page title-->

                                    <!--begin::Actions-->
                                        <?php get_template_part('partials/toolbar'); ?>
                                    <!--end::Actions-->

                                    
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->


                            <!--begin::Content-->

                            <!--begin::Page content-->
                            <div class="app-content flex-column-fluid" id="kt_app_content">
                                <div class="container-xxl" id="kt_app_content_container">
                                    <div class="card card-flush shadow-sm">
                                        <div class="card-body">
                                            <?php
                                            while ( have_posts() ) :
                                                the_post();
                                                the_content(); // это выведет [woocommerce_cart]
                                            endwhile;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Page content-->

                        </div>
                        <!--end::Content wrapper-->

                        
                        <!--begin::Footer-->
                            <?php get_footer(); ?>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->
                </div>
                <!--end::Wrapper-->

            </div>
            <!--end::Page-->
        </div>
        <!--end::App-->
