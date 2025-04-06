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
                                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                                        
                                        <!--begin::My Documents button-->
                                        <a href="<?php echo esc_url( site_url('/documents/') ); ?>" class="btn btn-sm fw-bold btn-secondary">
                                            My Documents
                                        </a>
                                        <!--end::My Documents button-->

                                        <!--begin::New Document button-->
                                        <a href="<?php echo esc_url( site_url('/choose-document/') ); ?>" class="btn btn-sm fw-bold btn-primary">
                                            Create Document
                                        </a>
                                        <!--end::New Document button-->

                                    </div>
                                    <!--end::Actions-->

                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->