<?php
get_header();

// Подключаем layout начала
get_template_part('template-app-layout');

// Отображаем товар
while ( have_posts() ) :
    the_post();
endwhile;



$image_id = $product->get_image_id();
$image_url = wp_get_attachment_image_url($image_id, 'large');        // для background
$full_image_url = wp_get_attachment_image_url($image_id, 'full');    // для lightbox

?>

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

                                                                


                                                                <!--begin::Footer-->
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





                                                                <!--end::Footer-->


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


<?php
get_footer();
?>