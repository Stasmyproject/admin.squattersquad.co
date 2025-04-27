<?php
/**
 * Template Name: 1. Шаблон для категорий "Документ"
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
                                                <!--begin::Title-->
                                                <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7 text-center">
                                                <span class="me-2"><?php the_field('big_tittle_page'); ?></span></div>
                                                <p class="text-white text-center fs-4"><?php the_field('big_area_text_page'); ?></p>
                                                <br />
                                                <!--end::Title-->



											<!-- Скрипт работы документа -->


		                                    <!--begin::Row-->
		                                    <div class="row gx-5 gx-xl-8 mb-5 mb-xl-8" id="business">
		                                        <div class="col-xl-12">
		                                            <!--begin::Tiles Widget 4-->
		                                            <div class="mb-5 mb-lg-10">
		                                                <!--begin::Tabs-->
		                                                <ul class="nav row mb-lg-10 text-center justify-content-center flex-wrap" role="tablist">


															<?php if( have_rows('document_sections') ): ?>
															    <?php while( have_rows('document_sections') ): the_row(); ?>
															        <?php if( get_row_layout() == 'copyright_infringement' ): ?>


															    <!-- Вывод секции "Copyright Infringement" -->
			                                                    <li class="nav-item col-12 col-lg-2 col-lg mb-5 mb-lg-0" role="presentation">
			                                                        <a class="nav-link btn btn-flex btn-color-muted btn-outline btn-outline-default btn-active-danger d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px" 
			                                                        data-doc="<?php the_sub_field('ancor_page'); ?>"
			                                                        data-bs-toggle="tab" 
			                                                        href="#kt_general_widget_1_1" 
			                                                        aria-selected="false" 
			                                                        role="tab" 
			                                                        tabindex="-1">
			                                                            <i class="ki-duotone <?php the_sub_field('button_text'); ?> fs-2x mb-5 mx-0">
			                                                                <span class="path1"></span>
			                                                                <span class="path2"></span>
			                                                            </i>
			                                                            <span class="fs-6 fw-bold"><?php the_sub_field('title'); ?></span>
			                                                        </a>
			                                                    </li>
															        <?php elseif( get_row_layout() == 'main_categories' ): ?>
					
																			<h1 class="text-white"> Информации нет!!!</h1>
															        <?php endif; ?>
															    <?php endwhile; ?>
															<?php endif; ?>

		                                                </ul>
		                                            </div>
		                                            <!--end::Tiles Widget 4-->
		                                        </div>
		                                    </div>
		                                    <!--end::Row-->


											<!--begin::Start Document Button-->
											<div class="text-center mt-5">
											    <button id="startDocumentBtn" class="btn btn-danger btn-lg fw-bold">
											       Start document generation
											    </button>
											</div>
											<!--end::Start Document Button-->

											<!-- Скрипт работы документа -->
											<script>
												document.addEventListener("DOMContentLoaded", function () {
												    const button = document.getElementById("startDocumentBtn");

												    button.addEventListener("click", function () {
												        const activeTab = document.querySelector('.nav-link[aria-selected="true"][data-doc]');
												        if (activeTab) {
												            const docSlug = activeTab.getAttribute('data-doc').replace(/_/g, '-');
												            const redirectUrl = `/legal-documents/business/${encodeURIComponent(docSlug)}/`;
												            window.location.href = redirectUrl;
												        } else {
												            alert("Please select a document type.");
												        }
												    });
												});

											</script>


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
																				<!--begin::Description-->
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


																				<!--begin::Accordion-->
																				<!--begin::Section-->
																				<div class="m-0">

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
																			<div class="mb-10 mb-lg-0 scroll-anchor" id="h2_tittle_document_sample">
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



																		<div class="row">
																		<!--begin::Col-->
																		<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-4 mb-md-5 mb-xl-10 pt-5">

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
																					             class="mw-100 mh-200px card-rounded w-100 object-fit-contain" />
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
																		            <h4 class="text-dark mb-2">You are only a few steps away from your own <span class="text-primary"><?php the_field('big_tittle_page'); ?></span>!</h4>
																		            <a href="#" class="btn btn-primary fw-bold w-100 mt-4">Create a document</a>
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
																		<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-8 mb-md-5 mb-xl-10 pt-5">
																			<p class="fw-semibold fs-4 text-gray-600 mb-2">
																				<strong>Download the Word document</strong></br>
After downloading, you can open the file using any program that supports Word format. This allows you to edit the document directly and customize it to fit your specific needs.<p>
																			<p class="fw-semibold fs-4 text-gray-600 mb-2">
																				<strong>Download the PDF document</strong></br>
This version is ready for printing. You will not be able to edit the content digitally, but you can fill it out by hand after printing.<p>
																			<p class="fw-semibold fs-4 text-gray-600 mb-2">
																				<strong>Complete the document online</strong></br>
The best option. Fill out the form directly on the website and instantly receive a ready-to-print or ready-to-send document. This method ensures speed, accuracy, and convenience.</br></br>
Your completed documents are stored securely on our server. You can download them at any time or forward them to a specialist for review or submission.<p>


																		</div>
																		<!--end::Col-->
																		</div>



																		</div>
																		<!--end::Content-->

																	</div>
																	<!--end::Layout-->












																	<!-- Основной контент -->
																	<div class="container py-10">



																	  <!-- Секция контента с якорями -->
																	  <section class="mt-10">
																	    <h2 id="what-is" class="mb-5">What is a Cease and Desist Letter?</h2>
																	    <p><strong>Cease and Desist Letter</strong> is a formal notice sent to an individual or organization, instructing them to stop engaging in behavior that infringes upon your rights. It serves both as a preventative warning and as written documentation of your effort to resolve a dispute before pursuing legal action.</p>
																	    <p>Often utilized in cases such as <em>harassment, defamation, intellectual property violations</em>, or <em>contract breaches</em>, this letter outlines your concerns and the potential legal consequences if the behavior continues.</p>



																	    <h2 id="uses" class="mt-10 mb-5">When Should You Use One?</h2>
																	    <h3 class="mt-5">1. Harassment</h3>
																	    <p>Whether it's through persistent messaging, stalking, or workplace conflict, harassment is a common reason to issue a Cease and Desist. It clearly communicates that such behavior must stop immediately, offering legal backup if the harassment persists.</p>

																	    <h3 class="mt-5">2. Defamation</h3>
																	    <p>When false statements are damaging your reputation, a Cease and Desist Letter can request that the individual stop and retract their comments. This is particularly useful in the era of online slander or social media attacks.</p>

																	    <h3 class="mt-5">3. Intellectual Property Infringement</h3>
																	    <p>If someone is using your copyright, trademark, or patent without permission, this letter helps assert your rights and demand immediate removal of the infringing content.</p>

																	    <h3 class="mt-5">4. Breach of Contract</h3>
																	    <p>If another party fails to honor a legal agreement, a Cease and Desist can notify them of the breach and urge them to comply before legal proceedings begin.</p>

																	    <h2 id="grounds" class="mt-10 mb-5">What Are the Legal Grounds?</h2>
																	    <ul class="fs-6">
																	      <li><strong>Harassment:</strong> Repeated behavior causing emotional or physical distress</li>
																	      <li><strong>Defamation:</strong> False statements harming your reputation</li>
																	      <li><strong>IP Infringement:</strong> Unauthorized use of protected content or branding</li>
																	      <li><strong>Breach of Contract:</strong> Violating agreed-upon terms</li>
																	      <li><strong>Trespassing:</strong> Unauthorized entry onto private property</li>
																	    </ul>

																	    <h2 id="how-to-write" class="mt-10 mb-5">How to Draft a Cease and Desist Letter</h2>
																	    <ol class="fs-6">
																	      <li><strong>Identify the parties:</strong> Include full names and contact details of both sender and recipient.</li>
																	      <li><strong>Describe the issue:</strong> Clearly explain the behavior in question with specific examples.</li>
																	      <li><strong>Demand action:</strong> State what needs to stop and what actions are expected.</li>
																	      <li><strong>Warn of legal action:</strong> Outline potential consequences if the behavior continues.</li>
																	      <li><strong>Document delivery:</strong> Note how the letter was delivered (email, mail, etc.) to create a record.</li>
																	    </ol>

																	    <h2 id="faqs" class="mt-10 mb-5">Frequently Asked Questions</h2>
																	    <h3 class="mt-5">Does a Cease and Desist go on someone’s legal record?</h3>
																	    <p>No, it’s not a legal filing. It serves as a formal notice and can be used later in court as evidence of your attempt to resolve the matter amicably.</p>

																	    <h3 class="mt-5">Is it legally enforceable?</h3>
																	    <p>Not on its own. But it’s a strong warning, and if ignored, it may lead to enforceable court orders such as injunctions or damage claims.</p>

																	    <h3 class="mt-5">What happens if someone ignores it?</h3>
																	    <p>Failure to comply can escalate the dispute into a lawsuit. You may pursue legal action, including compensation or court-mandated compliance.</p>
																	  </section>

																	</div>
																	<!-- окончание основного контента -->




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


										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
										    <!--begin::Card-->
										    <div class="card card-flush text-center py-10 px-6"
	                                                data-kt-sticky="true" 
	                                                data-kt-sticky-name="invoice" 
	                                                data-kt-sticky-offset="{default: false, lg: '580px'}" data-kt-sticky-width="{lg: '250px', lg: '290px'}" 
	                                                data-kt-sticky-left="auto" 
	                                                data-kt-sticky-top="120px" 
	                                                data-kt-sticky-animation="false" 
	                                                data-kt-sticky-zindex="95">

													<!--begin::Image (с увеличением при клике)-->
													<div class="mb-5">
													    <a class="d-block overlay h-100"
													       data-fslightbox="lightbox-business-plan"
													       href="https://admin.squattersquad.co/wp-content/uploads/2025/04/notice-to-vacate-sample.webp">

													        <!-- begin::Image -->
													        <img src="https://admin.squattersquad.co/wp-content/uploads/2025/04/notice-to-vacate-sample.webp"
													             alt="Business Plan"
													             class="mw-100 mh-200px card-rounded w-100 object-fit-contain" />
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
										            <h4 class="text-dark mb-2">You are only a few steps away from your own <span class="text-primary"><?php the_field('big_tittle_page'); ?></span>!</h4>
										            <a href="#" class="btn btn-primary fw-bold w-100 mt-4">Create a document</a>
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







										<!--begin::Col-->
										<div class="col-xxl-9">
											<!--begin::Card widget 18-->
											<div class="card card-flush h-xl-100">
												<!--begin::Body-->
												<div class="card-body py-9">
													<!--begin::Row-->
													<div class="row gx-9 h-100">
														<!--begin::Col-->
														<div class="col-sm-6 mb-10 mb-sm-0">
															<!--begin::Image-->
															<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-65.jpg')"></div>
															<!--end::Image-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-sm-6">
															<!--begin::Wrapper-->
															<div class="d-flex flex-column h-100">
																<!--begin::Header-->
																<div class="mb-7">
																	<!--begin::Headin-->
																	<div class="d-flex flex-stack mb-6">
																		<!--begin::Title-->
																		<div class="flex-shrink-0 me-5">
																			<span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
																			<span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
																		</div>
																		<!--end::Title-->
																		<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
																	</div>
																	<!--end::Heading-->
																	<!--begin::Items-->
																	<div class="d-flex align-items-center flex-wrap d-grid gap-2">
																		<!--begin::Item-->
																		<div class="d-flex align-items-center me-5 me-xl-13">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-500 d-block fs-8">Manager</span>
																				<a href="pages/user-profile/overview.html" class="fw-bold text-gray-800 text-hover-primary fs-7">Robert Fox</a>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																		<!--begin::Item-->
																		<div class="d-flex align-items-center">
																			<!--begin::Symbol-->
																			<div class="symbol symbol-30px symbol-circle me-3">
																				<span class="symbol-label bg-success">
																					<i class="ki-duotone ki-abstract-41 fs-5 text-white">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i>
																				</span>
																			</div>
																			<!--end::Symbol-->
																			<!--begin::Info-->
																			<div class="m-0">
																				<span class="fw-semibold text-gray-500 d-block fs-8">Budget</span>
																				<span class="fw-bold text-gray-800 fs-7">$64.800</span>
																			</div>
																			<!--end::Info-->
																		</div>
																		<!--end::Item-->
																	</div>
																	<!--end::Items-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div class="mb-6">
																	<!--begin::Text-->
																	<span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony illustrations with vivid unblended colors and asymmetrical beautiful purple hair lady</span>
																	<!--end::Text-->
																	<!--begin::Stats-->
																	<div class="d-flex">
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
																			<!--begin::Date-->
																			<span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
																			<!--end::Date-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-500">Due Date</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																		<!--begin::Stat-->
																		<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
																			<!--begin::Number-->
																			<span class="fs-6 text-gray-700 fw-bold">$
																			<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="284,900.00">0</span></span>
																			<!--end::Number-->
																			<!--begin::Label-->
																			<div class="fw-semibold text-gray-500">Budget</div>
																			<!--end::Label-->
																		</div>
																		<!--end::Stat-->
																	</div>
																	<!--end::Stats-->
																</div>
																<!--end::Body-->
																<!--begin::Footer-->
																<div class="d-flex flex-stack mt-auto bd-highlight">
																	<!--begin::Users group-->
																	<div class="symbol-group symbol-hover flex-nowrap">
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
																			<img alt="Pic" src="assets/media/avatars/300-2.jpg" />
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																			<img alt="Pic" src="assets/media/avatars/300-3.jpg" />
																		</div>
																		<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
																			<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
																		</div>
																	</div>
																	<!--end::Users group-->
																	<!--begin::Actions-->
																	<a href="apps/projects/project.html" class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">View Project 
																	<i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
																		<span class="path1"></span>
																		<span class="path2"></span>
																	</i></a>
																	<!--end::Actions-->
																</div>
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
											<!--end::Card widget 18-->
										</div>
										<!--end::Col-->


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






