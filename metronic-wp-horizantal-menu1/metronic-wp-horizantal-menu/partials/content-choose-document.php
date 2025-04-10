                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid" >
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <!--begin::Connected Accounts-->

                                    <div class="card mb-5 mb-xl-10 form-wizard" data-document-type="<?php echo esc_attr($document_type); ?>">
                                        <div class="card-body">

                                            <!-- Step 1: Who owns the property -->
                                            <div class="form-step step-1" data-step="1">


                                                <!--begin::Heading-->
                                                <div class="text-center mb-10 mt-5">
                                                    <label class="form-label fs-2hx text-gray-900 mb-5">Select document type</label>
                                                    <div class="fs-5 text-muted fw-bold">Please select the type of document you require</div>
                                                </div>
                                                <!--end::Heading-->


                                                <form method="get" action="<?php echo esc_url( site_url('/create/') ); ?>">
                                                <div class="mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-2 fv-row"></div>
                                                        <div class="col-lg-8 fv-row">
                                                            <select name="type" class="form-select form-select-solid form-select-lg" data-control="select2" data-placeholder="Select relation" id="vacate_relation">
                                                                <option value="">Choose...</option>
                                                                <option value="notice-to-vacate">Notice to Vacate</option>
                                                                <option value="cease-and-desist">Cease and Desist</option>
                                                                <option value="affidavit-ownership">Affidavit of Ownership</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 fv-row"></div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 fv-row d-flex justify-content-center">
                                                        <button type="submit" class="btn btn-primary">Continue</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
