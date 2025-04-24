<?php
/**
 * Template Name: Document Saved
 */
// Определим авторизацию
$is_logged_in = is_user_logged_in();

// Только теперь — загружаем header
get_header();
// echo '<div style="padding: 10px; background: #e0f7fa;">[DEBUG] Старт шаблона</div>';

$post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;

if (!$post_id || get_post_type($post_id) !== 'document') {
    echo '<div class="container py-5"><div class="alert alert-danger">⛔️ Документ не найден.</div></div>';
    get_footer();
    exit;
}

// Получаем сохранённый шаблон
$acf_template_slug = get_post_meta($post_id, 'acf_template_slug', true);

// Fallback — если не найден
if (!$acf_template_slug) {
    echo '<div class="container py-5"><div class="alert alert-danger">❌ Метаполе <code>acf_template_slug</code> не задано.</div></div>';
    get_footer();
    exit;
}

// ограничиваем просмотр жучих документов
$current_user_id = get_current_user_id();
$post_author_id = get_post_field('post_author', $post_id);

if ($current_user_id !== intval($post_author_id)) {
    wp_die('⛔️ У вас нет доступа к этому документу.');
}

// 💡 Важно: при создании документа неавторизованным пользователем, тебе нужно будет сохранять post_id в куку:
if ( !$is_logged_in ) {
    $allowed_doc_id = isset($_COOKIE['guest_doc_id']) ? intval($_COOKIE['guest_doc_id']) : 0;

    if ( $post_id !== $allowed_doc_id ) {
        echo '<div class="container py-5"><div class="alert alert-danger">⛔️ У вас нет доступа к этому документу.</div></div>';
        get_footer();
        exit;
    }
}



// Очистка
$slug = str_replace('group_', '', sanitize_title($acf_template_slug));
$template_file = "acf-templates/group_{$slug}.php";
$preview_template = get_template_directory() . '/' . $template_file;
$template_exists = file_exists($preview_template);
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
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <!--begin::Row-->
                                    <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">

                                        <div class="col-lg-4">
                                            <h1>🎉 Your document is ready!</h1>

                                            <p><strong>🆔 Document ID:</strong> <?php echo esc_html($post_id); ?></p>
                                            <p><strong>📄 Preview template:</strong><br/>
                                                <code><?php echo esc_html($template_file); ?></code>
                                                — <?php echo $template_exists ? '✅ Found' : '❌ Not found'; ?>
                                            </p>

                                            <a href="<?php echo esc_url(admin_url('admin-ajax.php?action=generate_pdf&doc_id=' . $post_id)); ?>"
                                               class="btn btn-primary btn-lg mt-4" target="_blank" download>
                                                📥 Скачать PDF
                                            </a>
                                            <hr class="my-5">   

                                            <?php if ( is_active_sidebar('banner-area') ) : ?>
                                              <div class="">
                                                <div class="row g-5">
                                                  <?php dynamic_sidebar('banner-area'); ?>
                                                </div>
                                              </div>
                                            <?php endif; ?>



                                            <!--begin::Card widget 18-->
                                            <div class="card card-flush ">
                                                <!--begin::Body-->
                                                <div class="card-body py-9">
                                                    <!--begin::Row-->
                                                    <div class="row gx-9 ">
                                                        
                                                        <!--begin::Col-->
                                                        <div class="col-sm-6 mb-10 mb-sm-0 col-lg-12">

                                                            <!--begin::Image-->
                                                            <!-- <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('<?php //echo get_template_directory_uri(); ?>/metronic/assets/media/stock/600x600/img-65.jpg')"></div> -->


                                                            <!--end::Image-->
                                                        </div>
                                                        <!--end::Col-->


                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Card widget 18-->


                                        </div>


                                        <div class="col-lg-8 position-relative">

                                              <!-- Watermark -->
                                              <div 
                                                class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
                                                style="
                                                  pointer-events: none;
                                                  z-index: 10;
                                                  opacity: 0.1;
                                                  font-size: 8rem;
                                                  font-weight: bold;
                                                  color: #000;
                                                  text-transform: uppercase;
                                                "
                                              >
                                                Preview
                                              </div>                                            
                                            <!-- <div class="border p-4 bg-light"> -->
                                                <?php

                                                    // echo '<div style="background:#ffe;padding:15px;border:1px solid #fc0;margin-bottom:20px;">';
                                                    // echo '<strong>🛠️ DEBUG:</strong><br>';
                                                    // echo '📌 <strong>post_id:</strong> ' . $post_id . '<br>';
                                                    // echo '📄 <strong>Post Title:</strong> ' . get_the_title($post_id) . '<br>';
                                                    // echo '🔢 <strong>Post Type:</strong> ' . get_post_type($post_id) . '<br>';

                                                    // $fields = get_fields($post_id);

                                                    // if ($fields) {
                                                    //     echo '<pre>📦 <strong>ACF поля:</strong><br>' . print_r($fields, true) . '</pre>';
                                                    // } else {
                                                    //     echo '❌ <strong>ACF поля не найдены для этого документа.</strong>';
                                                    // }
                                                    // echo '</div>';

                                                    // ✅ Правильное продолжение PHP-кода
                                                    global $post;
                                                    $post = get_post($post_id);
                                                    setup_postdata($post);

                                                    // ✅ Устанавливаем контекст для ACF
                                                    acf_setup_meta(get_fields($post_id), $post_id);

                                                    // ✅ Флаги
                                                    $is_pdf = false;
                                                    $is_preview = true; // 🔥 Новый режим: финальное предпросмотр

                                                    if ($template_exists) {
                                                        include $preview_template;
                                                    } else {
                                                        echo '<p class="text-danger">❌ Шаблон не найден: <code>' . esc_html($template_file) . '</code></p>';
                                                    }

                                                    wp_reset_postdata();
                                                ?>
                                            <!-- </div> -->
                                        </div>

                                        <!--begin::Col-->
                                        <div class="col-md-6 col-lg-12 col-xl-12 col-xxl-3 mb-md-5 mb-xl-10">
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