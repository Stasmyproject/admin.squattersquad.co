<?php
$project_id = $GLOBALS['metronic_draft_project_id'] ?? (isset($_COOKIE['draft_project_id']) ? intval($_COOKIE['draft_project_id']) : 0);
$are_you_value = get_post_meta($project_id, 'are_you', true);
$legal_residence_value = get_post_meta($project_id, 'legal_residence', true);
$squatters_duration_value = get_post_meta($project_id, 'squatters_duration', true);
$police_contacted_value = get_post_meta($project_id, 'police_contacted', true);
$utility_services_value = get_post_meta($project_id, 'utility_services', true);
$receive_mail_value = get_post_meta($project_id, 'receive_mail', true);
$money_requested_to_leave_value = get_post_meta($project_id, 'money_requested_to_leave', true);
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
                                            
                                            <!-- begin:Step1 Кто ты--> 
                                            <div class="form-step step-1" data-step="1">


                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Who are you</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Please specify exactly who you are in relation to the chattel.</div>
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

                                            <!-- begin:Step2 Какой статус-->
                                            <div class="form-step step-2" data-step="2" style="display: none;">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Status of “legal residence”</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Were these tenants ever legal tenants?</div>
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


                                            <!-- begin:Step3 Как долго-->
                                            <div class="form-step step-3" data-step="3" style="display: none;">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">How long</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">How long have the squatters been on your property?</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="squatters_duration" 
                                                                        class="form-select form-select-solid form-select-lg" 
                                                                        data-control="select2" 
                                                                        id="squatters_duration">

                                                                    <option value="less_than_week" <?php selected($squatters_duration_value, 'less_than_week'); ?>>Less than a week</option>
                                                                    <option value="1_4_weeks" <?php selected($squatters_duration_value, '1_4_weeks'); ?>>1–4 weeks</option>
                                                                    <option value="1_3_months" <?php selected($squatters_duration_value, '1_3_months'); ?>>1–3 months</option>
                                                                    <option value="more_than_3_months" <?php selected($squatters_duration_value, 'more_than_3_months'); ?>>More than 3 months</option>

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
                                            <!-- end:Step3 -->

                                            <!-- begin:Step4 Обращялись ли в полицию-->
                                            <div class="form-step step-4" data-step="4" style="display: none;">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Police</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Have you contacted the police?</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="police_contacted" 
                                                                        class="form-select form-select-solid form-select-lg" 
                                                                        data-control="select2" 
                                                                        id="police_contacted">

                                                                    <option value="police_contacted_yes" <?php selected($police_contacted_value, 'police_contacted_yes'); ?>>Yes</option>
                                                                    <option value="police_contacted_no" <?php selected($police_contacted_value, 'police_contacted_no'); ?>>No</option>
                                                                    

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
                                            <!-- end:Step4 -->

                                            <!-- begin:Step5 Комунальные услуги-->
                                            <div class="form-step step-5" data-step="5" style="display: none;">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Utility services</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Did they use utilities, turn on gas, lights and so on ?</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="utility_services" 
                                                                        class="form-select form-select-solid form-select-lg" 
                                                                        data-control="select2" 
                                                                        id="utility_services">

                                                                    <option value="utility_services_yes" <?php selected($utility_services_value, 'utility_services_yes'); ?>>Yes</option>
                                                                    <option value="utility_services_no" <?php selected($utility_services_value, 'utility_services_no'); ?>>No</option>
                                                                    

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
                                            <!-- end:Step5 -->

                                            <!-- begin:Step6 Получали ли вы почту ?-->
                                            <div class="form-step step-6" data-step="6" style="display: none;">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Receive mail</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Did you receive mail at your address?</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="receive_mail" 
                                                                        class="form-select form-select-solid form-select-lg" 
                                                                        data-control="select2" 
                                                                        id="receive_mail">
                                                                    <option value="receive_mail_yes" <?php selected($receive_mail_value, 'receive_mail_yes'); ?>>Yes</option>
                                                                    <option value="receive_mail_no" <?php selected($receive_mail_value, 'receive_mail_no'); ?>>No</option>
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
                                            <!-- end:Step6 -->                                            

                                            <!-- begin:Step7 Подкуп-->
                                            <div class="form-step step-7" data-step="7" style="display: none;">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Extortion</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Has money been asked for checkout money?</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="money_requested_to_leave" 
                                                                        class="form-select form-select-solid form-select-lg" 
                                                                        data-control="select2" 
                                                                        id="money_requested_to_leave">
                                                                    <option value="money_requested_to_leave_yes" <?php selected($money_requested_to_leave_value, 'money_requested_to_leave_yes'); ?>>Yes</option>
                                                                    <option value="receive_mail_no" <?php selected($money_requested_to_leave_value, 'money_requested_to_leave_no'); ?>>No</option>
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
                                            <!-- end:Step7 -->


                                            <!-- begin:Step7 Большое описание--> 
                                            <div class="form-step step-7" data-step="7">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-5 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Bescribe the situation</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Describe the situation in as much detail as possible, with all the details.</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <textarea class="form-control" name="post_content"><?php echo esc_textarea($content); ?></textarea>
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
                                            <!-- end:Step7 -->


                                            <!-- begin:Step8 Адресс--> 
                                            <div class="form-step step-8" data-step="8">
                                                <!--begin::Heading-->
                                                <div class="text-center mb-5 mt-5">
                                                    <!--begin::Title-->
                                                    <label class=" form-label fs-2hx text-gray-900 mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">City</label>
                                                    <!--end::Title-->
                                                    <!--begin::Text-->
                                                    <div class="fs-5 text-muted fw-bold">Provide the exact address where the property is located.</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Heading-->

                                                <div class="mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-6 fv-row">
                                                            <div class="mb-4">
                                                                <label class="form-label">State</label>
                                                                <select name="state" id="state" class="form-select form-select-solid form-select-lg">
                                                                    <option value="">Select State</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 fv-row">
                                                            <div class="mb-4">
                                                                <label class="form-label">County</label>
                                                                <select name="county" id="county" class="form-select form-select-solid form-select-lg" disabled>
                                                                    <option value="">Select County</option>
                                                                </select>
                                                            </div>                         
                                                        </div>
                                                        <div class="col-lg-6 fv-row">
                                                            <div class="mb-4">
                                                                <label class="form-label">City</label>
                                                                <select name="city" id="city_select" class="form-select form-select-solid form-select-lg" disabled>
                                                                    <option value="">Select City</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 fv-row">
                                                            <div class="mb-4">
                                                                <label class="form-label">ZIP Code</label>
                                                                <select name="zip" id="zip" class="form-select form-select-solid form-select-lg" disabled>
                                                                    <option value="">Select ZIP Code</option>
                                                                </select>
                                                            </div>
                                                        </div>



                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 fv-row d-flex justify-content-center">
                                                        <button type="button" class="btn btn-success prev-step ms-3 me-3">Back</button>
                                                        <button type="button" class="btn btn-primary next-step ms-3 me-3">Next</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end:Step8 -->







<!-- ✅ STEP 8: Address Selection -->
<div class="form-step step-8" data-step="8" style="display: none;">






    <button type="button" class="btn btn-success prev-step">Back</button>
    <button type="button" class="btn btn-primary next-step">Next</button>
</div>


                                            <!-- begin:Дуюлирование города -->   
                                            <div class="form-step step-9" data-step="9" style="display: none;">
                                                <div class="mb-4">
                                                    <label class="form-label">City *</label>
                                                        <div class="col-lg-6 fv-row">
                                                            <input type="text" class="form-control" name="city" id="city"  value="<?php echo esc_attr($city); ?>" />
                                                        </div>

                                                </div>
                                                <button type="button" class="btn btn-success prev-step">Back</button>
                                                <button type="button" class="btn btn-primary submit-form">Submit</button>
                                            </div>
                                              
                                            <!-- end:Дуюлирование города -->


                                        </div>

                                    </div>
                                    <!--end::Connected Accounts-->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->









