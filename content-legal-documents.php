                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <!--begin::Engage widget 4-->
                                    <div class="card border-transparent" data-bs-theme="light" style="background-color: #1C325E;">
                                        <!--begin::Body-->
                                        <div class="card-body d-flex ps-xl-15">
                                            <!--begin::Wrapper-->
                                            <div class="m-0">
                                                <!--begin::Title-->
                                                <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">



                                                <span class="me-2">Explore our library of over 
                                                <span class="position-relative d-inline-block text-danger">
                                                    <a href="pages/user-profile/overview.html" class="text-danger opacity-75-hover">100 specialized</a>
                                                    <!--begin::Separator-->
                                                    <span class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                    <!--end::Separator-->
                                                </span></span>legal forms.
                                                <br />Complete them effortlessly with just a few clicks.</div><br />

                                                <div class="d-flex align-items-center text-white mb-5">
                                                  <span class="svg-icon svg-icon-2 svg-icon-white me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                      <!-- Стрелка по часовой к началу -->
                                                      <path d="M21 2v6h-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <!-- Стрелка по против часовой к концу -->
                                                      <path d="M3 22v-6h6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <!-- Верхняя дуга -->
                                                      <path d="M3 12a9 9 0 0 1 17.7-4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <!-- Нижняя дуга -->
                                                      <path d="M21 12a9 9 0 0 1-17.7 4.3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                  </span>
                                                  <span class="fw-semibold fs-6">
                                                    Last updated: <?php echo date_i18n( 'F j, Y', strtotime( '-1 day' ) ); ?>
                                                  </span>
                                                </div>

                                                <br />


                                                <!--end::Title-->


                                                <!--begin::Action-->
                                                <div class="mb-3">
                                                    <a href='#' class="btn btn-danger fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Go to my personal cabinet</a>
                                                    <a href="#" class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">How to use it ? </a>
                                                </div>
                                                <!--begin::Action-->
                                            </div>
                                            <!--begin::Wrapper-->
                                            <!--begin::Illustration-->
                                            <img src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/illustrations/sigma-1/16.png" class="position-absolute me-3 bottom-0 end-0 h-200px" alt="" />
                                            <!--end::Illustration-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Engage widget 4-->

                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->


                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">




                                         <!--begin::Row-->
                                        <div class="row g-5 g-xl-8">
                                            <!--begin::Col-->
                                            <div class="col-xl-3">
                                            <!--begin::Sticky Sidebar Menu-->
                                            <div class="card mb-xl-3">
<!--                                        <div class="card mb-xl-3"
                                                data-kt-sticky="true" 
                                                data-kt-sticky-name="invoice" 
                                                data-kt-sticky-offset="{default: false, lg: '420px'}"
                                                data-kt-sticky-width="{lg: '250px', lg: '300px'}"
                                                data-kt-sticky-left="auto"
                                                data-kt-sticky-top="120px"
                                                data-kt-sticky-animation="false"
                                                data-kt-sticky-zindex="95"> -->
                                                <!--begin::Card Header-->
                                                <div class="card-header border-0 py-5">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bold fs-3 mb-1">Document categories:</span>
                                                    </h3>
                                                </div>
                                                <!--end::Card Header-->

                                                <!--begin::Card Body-->
                                                <div class="card-body pt-0">
                                                    <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-5 fw-semibold w-250px"
                                                         id="sidebar_menu"
                                                         data-kt-menu="true"
                                                         data-kt-sticky="true"
                                                         data-kt-sticky-offset="{default: false, lg: '520px'}"
                                                         data-kt-sticky-width="{lg: '250px', xl: '300px'}"
                                                         data-kt-sticky-left="auto"
                                                         data-kt-sticky-top="120px"
                                                         data-kt-sticky-animation="false"
                                                         data-kt-sticky-zindex="95"
                                                         data-kt-scrollspy="true"
                                                         data-kt-scrollspy-offset="100">

                                                        
                                                        <?php
                                                        // Получаем все родительские категории
                                                        $parent_terms = get_terms(array(
                                                            'taxonomy' => 'document_page_category',
                                                            'parent' => 0,
                                                            'hide_empty' => false,
                                                        ));

                                                        if (!empty($parent_terms) && !is_wp_error($parent_terms)) :
                                                            foreach ($parent_terms as $parent_term) :

                                                                // Получаем количество постов в родительской категории
                                                                $parent_count = $parent_term->count;
                                                        ?>
                                                                <div class="menu-item">
                                                                    <a href="#<?php echo esc_attr($parent_term->slug); ?>" class="menu-link border-3 border-start border-transparent">
                                                                        <span class="menu-title"><?php echo esc_html($parent_term->name); ?></span>
                                                                        <span class="menu-badge fs-7 fw-normal text-muted"><?php echo $parent_count; ?></span>
                                                                    </a>
                                                                </div>



                                                        <?php
                                                            endforeach;
                                                        endif;
                                                        ?>
                                                    </div>
                                                </div>
                                                <!--end::Card Body-->
                                            </div>
                                            <!--end::Sticky Sidebar Menu-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-xl-9">

                                            <div 
                                                class="position-relative"
                                              id="kt_scroll_container"
                                              data-kt-scrollspy="true"
                                              data-kt-scrollspy-target="#sidebar_menu"
                                              data-kt-scrollspy-offset="200px"
                                            > 





