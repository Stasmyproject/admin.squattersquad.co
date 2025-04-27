<?php
get_header();

// Подключаем layout начала
//get_template_part('template-app-layout');

// Определим авторизацию
$is_logged_in = is_user_logged_in();

// Отображаем товар
while ( have_posts() ) :
    the_post();
endwhile;


$image_id = $product->get_image_id();
$image_url = wp_get_attachment_image_url($image_id, 'large');        // для background
$full_image_url = wp_get_attachment_image_url($image_id, 'full');    // для lightbox

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


                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <!--begin::Row-->
                                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                                        <!--begin::Col-->
                                        <div class="col-xxl-6">
                                            <!--begin::Card widget 15-->
                                            <div class="card card-flush h-xl-100">
                                                <!--begin::Body-->
                                                <div class="card-body py-9">
                                                    <!--begin::Row-->
                                                    <div class="row gx-9 h-100">
                                                        <!--begin::Col--> 
                                                            <div class="col-sm-12 mb-10 mb-sm-0">
                                                                <a class="d-block overlay h-100"
                                                                   data-fslightbox="lightbox-hot-sales"
                                                                   href="<?php echo esc_url($full_image_url); ?>">

                                                                    <!-- begin::Image -->
                                                                    <img src="<?php echo esc_url($image_url); ?>"
                                                                         alt="Изображение товара"
                                                                         class="img-fluid card-rounded w-100 h-100 object-fit-cover" />
                                                                    <!-- end::Image -->

                                                                    <!-- begin::Action -->
                                                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                                                        <i class="ki-duotone ki-eye fs-3x text-white">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                    </div>
                                                                    <!-- end::Action -->

                                                                </a>
                                                            </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card widget 15-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xxl-6">
                                            <!--begin::Card widget 15-->
                                            <div class="card card-flush h-xl-100">
                                                <!--begin::Body-->
                                                <div class="card-body py-9">
                                                    <!--begin::Row-->
                                                    <div class="row gx-9 h-100">
                                                        <!--begin::Col-->
                                                        <div class="col-sm-12">
                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-column h-100">
                                                                <!--begin::Header-->
                                                                <div class="mb-3">
                                                                    <!--begin::Title-->
                                                                    <div class="mb-2">
                                                                        <h1 class="fs-1 fw-bold me-2 d-block lh-1 pb-1"><?php the_title(); ?></h1>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Body-->
                                                                <div class="d-flex flex-column text-start pt-5 pb-7 mb-8 card-rounded">
                                                                    <span class="fw-semibold text-gray-600 fs-7 pb-1">Cost</span>
                                                                    <span class="fw-bold text-gray-800 fs-2hx lh-1 pb-1"><?php echo $product->get_price_html(); ?></span>

                                                                    <div class="separator separator-content my-4">  </div>

                                                                    <span class="text-gray-500 mt-1 fw-semibold fs-6"><?php echo $product->get_short_description(); ?>
                                                                    </span>

                                                                    <span class="text-gray-500 fw-semibold fs-6"><?php echo apply_filters('the_content', get_the_content()); ?>
                                                                    </span>

                                                                </div>
                                                                <!--end::Body-->
                                                                <!--begin::Form-->
                                                                <form method="post" class="cart" enctype="multipart/form-data">
                                                                    <div class="d-flex align-items-center gap-3 flex-wrap mb-5">
                                                                        <div class="row"></div>
                                                                            <div class="col-sm-4 ">
                                                                                <!-- Оборачиваем количество в фиксированный блок -->
                                                                                <div class="d-flex align-items-center">
                                                                                    <?php
                                                                                    woocommerce_quantity_input( array(
                                                                                        'min_value'   => 1,
                                                                                        'max_value'   => $product->get_max_purchase_quantity(),
                                                                                        'input_value' => 1,
                                                                                        'classes'     => array('form-control', 'text-center'),
                                                                                    ), $product );
                                                                                    ?>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Скрытое поле -->
                                                                            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" />
                                                                            <div class="col-sm-8 align-items-center text-center">
                                                                                <!-- Кнопки -->
                                                                                <div class="d-flex align-items-center gap-3">
                                                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                                                        Добавить в корзину
                                                                                    </button>

                                                                                    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="btn btn-success btn-sm d-inline-block">
                                                                                        Перейти в корзину
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card widget 15-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
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
