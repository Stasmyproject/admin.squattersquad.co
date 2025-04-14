<?php
// 🔐 Проверка авторизации
if (!is_user_logged_in()) {
    wp_redirect(wp_login_url());
    exit;

}



// 📄 Тип документа
$document_type = 'notice_to_vacate';
?>




                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid" >
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <!--begin::Loader-->
                                    <div id="form_loader" class="d-flex justify-content-center py-10">
                                        <span class="spinner-border text-primary" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </span>
                                    </div>
                                    <!--end::Loader-->


                                            <!--begin::Connected Accounts-->
                                            <div class="card mb-5 mb-xl-10 form-wizard" data-document-type="<?php echo esc_attr($document_type); ?>">



                                                <!-- Прогресс -->
                                                 <div class="progress h-8px w-100 bg-light-success">
                                                    <div class="progress-bar  bg-success"
                                                       role="progressbar"
                                                       style="width: 0%;"
                                                       aria-valuenow="0"
                                                       aria-valuemin="0"
                                                       aria-valuemax="100">
                                                        
                                                    </div>
                                                </div>

                                                <div class="card-body">











                                                    
                                                    
                                                <!-- Step 1: Who owns the property -->
                                                <div class="form-step step-1" data-step="1">


                                                    <!--begin::Heading-->
                                                    <div class="text-center mb-10 mt-5">
                                                        <label class="form-label fs-2hx text-gray-900 mb-5">About the Property</label>
                                                        <div class="fs-5 text-muted fw-bold">Please specify exactly who you are in relation to the chattel.</div>
                                                    </div>
                                                    <!--end::Heading-->



                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="vacate_relation" class="form-select form-select-solid form-select-lg" data-control="select2" data-placeholder="Select relation" id="vacate_relation">
                                                                    <option></option>
                                                                    <option value="home_owner">The home owner</option>
                                                                    <option value="property_manager">The property manager</option>
                                                                    <option value="investor">A real estate investor</option>
                                                                    <option value="relative">A relative of the home owner</option>
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

                                                <!-- Step 2: Property Ownership -->
                                                <div class="form-step step-2" data-step="2" style="display:none;">
                                                    <div class="text-center mb-10 mt-5">
                                                        <label class="form-label fs-2hx text-gray-900 mb-5">Legal Ownership</label>
                                                        <div class="fs-5 text-muted fw-bold">Is the property registered in your name?</div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="vacate_ownership" class="form-select form-select-solid form-select-lg" data-control="select2" id="vacate_ownership">
                                                                    <option value="">Select ownership status</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <option value="in_process">In process</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2 fv-row"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row justify-content-between">
                                                        <div class="col-lg-6 d-flex justify-content-start">
                                                            <button type="button" class="btn btn-light prev-step">Back</button>
                                                        </div>
                                                        <div class="col-lg-6 d-flex justify-content-end">
                                                            <button type="button" class="btn btn-primary next-step">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Step 3: Occupancy Details -->
                                                <div class="form-step step-3" data-step="3" style="display:none;">
                                                    <div class="text-center mb-10 mt-5">
                                                        <label class="form-label fs-2hx text-gray-900 mb-5">Occupancy Duration</label>
                                                        <div class="fs-5 text-muted fw-bold">How long have unauthorized occupants been staying?</div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="vacate_duration" class="form-select form-select-solid form-select-lg" data-control="select2" id="vacate_duration">
                                                                    <option value="">Select time period</option>
                                                                    <option value="days">A few days</option>
                                                                    <option value="weeks">A few weeks</option>
                                                                    <option value="months">Several months</option>
                                                                    <option value="year_plus">More than a year</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2 fv-row"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row justify-content-between">
                                                        <div class="col-lg-6 d-flex justify-content-start">
                                                            <button type="button" class="btn btn-light prev-step">Back</button>
                                                        </div>
                                                        <div class="col-lg-6 d-flex justify-content-end">
                                                            <button type="button" class="btn btn-primary next-step">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Step 4: Law Enforcement Involvement -->
                                                <div class="form-step step-4" data-step="4" style="display:none;">
                                                    <div class="text-center mb-10 mt-5">
                                                        <label class="form-label fs-2hx text-gray-900 mb-5">Police Contact</label>
                                                        <div class="fs-5 text-muted fw-bold">Have you contacted the police about the squatters?</div>
                                                    </div>

                                                    <div class="mb-4">
                                                        <div class="row">
                                                            <div class="col-lg-2 fv-row"></div>
                                                            <div class="col-lg-8 fv-row">
                                                                <select name="vacate_police" class="form-select form-select-solid form-select-lg" data-control="select2" id="vacate_police">
                                                                    <option value="">Select answer</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                    <option value="multiple_times">Yes, multiple times</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-2 fv-row"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row justify-content-between">
                                                        <div class="col-lg-6 d-flex justify-content-start">
                                                            <button type="button" class="btn btn-light prev-step">Back</button>
                                                        </div>
                                                        <div class="col-lg-6 d-flex justify-content-end">
                                                            <button type="button" class="btn btn-primary next-step">Next</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Step 5: Additional Details -->
                                                <div class="form-step step-5" data-step="5" style="display:none;">
                                                    <div class="text-center mb-10 mt-5">
                                                        <label class="form-label fs-2hx text-gray-900 mb-5">Additional Information</label>
                                                        <div class="fs-5 text-muted fw-bold">You can optionally provide any relevant details about the situation.</div>
                                                    </div>

                                                    <div class="mb-4 px-10">
                                                        <textarea name="vacate_description" class="form-control form-control-solid" rows="5" placeholder="Describe the situation in your own words..."></textarea>
                                                    </div>

                                                    <div class="row justify-content-between">
                                                        <div class="col-lg-6 d-flex justify-content-start">
                                                            <button type="button" class="btn btn-light prev-step">Back</button>
                                                        </div>
                                                        <div class="col-lg-6 d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-success submit-document">Submit Document</button>
                                                        </div>
                                                    </div>
                                                </div>



                                                </div>
                                            </div>
                                            <!--end::Connected Accounts-->


                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->





