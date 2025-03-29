<?php
$project_id = $GLOBALS['metronic_draft_project_id'] ?? (isset($_COOKIE['draft_project_id']) ? intval($_COOKIE['draft_project_id']) : 0);
$are_you_value = get_post_meta($project_id, 'are_you', true);
$legal_residence_value = get_post_meta($project_id, 'legal_residence', true);
$post_id = get_the_ID();
$title = get_the_title($post_id);
$content = get_post_field('post_content', $post_id);
$city = get_post_meta($project_id, 'city', true);

?>





                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid" >
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <!--begin::Connected Accounts-->
                                    <div class="card mb-5 mb-xl-10 form-wizard" data-project-id="<?php echo esc_attr($project_id); ?>">

                                        <div class="progress h-8px w-100 bg-light-primary">
                                          <div class="progress-bar bg-primary"
                                               role="progressbar"
                                               style="width: 0%;"
                                               aria-valuenow="0"
                                               aria-valuemin="0"
                                               aria-valuemax="100"></div>
                                        </div>


                                          
                                        <div class="card-body">
                                            
                                            <!-- begin:Step1 --> 
                                            <div class="form-step step-1" data-step="1">


                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Who are you</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Please specify exactly who you are in <br>relation to the chattel.</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="are_you" 
                                                                        class="form-select form-select-solid form-select-lg" 
                                                                        data-control="select2" 
                                                                        data-placeholder="The home owner"
                                                                        id="are_you">
                                                                    <option value="home_owner" <?php selected($are_you_value, 'home_owner'); ?>>The home owner</option>
                                                                    <option value="property_manager" <?php selected($are_you_value, 'property_manager'); ?>>The property manager</option>
                                                                    <option value="investor" <?php selected($are_you_value, 'investor'); ?>>A real estate investor</option>
                                                                    <option value="relative" <?php selected($are_you_value, 'relative'); ?>>A relative of home owner</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2 fv-row"></div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row d-flex justify-content-center">
                                                        <button type="button" class="btn btn-primary next-step">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end:Step1 -->

                                            <!-- begin:Step2 -->
                                            <div class="form-step step-2" data-step="2">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Status of “legal residence”</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Were these tenants<br>ever legal tenants?</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="legal_residence" 
                                                                        class="form-select form-select-solid form-select-lg" 
                                                                        data-control="select2" 
                                                                        data-placeholder="No"
                                                                        id="legal_residence">
                                                                    <option value="legal_residence_no" <?php selected($legal_residence_value, 'no'); ?>>No</option>

                                                                    <option value="legal_residence_yes" <?php selected($legal_residence_value, 'yes'); ?>>Yes</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2 fv-row"></div>
                                                        </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 fv-row d-flex justify-content-center">
                                                        <button type="button" class="btn btn-success prev-step ms-3 me-3">Back</button>
                                                        <button type="button" class="btn btn-primary next-step ms-3 me-3">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end:Step2 -->

                                            <!-- begin:Step3 --> 
                                            <div class="form-step step-3" data-step="3">


                                                <!--begin::Heading-->
                                                <div class="text-center mb-5 mt-5">
                                                    <!--begin::Title-->
                                                    <h3 class="fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Who are you</h3>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Please specify exactly who you are in <br>relation to the chattel.</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label">Project Title</label>
                                                    <input type="text" class="form-control" name="post_title" placeholder="Что-то" />
                                                </div>

                                                <div class="mb-4">
                                                    <label class="form-label">Project Description</label>
                                                    <textarea class="form-control" name="post_content"><?php echo esc_textarea($content); ?></textarea>
                                                </div>
                                                <button type="button" class="btn btn-success prev-step">Back</button>
                                                <button type="button" class="btn btn-primary next-step">Next</button>
                                            </div>
                                            <!-- end:Step3 -->

                                            <!-- begin:Step4 -->   
                                            <div class="form-step step-4" data-step="4" style="display: none;">
                                                <div class="mb-4">
                                                    <label class="form-label">City *</label>
                                                    <input type="text" class="form-control" name="city" id="city"  value="<?php echo esc_attr($city); ?>" />
                                                </div>
                                                <button type="button" class="btn btn-success prev-step">Back</button>
                                                <button type="button" class="btn btn-primary submit-form">Submit</button>
                                            </div>
                                            <!-- end:Step4 -->


                                        </div>

                                    </div>
                                    <!--end::Connected Accounts-->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->









