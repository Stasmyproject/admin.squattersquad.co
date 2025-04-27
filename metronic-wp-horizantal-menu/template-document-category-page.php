<?php
/**
 * Template Name: 2. Шаблон для страниц "Документ"
 * Template Post Type: document_pages
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
                            <!--///////////////////-->



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

                                            	<!--begin::Row-->
                                            	<div class="row gx-5 gx-xl-8">

                                            	<!--begin::Контейнер блока заголовка -->
                                            	<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-9 mb-md-5 mb-xl-10 pt-5">
	                                                <!--begin::Title-->
	                                                <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
	                                                <span class="me-2 display-6"><?php the_field('big_tittle_page'); ?></span></div>


	                                                <p class="text-white  fs-4"><?php the_field('big_area_text_page'); ?></p>
	                                                <br />
	                                                <!--end::Title-->
                                                </div>
                                                <!--end::Контейнер блока заголовка -->

                                            	<!--begin::Контейнер блока заголовка -->
                                            	<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10 pt-5">

												    <!--begin::Card-->
												    <div class="card card-flush text-center py-10 px-6">

															<!--begin::Image (с увеличением при клике)-->
															<div class="mb-5">
															    <a class="d-block overlay h-100"
															       data-fslightbox="lightbox-business-plan"
															       href="<?php the_field('photo_document_sample'); ?>">

															        <!-- begin::Image -->
															        <img src="<?php the_field('photo_document_sample'); ?>"
															             alt="Business Plan"
															             class="mw-100 mh-400px card-rounded w-100 object-fit-contain" />
															        <!-- end::Image -->

															        <!-- begin::Action -->
															        <div class="overlay-layer card-rounded bg-dark bg-opacity-25 d-flex align-items-center justify-content-center">
															            <i class="ki-duotone ki-eye fs-2x text-white">
															                <span class="path1"></span>
															                <span class="path2"></span>
															                <span class="path3"></span>
															            </i>
															        </div>
															        <!-- end::Action -->

															    </a>
															</div>
															<!--end::Image-->



												        <!--begin::Text-->
												        <div class="mb-5">
												            <a href="#" class="btn btn-danger fw-bold w-100 mt-4">Create a document</a>
												        </div>
												        <!--end::Text-->

												        <!--begin::Buttons-->
												        <div class="d-flex flex-column align-items-center gap-3 mt-4">
												            <span class="text-muted">Download our professional examples</span>
												            <div class="d-flex gap-3">
												                <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-default btn-active-light-primary fw-bold">
												                    <i class="ki-duotone ki-cloud-download fs-3 me-2"><span class="path1"></span><span class="path2"></span></i>
												                    PDF
												                </a>
												                <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-default btn-active-light-primary fw-bold">
												                    <i class="ki-duotone ki-cloud-download fs-3 me-2"><span class="path1"></span><span class="path2"></span></i>
												                    WORD
												                </a>
												            </div>
												        </div>
												        <!--end::Buttons-->
												    </div>
												    <!--end::Card-->
                                                </div>
                                                <!--end::Контейнер блока заголовка -->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--begin::Wrapper-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->


							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid py-3 py-lg-6">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">


									<!--begin::Row-->
									<div class="row g-5 gx-xl-10 mb-5 mb-xl-10">



		<!--begin::Col-->
		<div class="col-xxl-9">
			<!--begin::Engage widget 10-->
			<div class=" h-md-100">
				<!--begin::Body-->
							<!--begin::Post content-->
							<div class="mb-17">
								<!--begin::Wrapper-->
								<div class="mb-8">

								</div>
								<!--end::Wrapper-->

								<!--begin::Description-->
								<div class="fs-5 fw-semibold text-gray-600">
									<!--begin::Text-->
									<p class="mb-8"><?php the_content(); ?></p>
									<!--end::Text-->

									<!--begin::Layout-->
									<div class="d-flex flex-column flex-lg-row mb-17">
										<!--begin::Content-->
										<div class="flex-lg-row-fluid me-0 me-lg-20">
										<!--begin::Job-->
										<div class="mb-17">

											<!--begin::Accordion-->
											<!--begin::Section-->
											<div class="mb-10">

												<!--begin::Heading-->
												<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_1">
													<!--begin::Icon-->
													<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
														<i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
														<i class="ki-duotone ki-plus-square toggle-off fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Title-->
													<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Overview</h4>
													<!--end::Title-->
												</div>
												<!--end::Heading-->

												<!--begin::Body-->
												<div id="kt_job_1_1" class="collapse  fs-6 ms-1">

													<!--begin::Item-->
													<div class="mb-4">
														<!--begin::Item-->
														<div class="d-flex align-items-center ps-10 mb-n1">
															<!--begin::Bullet-->
															<span class="bullet me-3"></span>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-600 fw-semibold fs-6">
																<a href="#h2_tittle_what" class="nav-link p-0 text-hover-primary"><?php the_field('h2_tittle_what'); ?></a></div>
															<!--end::Label-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Item-->


													<!--begin::Item-->
													<div class="mb-4">
														<!--begin::Item-->
														<div class="d-flex align-items-center ps-10 mb-n1">
															<!--begin::Bullet-->
															<span class="bullet me-3"></span>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-600 fw-semibold fs-6">
																<a href="#h2_tittle_document_sample" class="nav-link p-0 text-hover-primary"><?php the_field('h2_tittle_document_sample'); ?></a></div>
															<!--end::Label-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Item-->


												</div>
												<!--end::Content-->
												<!--begin::Separator-->
												<div class="separator separator-dashed"></div>
												<!--end::Separator-->
											</div>
											<!--end::Section-->
											<!--end::Accordion-->
										</div>
										<!--end::Job-->

										<!--begin::Job-->
										<div class="mb-10 mb-lg-10 scroll-anchor" id="h2_tittle_document_sample">
											<div class="m-0">
												<!--begin::Title-->
												<h4 class="fs-1 text-gray-800 w-bolder mb-6"><?php the_field('h2_tittle_what'); ?></h4>
												<!--end::Title-->
												<!--begin::Text-->
											    <p class="fw-semibold fs-4 text-gray-600 mb-2">
											    <?php the_field('h2_area_what'); ?>
											    </p>
												<!--end::Text-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Job-->

										<!--begin::Job-->
										<div class="mb-10 mb-lg-10 scroll-anchor" id="h2_tittle_document_sample">
											<!--begin::Description-->
											<div class="m-0">
												<!--begin::Title-->
												<h4 class="fs-1 text-gray-800 w-bolder mb-6"><?php the_field('h2_tittle_document_sample'); ?></h4>
												<!--end::Title-->
												<!--begin::Text-->
												<p class="fw-semibold fs-4 text-gray-600 mb-2"><?php the_field('h2_area_document_sample'); ?></p>
												<!--end::Text-->
											</div>
											<!--end::Description-->
										</div>
										<!--end::Job-->


										<div class="card card-flush border p-10 mb-10" style="background-color: #fff3df;">
										    <ul class="list-unstyled mb-0">
												<?php if( have_rows('items_bloc') ): ?>
												    <?php while( have_rows('items_bloc') ): the_row(); ?>
												        <?php if( get_row_layout() == 'items_bloc_punkt' ): ?>
												        <li class="mb-6">
												            <span class="fw-bold fs-5 d-block text-gray-800 mb-1"><?php the_sub_field('tittlle_items_bloc'); ?></span>
												            <span class="fw-semibold fs-6 text-gray-600"><?php the_sub_field('tittlle_items_bloc_text'); ?></span>
												        </li>
												        <?php elseif( get_row_layout() == 'main_categories' ): ?>

																<h1 class="text-white"> Информации нет!!!</h1>
												        <?php endif; ?>
												    <?php endwhile; ?>
												<?php endif; ?>
										    </ul>
										</div>


										<!--begin::Job-->
										<div class="mb-10 mb-lg-10 scroll-anchor" id="h2_tittle_document_sample">
											
											<!--begin::Description-->
											<div class="mb-5">
												<!--begin::Title-->
												<h4 class="fs-1 text-gray-800 w-bolder mb-6"><?php the_field('paragraph_4'); ?></h4>
												<!--end::Title-->
												<!--begin::Text-->
												<p class="fw-semibold fs-4 text-gray-600 mb-2"><?php the_field('paragraph_4_text'); ?></p>
												<!--end::Text-->
											</div>
											<!--end::Description-->


											<!--begin::Description-->												
											<?php if( have_rows('items_bloc_paragraph_4') ): ?>
											    <?php while( have_rows('items_bloc_paragraph_4') ): the_row(); ?>
											        <?php if( get_row_layout() == 'items_bloc_paragraph_4' ): ?>
											            <div class="mb-5 ps-xl-15 ps-lg-15">
											                <!--begin::Title-->
											                <h4 class="fs-3 text-gray-800 w-bolder mb-3"><?php the_sub_field('tittlle_items_bloc'); ?></h4>
											                <!--end::Title-->
											                <!--begin::Text-->
											                <p class="fw-semibold fs-4 text-gray-600 mb-2"><?php the_sub_field('tittlle_items_bloc_text'); ?></p>
											                <!--end::Text-->
											            </div>
											        <?php elseif( get_row_layout() == 'main_categories' ): ?>
											            <h1 class="text-white">Информации нет!!!</h1>
											        <?php endif; ?>
											    <?php endwhile; ?>
											<?php endif; ?>
											<!--end::Description-->









										</div>
										<!--end::Job-->

										<!--begin::Job-->
										<div class="mb-10 mb-lg-10 scroll-anchor" id="h2_tittle_document_sample">

										<!-- Вывод записей текущей категории -->
										<?php
										// Получаем ID текущей записи
										$current_post_id = get_the_ID();

										// Получаем термины (категории) для текущей записи
										$terms = wp_get_post_terms($current_post_id, 'document_page_category');

										if (!empty($terms) && !is_wp_error($terms)) {
										    // Берем первую категорию (или можно адаптировать под несколько)
										    $current_term = $terms[0];

										    // Создаем запрос на выборку других документов из этой же категории
										    $args = array(
										        'post_type' => 'document_pages',
										        'posts_per_page' => 5, // Сколько ссылок выводить
										        'post__not_in' => array($current_post_id), // Исключаем текущую запись
										        'tax_query' => array(
										            array(
										                'taxonomy' => 'document_page_category',
										                'field'    => 'term_id',
										                'terms'    => $current_term->term_id,
										            ),
										        ),
										    );

										    $related_docs = new WP_Query($args);

										    if ($related_docs->have_posts()) :
										        echo '<div class="mb-5">';
										        echo '<h4 class="fs-1 text-gray-800 w-bolder mb-6">Related Documents</h4>';
										        echo '<ul>';
										        while ($related_docs->have_posts()) : $related_docs->the_post();
										            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
										        endwhile;
										        echo '</ul>';
										        echo '</div>';
										        wp_reset_postdata();
										    endif;
										}
										?>
										<!-- Вывод записей текущей категории -->

										</div>
										<!--end::Job-->


										<!--begin::Job-->
										<div class="mb-10 mb-lg-10 scroll-anchor" id="h2_tittle_document_sample">
											
											<!--begin::Description-->
											<div class="mb-5">
												<!--begin::Title-->
												<h4 class="fs-1 text-gray-800 w-bolder mb-6"><?php the_field('paragraph_5'); ?></h4>
												<!--end::Title-->
												<!--begin::Text-->
												<p class="fw-semibold fs-4 text-gray-600 mb-2"><?php the_field('paragraph_5_text'); ?></p>
												<!--end::Text-->
											</div>
											<!--end::Description-->


											<!--begin::Accordion-->
											<div class="accordion" id="kt_accordion_1">
											    <?php if( have_rows('items_bloc_paragraph_5') ): ?>
											        <?php $i = 0; // Счётчик для уникальных ID ?>
											        <?php while( have_rows('items_bloc_paragraph_5') ): the_row(); $i++; ?>
											            <?php if( get_row_layout() == 'items_bloc_paragraph_5' ): ?>
											                
											                <div class="accordion-item">
											                    <h2 class="accordion-header" id="kt_accordion_1_header_<?php echo $i; ?>">
											                        <button class="accordion-button fs-4 fw-semibold collapsed" type="button" 
											                                data-bs-toggle="collapse" 
											                                data-bs-target="#kt_accordion_1_body_<?php echo $i; ?>" 
											                                aria-expanded="false" 
											                                aria-controls="kt_accordion_1_body_<?php echo $i; ?>">
											                            <?php the_sub_field('tittlle_items_bloc'); ?>
											                        </button>
											                    </h2>
											                    <div id="kt_accordion_1_body_<?php echo $i; ?>" 
											                         class="accordion-collapse collapse" 
											                         aria-labelledby="kt_accordion_1_header_<?php echo $i; ?>" 
											                         data-bs-parent="#kt_accordion_1">
											                        <div class="accordion-body">
											                            <p class="fw-semibold fs-4 text-gray-600 mb-2"><?php the_sub_field('tittlle_items_bloc_text'); ?></p>
											                        </div>
											                    </div>
											                </div>

											            <?php elseif( get_row_layout() == 'main_categories' ): ?>
											                <h1 class="text-white">Информации нет!!!</h1>
											            <?php endif; ?>
											        <?php endwhile; ?>
											    <?php endif; ?>
											</div>

											<!--end::Accordion-->















										</div>
										<!--end::Job-->




									</div>
									<!--end::Content-->
								</div>
								<!--end::Layout-->
								<!--end::Text-->
							</div>
							<!--end::Description-->
							<!--end::Block-->
						</div>
						<!--end::Post content-->







												<!--end::Body-->
											</div>
											<!--end::Engage widget 10-->
										</div>
										<!--end::Col-->

										<!-- Блок плавающего документа -->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										    <!--begin::Card-->
										    <div class="card card-flush text-center py-10 px-6"
	                                                data-kt-sticky="true" 
	                                                data-kt-sticky-name="invoice" 
	                                                data-kt-sticky-offset="{default: false, lg: '780px'}" data-kt-sticky-width="{lg: '250px', lg: '290px'}" 
	                                                data-kt-sticky-left="auto" 
	                                                data-kt-sticky-top="120px" 
	                                                data-kt-sticky-animation="false" 
	                                                data-kt-sticky-zindex="95">

													<!--begin::Image (с увеличением при клике)-->
													<div class="mb-5">
													    <a class="d-block overlay h-100"
													       data-fslightbox="lightbox-business-plan"
													       href="<?php the_field('photo_document_sample'); ?>">

													        <!-- begin::Image -->
													        <img src="<?php the_field('photo_document_sample'); ?>"


													             alt="Business Plan"
													             class="mw-100 mh-400px card-rounded w-100 object-fit-contain" />
													        <!-- end::Image -->

													        <!-- begin::Action -->
													        <div class="overlay-layer card-rounded bg-dark bg-opacity-25 d-flex align-items-center justify-content-center">
													            <i class="ki-duotone ki-eye fs-2x text-white">
													                <span class="path1"></span>
													                <span class="path2"></span>
													                <span class="path3"></span>
													            </i>
													        </div>
													        <!-- end::Action -->

													    </a>
													</div>
													<!--end::Image-->



										        <!--begin::Text-->
										        <div class="mb-5">
										            <a href="#" class="btn btn-danger fw-bold w-100 mt-4">Create a document</a>
										        </div>
										        <!--end::Text-->

										        <!--begin::Buttons-->
										        <div class="d-flex flex-column align-items-center gap-3 mt-4">
										            <span class="text-muted">Download our professional examples</span>
										            <div class="d-flex gap-3">
										                <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-default btn-active-light-primary fw-bold">
										                    <i class="ki-duotone ki-cloud-download fs-3 me-2"><span class="path1"></span><span class="path2"></span></i>
										                    PDF
										                </a>
										                <a href="#" class="btn btn-outline btn-outline-dashed btn-outline-default btn-active-light-primary fw-bold">
										                    <i class="ki-duotone ki-cloud-download fs-3 me-2"><span class="path1"></span><span class="path2"></span></i>
										                    WORD
										                </a>
										            </div>
										        </div>
										        <!--end::Buttons-->
										    </div>
										    <!--end::Card-->
										</div>
										<!--end::Col-->
										<!-- Блок плавающего документа -->




									</div>
									<!--end::Row-->


								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->

							<!--///////////////////-->
                            <!--end:Content-->

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