<!-- /////////////////////////////////////////////// -->

<?php
$i = 1; // <--- объявляем один раз перед всем кодом!

// Получаем все родительские категории (без родителя)
$parent_terms = get_terms(array(
    'taxonomy' => 'document_page_category',
    'parent' => 0,
    'hide_empty' => false,
));

if (!empty($parent_terms) && !is_wp_error($parent_terms)) :
    foreach ($parent_terms as $parent_term) :
?>
    <!--begin::Row для категории-->
    <div class="row gx-5 gx-xl-8 scroll-anchor" id="<?php echo esc_attr($parent_term->slug); ?>" data-kt-scrollspy-section="true">
        <div class="col-xl-12 ">
            <!-- Карточка категории -->
            <div class="card h-150px card-xl-stretch mb-5 mb-xl-8" >
                <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                    <div class="me-2">
                        <h2 class="fw-bold text-gray-800 mb-3 " ><?php echo esc_html($parent_term->name); ?></h2>
                        <?php if (!empty($parent_term->description)) : ?>
                            <div class="text-muted fw-semibold fs-6"><?php echo esc_html($parent_term->description); ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Row для категории-->

    <?php
    // Получаем дочерние категории этой родительской
    $child_terms = get_terms(array(
        'taxonomy' => 'document_page_category',
        'parent' => $parent_term->term_id,
        'hide_empty' => false,
    ));

    if (!empty($child_terms) && !is_wp_error($child_terms)) :
    ?>

    <!--begin::Row подкатегорий и документов-->
    <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">
        <?php
        foreach ($child_terms as $child_term) :
        ?>
            <!--begin::Col для подкатегории-->
            <div class="col-xl-6">
                <!--begin::Подкатегория карточка-->   
                <!--begin::Подкатегория карточка-->
                    <?php
                    // Массив темных градиентов
                    $gradients = array(

                            'linear-gradient(135deg, rgba(44,62,80,0.8), rgba(76,161,175,0.8))',
                            'linear-gradient(135deg, rgba(29,38,113,0.8), rgba(195,55,100,0.8))',
                            'linear-gradient(135deg, rgba(15,32,39,0.8), rgba(32,58,67,0.8), rgba(44,83,100,0.8))',
                            'linear-gradient(135deg, rgba(102,50,89,0.8), rgba(255,107,107,0.8))',

                        //'linear-gradient(135deg, #2c3e50, #4ca1af)', // синий
                        //'linear-gradient(135deg, #1d2671, #c33764)', // фиолетово-розовый
                        // 'linear-gradient(135deg, #000428, #004e92)', // темно-синий
                        // 'linear-gradient(135deg, #232526, #414345)', // серо-черный
                        // 'linear-gradient(135deg, #283048, #859398)', // стальной
                        // 'linear-gradient(135deg, #1c1c1c, #434343)', // темно-серый

                        // 'linear-gradient(135deg, #0f2027, #203a43, #2c5364)', // Темный морской
                        // 'linear-gradient(135deg, #663259, #ff6b6b)',          // Мой стандартный

                        // 'linear-gradient(135deg, #141e30, #243b55)',           // Глубокий синий
                        // 'linear-gradient(135deg, #3a1c71, #d76d77, #ffaf7b)',  // Фиолетово-розовый
                        // 'linear-gradient(135deg, #16222a, #3a6073)',           // Стальной синий
                        // 'linear-gradient(135deg, #1e3c72, #2a5298)',           // Ночной океан
                        // 'linear-gradient(135deg, #000046, #1cb5e0)',           // Космический синий
                        // 'linear-gradient(135deg, #232526, #414345)',           // Металлический серый
                        // 'linear-gradient(135deg, #283048, #859398)',           // Холодный стальной
                        // 'linear-gradient(135deg, #1c1c1c, #434343)',           // Угольный
                        // 'linear-gradient(135deg, #0f0c29, #302b63, #24243e)',  // Тёмный индиго
                        // 'linear-gradient(135deg, #2c3e50, #4ca1af)',           // Морской бриз
                    );

                    // Выбираем градиент на основе term_id
                    $gradient = $gradients[$child_term->term_id % count($gradients)];
                    $image_url = get_template_directory_uri() . '/metronic/assets/media/stock/600x600/from_category/img-' . $i . '.jpg';
                    ?>

                    <div class="card min-h-195px bgi-no-repeat bgi-size-cover card-xl-stretch mb-5 mb-xl-8"
                         style="background-image: <?php echo $gradient; ?>, url('<?php echo $image_url; ?>');
                                background-position: center;
                                background-repeat: no-repeat;
                                background-size: cover;
                               ">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h2 class="text-white fw-bold mb-3"><?php echo esc_html($child_term->name); ?></h2>
                                <?php if (!empty($child_term->description)) : ?>
                                    <p class="text-white"><?php echo esc_html($child_term->description); ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="m-0 mt-5">
                                <a href="<?php echo esc_url(get_term_link($child_term)); ?>" class="btn btn-danger fw-semibold px-6 py-3">
                                    Create
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Подкатегория карточка-->
                <!--end::Подкатегория карточка-->

                <?php
                // Вывод документов подкатегории
                $query = new WP_Query(array(
                    'post_type' => 'document_pages',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'document_page_category',
                            'field' => 'term_id',
                            'terms' => $child_term->term_id,
                        ),
                    ),
                ));

                if ($query->have_posts()) :
                ?>
                <!--begin::Row документов внутри подкатегории-->
                <div class="row gx-5 gx-xl-8">
                    <?php while ($query->have_posts()) : $query->the_post();
                        $file = get_field('pdf'); // Получаем PDF-файл
                    ?>
                        <!--begin::Col для документа-->
                        <div class="col-xxl-6 mb-5 mb-xl-8">
                            <a href="<?php the_permalink(); ?>" class="card card-xxl-stretch bg-primary">
                                <div class="card-body px-4 py-3 d-flex align-items-center gap-3">
                                    <!--begin::Иконка-->
                                    <i class="ki-duotone ki-message-text text-white fs-2hx">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                    <!--end::Иконка-->

                                    <!--begin::Текст-->
                                    <div class="text-white fw-semibold fs-6 lh-sm mb-0">
                                        <?php the_title(); ?>
                                    </div>
                                    <!--end::Текст-->
                                </div>
                            </a>

                            <?php if ($file) : ?>
                                <!-- <div class="mt-2"> -->
                                    <!-- <a href="<?php //echo esc_url($file['url']); ?>" download="<?php //echo esc_attr($file['filename']); ?>" -->
                                       <!-- class="btn btn-sm btn-light-primary fw-bold w-100"> -->
                                       <!-- Download PDF -->
                                    <!-- </a> -->
                                <!-- </div> -->
                            <?php endif; ?>
                        </div>
                        <!--end::Col для документа-->
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                <!--end::Row документов-->
                <?php endif; ?>

            </div>
            <!--end::Col для подкатегории-->

        <?php 
        $i++; // <--- Увеличиваем СРАЗУ ПОСЛЕ вывода одной подкатегории!
            endforeach; ?>
    </div>
    <!--end::Row подкатегорий и документов-->
    <?php endif; ?>

<?php

    endforeach; // Конец foreach по родителям
endif;
?>


<!-- /////////////////////////////////////////////// -->

<!-- /////////////////////////////////////////////// -->

<!-- /////////////////////////////////////////////// -->

                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">

                                                    <!--begin::Col-->
                                                    <div class="col-xl-6">

                                                        <!-- Подкатегория -->
                                                        <!--begin::Tiles Widget 2-->
                                                        <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                             style="
                                                                background-image: linear-gradient(135deg, #663259, #ff6b6b), url('assets/media/svg/misc/taieri.svg');
                                                                background-position: right;
                                                                background-repeat: no-repeat;
                                                                background-size: contain;
                                                            ">
                                                            <!--begin::Body-->
                                                            <div class="card-body d-flex flex-column justify-content-between">
                                                              <!--begin::Title-->
                                                              <h2 class="text-white fw-bold mb-5">Cease & Desist Order Template</h2>
                                                              <p class="text-white">
                                                                Safeguard your rights with our free Cease and Desist Letter template. This document allows you to formally request the termination of any harmful or illegal actions.
                                                              </p>
                                                              <div class="m-0 mt-5">
                                                                <a href="<?php echo esc_url( site_url('/legal-documents/business/') ); ?>" class="btn btn-danger fw-semibold px-6 py-3">Create</a>

                                                              </div>
                                                              <!--end::Title-->
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::Tiles Widget 2-->
                                                        <!-- Подкатегория -->

                                                        <!-- Страницы -->
                                                        <div class="row gx-5 gx-xl-8">
                                                            <!--begin::Col-->
                                                            <div class="col-xxl-6 mb-5 mb-xl-8">
                                                                <!--begin::Tiles Widget 5-->
                                                                <a href="#" class="card card-xxl-stretch bg-primary">

                                                                <!--begin::Body-->
                                                                <div class="card-body px-4 py-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <!--begin::Icon-->
                                                                        <i class="ki-duotone ki-message-text text-white fs-2hx">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                            <span class="path4"></span>
                                                                        </i>
                                                                        <!--end::Icon-->

                                                                        <!--begin::Text-->
                                                                        <div class="text-white fw-semibold fs-6 lh-sm mb-0">
                                                                            Business Plan for Accommodation and Food
                                                                        </div>
                                                                        <!--end::Text-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Body-->

                                                                </a>
                                                                <!--end::Tiles Widget 5-->
                                                            </div>
                                                            <!--end::Col-->


                                                            <!--begin::Col-->
                                                            <div class="col-xxl-6 mb-5 mb-xl-8">
                                                                <!--begin::Tiles Widget 5-->
                                                                <a href="#" class="card card-xxl-stretch bg-primary">

                                                                <!--begin::Body-->
                                                                <div class="card-body px-5 py-3">
                                                                    <div class="d-flex align-items-center gap-3">
                                                                        <!--begin::Icon-->
                                                                        <i class="ki-duotone ki-message-text text-white fs-2hx">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                            <span class="path4"></span>
                                                                        </i>
                                                                        <!--end::Icon-->

                                                                        <!--begin::Text-->
                                                                        <div class="text-white fw-semibold fs-6 lh-sm mb-0">
                                                                            General Letter
                                                                        </div>
                                                                        <!--end::Text-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Body-->

                                                                </a>
                                                                <!--end::Tiles Widget 5-->
                                                            </div>
                                                            <!--end::Col-->


                                                            <!--begin::Col-->
                                                            <div class="col-xxl-6 mb-5 mb-xl-8">
                                                                <!--begin::Tiles Widget 5-->
                                                                <a href="<?php echo esc_url( get_permalink(719) ); ?>" class="card card-xxl-stretch bg-primary">

                                                                    <!--begin::Body-->
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-start">
                                                                            <!--begin::Icon 30%-->
                                                                            <div class="flex-shrink-0" style="width: 30%;">
                                                                                <i class="ki-duotone ki-element-2 text-white fs-2hx">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                    <span class="path4"></span>
                                                                                </i>
                                                                            </div>
                                                                            <!--end::Icon-->

                                                                            <!--begin::Text 70%-->
                                                                            <div class="flex-grow-1 ps-4" style="width: 70%;">
                                                                                <div class="text-white fw-semibold fs-6 lh-sm">
                                                                                    Business Plan for Accommodation and Food
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Text-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Body-->

                                                                </a>
                                                                <!--end::Tiles Widget 5-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-xxl-6 mb-5 mb-xl-8">
                                                                <!--begin::Tiles Widget 5-->
                                                                <a href="#" class="card card-xxl-stretch bg-primary">

                                                                    <!--begin::Body-->
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-start">
                                                                            <!--begin::Icon 30%-->
                                                                            <div class="flex-shrink-0" style="width: 30%;">
                                                                                <i class="ki-duotone ki-rocket text-white fs-2hx">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                    <span class="path4"></span>
                                                                                </i>
                                                                            </div>
                                                                            <!--end::Icon-->

                                                                            <!--begin::Text 70%-->
                                                                            <div class="flex-grow-1 ps-4" style="width: 70%;">
                                                                                <div class="text-white fw-semibold fs-6 lh-sm">
                                                                                    Trademark Infringement
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Text-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Body-->

                                                                </a>
                                                                <!--end::Tiles Widget 5-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-xxl-6 mb-5 mb-xl-8">
                                                                <div class="card h-150px bgi-no-repeat bgi-size-cover bgi-position-y-center h-150px mb-5 mb-lg-10" style="background-image:url('<?php echo get_template_directory_uri(); ?>/metronic/assets/media/stock/600x600/img-11.jpg')">
                                                                    <!--begin::Body-->
                                                                    <div class="card-body p-6">
                                                                        <!--begin::Title-->
                                                                        <a href="#" class="text-white text-hover-primary fw-bold fs-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Roofing</a>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Body-->
                                                                </div>
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-xxl-6 mb-5 mb-xl-8">


                                                                <!--begin::Tiles Widget 5-->
                                                                <a href="#" class="card card-xxl-stretch bg-primary">

                                                                    <!--begin::Body-->
                                                                    <div class="card-body">
                                                                        <div class="d-flex align-items-start">
                                                                            <!--begin::Icon 30%-->
                                                                            <div class="flex-shrink-0" style="width: 30%;">
                                                                                <i class="ki-duotone ki-tree text-white fs-2hx">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                    <span class="path3"></span>
                                                                                    <span class="path4"></span>
                                                                                </i>
                                                                            </div>
                                                                            <!--end::Icon-->

                                                                            <!--begin::Text 70%-->
                                                                            <div class="flex-grow-1 ps-4" style="width: 70%;">
                                                                                <div class="text-white fw-semibold fs-6 lh-sm">
                                                                                    Debt Collection
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Text-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Body-->

                                                                </a>
                                                                <!--end::Tiles Widget 5-->
                                                            </div>
                                                            <!--end::Col-->


                                                        </div>
                                                        <!-- Страницы -->

                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-xl-6">


                                                        <!--begin::Tiles Widget 2-->
                                                        <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                               style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/stop.svg')">
                                                            <div class="card-body d-flex flex-column justify-content-between">
                                                              <h2 class="text-white fw-bold mb-5">Cease and Desist Letter</h2>
                                                              <p class="text-white">
                                                                Compose a Cease and Desist Letter to formally demand an end to damaging behavior and safeguard your rights.
                                                              </p>
                                                              <div class="m-0 mt-5">
                                                                <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                              </div>
                                                            </div>
                                                        </div>


                                                        <div class="card h-150px bgi-no-repeat bgi-size-cover bgi-position-y-center h-150px mb-5 mb-lg-10" style="background-image:url('<?php echo get_template_directory_uri(); ?>/metronic/assets/media/stock/600x600/img-12.jpg')">
                                                            <!--begin::Body-->
                                                            <div class="card-body p-6">
                                                                <!--begin::Title-->
                                                                <a href="#" class="text-black text-hover-primary fw-bold fs-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Roofing</a>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>

                                                            <!--begin::Col-->
                                                            <div class="col-xxl-6 mb-5 mb-xl-8">
                                                                <div class="card h-150px bgi-no-repeat bgi-size-cover bgi-position-y-center h-150px mb-5 mb-lg-10" style="background-image:url('<?php echo get_template_directory_uri(); ?>/metronic/assets/media/stock/600x600/img-12.jpg')">
                                                                    <!--begin::Body-->
                                                                    <div class="card-body p-6">
                                                                        <!--begin::Title-->
                                                                        <a href="#" class="text-black text-hover-primary fw-bold fs-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Roofing</a>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Body-->
                                                                </div>
                                                            </div>
                                                            <!--end::Col-->



                                                    </div>
                                                    <!--end::Col-->           
                                                </div>
                                                <!--end::Row-->


                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8" id="business">
                                                    <div class="col-xl-12">
                                                        <!--begin::Tiles Widget 4-->
                                                        <div class="card h-150px card-xl-stretch">
                                                            <!--begin::Body-->
                                                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                                                <div class="me-2">
                                                                    <h2 class="fw-bold text-gray-800 mb-3">Business</h2>
                                                                    <div class="text-muted fw-semibold fs-6">Proper documentation is essential for any business. Use our contract generator to swiftly and effortlessly create the legal forms you need for critical enterprise operations.</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::Tiles Widget 4-->
                                                    </div>
                                                </div>
                                                <!--end::Row-->


                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">

                                                    <!--begin::Col-->
                                                    <div class="col-xl-6">
                                                      <!--begin::Tiles Widget 2-->
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/taieri.svg')">
                                                        <!--begin::Body-->
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <!--begin::Title-->
                                                          <h2 class="text-white fw-bold mb-5">Business Plan</h2>
                                                          <p class="text-white">
                                                            Draft a comprehensive Business Plan to spell out your strategy, objectives, market insights and financial forecasts for growth.
                                                          </p>
                                                          <!--end::Title-->
                                                          <!--begin::Action-->
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                          <!--end::Action-->
                                                        </div>
                                                        <!--end::Body-->
                                                      </div>
                                                      <!--end::Tiles Widget 2-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-xl-6">
                                                      <!--begin::Tiles Widget 2-->
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/stop.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Cease and Desist Letter</h2>
                                                          <p class="text-white">
                                                            Compose a Cease and Desist Letter to formally demand an end to damaging behavior and safeguard your rights.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-xl-6">
                                                      <!--begin::Tiles Widget 2-->
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/lock.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Confidentiality Agreement</h2>
                                                          <p class="text-white">
                                                            Ensure your sensitive data remains protected by creating a tailored Confidentiality Agreement.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-xl-6">
                                                      <!--begin::Tiles Widget 2-->
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/contract.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Consultancy Agreement</h2>
                                                          <p class="text-white">
                                                            Create a Consultancy Agreement to clearly define the scope, fees and obligations for your consulting services.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-xl-6">
                                                      <!--begin::Tiles Widget 2-->
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/environment.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Environmental Policy</h2>
                                                          <p class="text-white">
                                                            Draft an Environmental Policy that sets out your sustainability objectives and the standards your team must uphold.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--end::Col-->


                                                    <!-- Fire Risk Assessment -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/fire.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Fire Risk Assessment</h2>
                                                          <p class="text-white">
                                                            Identify potential fire hazards and evaluate risks to keep your premises safe and compliant.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Health and Safety Policy -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/health.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Health and Safety Policy</h2>
                                                          <p class="text-white">
                                                            Establish a Health and Safety Policy to protect employees from workplace hazards and ensure compliance.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Letter of Intent -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/letter.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Letter of Intent</h2>
                                                          <p class="text-white">
                                                            Outline your proposed terms and intentions with a clear Letter of Intent for future agreements.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Non-Disclosure Agreement (NDA) -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/lock.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Non-Disclosure Agreement (NDA)</h2>
                                                          <p class="text-white">
                                                            Safeguard your confidential information during partnerships, employment, or negotiations with a robust NDA.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Privacy Policy Template -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/privacy.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Privacy Policy Template</h2>
                                                          <p class="text-white">
                                                            Create a Website Privacy Policy to protect your users’ data and ensure compliance with legal requirements.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Safeguarding Policy -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/shield.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Safeguarding Policy</h2>
                                                          <p class="text-white">
                                                            Establish a Safeguarding Policy to protect your organisation’s reputation and ensure care for those you serve.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Website Terms & Conditions -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/terms.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Website Terms & Conditions</h2>
                                                          <p class="text-white">
                                                            Define the rules, responsibilities, and protections for users of your website with comprehensive Terms & Conditions.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!--end::Col-->

                                                </div>
                                                <!--end::Row-->


                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8" id="contract">

                                                    <div class="col-xl-12">
                                                        <!--begin::Tiles Widget 4-->
                                                        <div class="card h-150px card-xl-stretch">
                                                            <!--begin::Body-->
                                                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                                                <div class="me-2">
                                                                    <h2 class="fw-bold text-gray-800 mb-3">Contracts</h2>
                                                                    <div class="text-muted fw-semibold fs-6">Well-crafted, clearly defined agreements are vital for outlining rights and obligations in employment, service, and recruitment arrangements. These legal documents safeguard all parties by promoting transparency and ensuring compliance with UK regulations.</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::Tiles Widget 4-->
                                                    </div>

                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">

                                                    <!-- Employment Contract -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/employment.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Employment Contract</h2>
                                                          <p class="text-white">
                                                            Create a compliant Employment Contract to define roles, obligations and terms for new hires in your organization.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Independent Contractor Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/contractor.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Independent Contractor Agreement</h2>
                                                          <p class="text-white">
                                                            Draft an Independent Contractor Agreement to set out responsibilities, compensation and service terms.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Job Offer Letter -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/offer.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Job Offer Letter</h2>
                                                          <p class="text-white">
                                                            Outline the terms of employment—including salary, benefits and start date—in a clear Job Offer Letter.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Letter of Recommendation -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/recommendation.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Letter of Recommendation</h2>
                                                          <p class="text-white">
                                                            Draft a Letter of Recommendation that highlights an applicant’s strengths and qualifications.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Non-Compete Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/noncompete.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Non-Compete Agreement</h2>
                                                          <p class="text-white">
                                                            Prepare a Non-Compete Agreement to ensure former employees don’t use your trade secrets elsewhere.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Service Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/service.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Service Agreement</h2>
                                                          <p class="text-white">
                                                            Define the terms, deliverables and payment details with a clear Service Agreement.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>


                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8" id="finance">

                                                    <div class="col-xl-12">
                                                        <!--begin::Tiles Widget 4-->
                                                        <div class="card h-150px card-xl-stretch">
                                                            <!--begin::Body-->
                                                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                                                <div class="me-2">
                                                                    <h2 class="fw-bold text-gray-800 mb-3">Finance</h2>
                                                                    <div class="text-muted fw-semibold fs-6">Adhering to legal requirements is essential in finance. Ensure your critical transactions proceed without a hitch by completing a tailored legal form or contract specific to your jurisdiction.</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::Tiles Widget 4-->
                                                    </div>

                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">


                                                    <!-- Invoice Template -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/invoice.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Invoice Template</h2>
                                                          <p class="text-white">
                                                            Generate an Invoice to list goods or services provided, with costs, payment terms and client details.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Loan Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/loan.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Loan Agreement</h2>
                                                          <p class="text-white">
                                                            Define repayment schedule, interest and obligations in a formal Loan Agreement.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8" id="property">

                                                    <div class="col-xl-12">
                                                        <!--begin::Tiles Widget 4-->
                                                        <div class="card h-150px card-xl-stretch">
                                                            <!--begin::Body-->
                                                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                                                <div class="me-2">
                                                                    <h2 class="fw-bold text-gray-800 mb-3">Property</h2>
                                                                    <div class="text-muted fw-semibold fs-6">Strong legal documents are indispensable in real estate. Use our guided contract generator to quickly draft tailored agreements for efficient rental property management.</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::Tiles Widget 4-->
                                                    </div>

                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">

                                                    <!-- Commercial Lease -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/lease.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Commercial Lease</h2>
                                                          <p class="text-white">
                                                            Draft a Commercial Lease Agreement for renting property for retail, office or industrial use.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Eviction Notice -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/eviction.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Eviction Notice</h2>
                                                          <p class="text-white">
                                                            Issue a compliant Eviction Notice to formally remove tenants and regain possession of your property.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Landlord Reference Letter -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/reference.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Landlord Reference Letter</h2>
                                                          <p class="text-white">
                                                            Provide a professional Landlord Reference Letter to attest to a tenant’s reliability and history.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!-- Lodger Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/lodger.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Lodger Agreement</h2>
                                                          <p class="text-white">
                                                            Create a Lodger Agreement to formalise your living arrangement and outline rights and duties.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Rental Application -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/application.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Rental Application</h2>
                                                          <p class="text-white">
                                                            Build a Tenancy Rental Application to screen and evaluate prospective tenants effectively.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Rental Property Inspection Checklist -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/checklist.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Rental Property Inspection Checklist</h2>
                                                          <p class="text-white">
                                                            Generate an Inspection Checklist to assess property condition and ensure all standards are met.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Roommate Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/roommate.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Roommate Agreement</h2>
                                                          <p class="text-white">
                                                            Establish a Roommate Agreement to set clear terms, responsibilities, and guidelines for cohabitation.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Section 21 Eviction Notice -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/section21.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Section 21 Eviction Notice</h2>
                                                          <p class="text-white">
                                                            Issue a Section 21 Notice to lawfully end an assured shorthold tenancy and regain possession.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Tenancy Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/tenancy.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Tenancy Agreement</h2>
                                                          <p class="text-white">
                                                            Draft a Tenancy Agreement to outline rental terms, obligations, and conditions for UK property leases.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                </div>
                                                <!--end::Row-->

                                                                    
                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8" id="personal_and_family">

                                                    <div class="col-xl-12">
                                                        <!--begin::Tiles Widget 4-->
                                                        <div class="card h-150px card-xl-stretch">
                                                            <!--begin::Body-->
                                                            <div class="card-body d-flex align-items-center justify-content-between flex-wrap">
                                                                <div class="me-2">
                                                                    <h2 class="fw-bold text-gray-800 mb-3">Personal and Family</h2>
                                                                    <div class="text-muted fw-semibold fs-6">Prepare essential legal documents to confidently manage your personal and family matters, clearly stating your intentions and providing peace of mind for you and your loved ones.</div>
                                                                </div>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end::Tiles Widget 4-->
                                                    </div>

                                                </div>
                                                <!--end::Row-->




                                                <!--begin::Row-->
                                                <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8">

                                                    <!-- Cohabitation Agreement -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/cohabitation.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Cohabitation Agreement</h2>
                                                          <p class="text-white">
                                                            Formalise living arrangements and outline separation procedures with a Cohabitation Agreement.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                    <!-- Last Will and Testament -->
                                                    <div class="col-xl-6">
                                                      <div class="card min-h-195px bgi-no-repeat bgi-size-contain card-xl-stretch mb-5 mb-xl-8"
                                                           style="background-color: #1C325E; background-position: right; background-image:url('assets/media/svg/misc/will.svg')">
                                                        <div class="card-body d-flex flex-column justify-content-between">
                                                          <h2 class="text-white fw-bold mb-5">Last Will and Testament</h2>
                                                          <p class="text-white">
                                                            Draft a Last Will and Testament to ensure your assets are distributed, executors are appointed, and guardians named.
                                                          </p>
                                                          <div class="m-0 mt-5">
                                                            <a href="#" class="btn btn-danger fw-semibold px-6 py-3">Create</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>

                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->

<!-- скрипт подсветки разделов и плавного перехода -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const sidebarMenu = document.getElementById('sidebar_menu');
    const menuLinks = sidebarMenu.querySelectorAll('a');
    const headerOffset = 125; // <-- смещение вниз на 170px

    // Плавный скроллинг при клике
    menuLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                window.scrollTo({
                    top: elementPosition - headerOffset, // <-- вычитаем 170px
                    behavior: 'smooth'
                });
            }
        });
    });

    // Подсветка активного пункта при скролле
    window.addEventListener('scroll', () => {
        let currentSection = '';

        document.querySelectorAll('.scroll-anchor').forEach(section => {
            const sectionTop = section.offsetTop - headerOffset;

            if (pageYOffset >= sectionTop) {
                currentSection = section.getAttribute('id');
            }
        });

        menuLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').substring(1) === currentSection) {
                link.classList.add('active');
            }
        });
    });
});
</script>









