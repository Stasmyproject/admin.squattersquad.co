                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                    <!--begin::Navbar-->
                                    <!--begin::Navbar-->
                                    <div class="card mb-6 mb-xl-9">
                                        <div class="card-body pt-9 pb-0">
                                            <!--begin::Details-->
                                            <div class="d-flex flex-wrap flex-sm-nowrap mb-6">
                                                <!--begin::Image-->
                                                <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
                                                <img class="symbol mw-50px mw-lg-150px" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/zagluska.jpg" alt="image" />  

                                                </div>
                                                <!--end::Image-->
                                                <!--begin::Wrapper-->
                                                <div class="flex-grow-1">
                                                    <!--begin::Head-->
                                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                        <!--begin::Details-->
                                                        <div class="d-flex flex-column">
                                                            <!--begin::Status-->
                                                            <div class="d-flex align-items-center mb-1">
                                                                <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3"><?php the_title(); ?></a>
                                                                <span class="badge badge-light-success me-auto">In Progress</span>
                                                            </div>
                                                            <!--end::Status-->
                                                            <!--begin::Description-->
                                                            <div class="d-flex flex-wrap fw-semibold mb-4 fs-5 text-gray-500">
                                                                
                                                            <?php the_content(); ?>
                                                            </div>
                                                            <!--end::Description-->
                                                        </div>
                                                        <!--end::Details-->
                                                        <!--begin::Actions-->
                                                        <div class="d-flex mb-4">
                                                            <a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
                                                            <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                                                            <!--begin::Menu-->
                                                            <div class="me-0">
                                                                <button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                    <i class="ki-solid ki-dots-horizontal fs-2x"></i>
                                                                </button>
                                                                <!--begin::Menu 3-->
                                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                                    <!--begin::Heading-->
                                                                    <div class="menu-item px-3">
                                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                                                                    </div>
                                                                    <!--end::Heading-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link flex-stack px-3">Create Payment 
                                                                        <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                            <i class="ki-duotone ki-information fs-6">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                                <span class="path3"></span>
                                                                            </i>
                                                                        </span></a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3">
                                                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                                        <a href="#" class="menu-link px-3">
                                                                            <span class="menu-title">Subscription</span>
                                                                            <span class="menu-arrow"></span>
                                                                        </a>
                                                                        <!--begin::Menu sub-->
                                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Plans</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Billing</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <a href="#" class="menu-link px-3">Statements</a>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                            <!--begin::Menu separator-->
                                                                            <div class="separator my-2"></div>
                                                                            <!--end::Menu separator-->
                                                                            <!--begin::Menu item-->
                                                                            <div class="menu-item px-3">
                                                                                <div class="menu-content px-3">
                                                                                    <!--begin::Switch-->
                                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <!--begin::Input-->
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <!--end::Input-->
                                                                                        <!--end::Label-->
                                                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                                                        <!--end::Label-->
                                                                                    </label>
                                                                                    <!--end::Switch-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Menu item-->
                                                                        </div>
                                                                        <!--end::Menu sub-->
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                    <!--begin::Menu item-->
                                                                    <div class="menu-item px-3 my-1">
                                                                        <a href="#" class="menu-link px-3">Settings</a>
                                                                    </div>
                                                                    <!--end::Menu item-->
                                                                </div>
                                                                <!--end::Menu 3-->
                                                            </div>
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::Actions-->
                                                    </div>
                                                    <!--end::Head-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-wrap justify-content-start">
                                                        <!--begin::Stats-->
                                                        <div class="d-flex flex-wrap">

                                                            <!--begin::Stat-->
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <!--begin::Number-->
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-4 fw-bold">
                                                                        <?php echo get_the_date('d M, Y'); ?>
                                                                    </div>
                                                                </div>
                                                                <!--end::Number-->
                                                                <!--begin::Label-->
                                                                <div class="fw-semibold fs-6 text-gray-500">Created</div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Stat-->

                                                            <!--begin::Stat-->
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <!--begin::Number-->
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$">0</div>
                                                                </div>
                                                                <!--end::Number-->
                                                                <!--begin::Label-->
                                                                <div class="fw-semibold fs-6 text-gray-500">Budget Spent</div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Stat-->

                                                            <!--begin::Stat-->
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <!--begin::Number-->
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-4 fw-bold" data-kt-countup="true" data-kt-countup-value="5">0</div>
                                                                </div>
                                                                <!--end::Number-->
                                                                <!--begin::Label-->
                                                                <div class="fw-semibold fs-6 text-gray-500">Experts</div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Stat-->


                                                        </div>
                                                        <!--end::Stats-->
                                                        <!--begin::Users-->
                                                        <div class="symbol-group symbol-hover mb-3">
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Lando">
                                                                <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/avatars/300-11.jpg" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Jessica Lawless">
                                                                <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/avatars/300-8.jpg" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Kimrey">
                                                                <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/avatars/300-20.jpg" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Danodaniels">
                                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                <img alt="Pic" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/avatars/300-2.jpg" />
                                                            </div>
                                                            <!--end::User-->
                                                            

                                                        </div>
                                                        <!--end::Users-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Details-->
                                            <div class="separator"></div>


                                            <!--begin::Nav-->
                                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary py-5 me-6 active" href="project_example.php">Overview</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary py-5 me-6" href="project_example_budget.php">Budget</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary py-5 me-6" href="project_example_experts.php">Experts involved</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary py-5 me-6" href="project_example_documents.php">Documents</a>
                                                </li>
                                                <!--end::Nav item-->
                                                <!--begin::Nav item-->
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary py-5 me-6" href="project_example_settings.php">Settings</a>
                                                </li>
                                                <!--end::Nav item-->
                                            </ul>
                                            <!--end::Nav-->
                                        </div>
                                    </div>
                                    <!--end::Navbar-->

                                    <!--begin::Row-->
                                    <div class="row gx-6 gx-xl-9">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Card-->
                                            <div class="card card-flush h-lg-100">
                                                <!--begin::Card header-->
                                                <div class="card-header mt-6">
                                                    <!--begin::Card title-->
                                                    <div class="card-title flex-column">
                                                        <h3 class="fw-bold mb-1">What's on the road?</h3>
                                                        <div class="fs-6 text-gray-500">Total 5 participants</div>
                                                    </div>
                                                    <!--end::Card title-->
                                                    <!--begin::Card toolbar-->
                                                    <div class="card-toolbar">
                                                        <!--begin::Select-->
                                                        <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                                                            <option value="1" selected="selected">Options</option>
                                                            <option value="2">Option 1</option>
                                                            <option value="3">Option 2</option>
                                                            <option value="4">Option 3</option>
                                                        </select>
                                                        <!--end::Select-->
                                                    </div>
                                                    <!--end::Card toolbar-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-9 pt-4">
                                                    <!--begin::Dates-->
                                                    <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                                <span class="fs-6 fw-bold">22</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                                <span class="fs-6 fw-bold">23</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                                <span class="fs-6 fw-bold">24</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                                                <span class="opacity-50 fs-7 fw-semibold">We</span>
                                                                <span class="fs-6 fw-bold">25</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                                                <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                                                <span class="fs-6 fw-bold">26</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                                                <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                                                <span class="fs-6 fw-bold">27</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                                                <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                                                <span class="fs-6 fw-bold">28</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                                                <span class="fs-6 fw-bold">29</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                                                <span class="fs-6 fw-bold">30</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                        <!--begin::Date-->
                                                        <li class="nav-item me-1">
                                                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                                                <span class="fs-6 fw-bold">31</span>
                                                            </a>
                                                        </li>
                                                        <!--end::Date-->
                                                    </ul>
                                                    <!--end::Dates-->
                                                    <!--begin::Tab Content-->
                                                    <div class="tab-content">
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_0" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">13:00 - 14:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Legal Review</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Lando</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">12:00 - 13:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Surveillance & Assessment</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Danodaniels</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">9:00 - 10:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Notification & Legal Warning</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Jessica Lawless</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_1" class="tab-pane fade show active">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">11:00 - 11:45 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Enforcement & Removal</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Terry Robins</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">12:00 - 13:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Property Security & Restoration</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Naomi Hayabusa</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">13:00 - 14:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Restore lawful ownership and secure the property for future use</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Kendell Trevor</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_2" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">14:30 - 15:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">David Stevenson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">12:00 - 13:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Bob Harris</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">10:00 - 11:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Bob Harris</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_3" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">10:00 - 11:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Peter Marcus</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">13:00 - 14:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Peter Marcus</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">12:00 - 13:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Yannis Gloverson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_4" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">16:30 - 17:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Mark Randall</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">14:30 - 15:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Yannis Gloverson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">16:30 - 17:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Bob Harris</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_5" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">16:30 - 17:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">David Stevenson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">12:00 - 13:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Bob Harris</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">12:00 - 13:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Yannis Gloverson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_6" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">11:00 - 11:45 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Terry Robins</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">9:00 - 10:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Walter White</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">14:30 - 15:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Walter White</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_7" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">11:00 - 11:45 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Terry Robins</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">16:30 - 17:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Yannis Gloverson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">14:30 - 15:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Caleb Donaldson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_8" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">9:00 - 10:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Yannis Gloverson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">9:00 - 10:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Caleb Donaldson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">14:30 - 15:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Peter Marcus</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                        <!--begin::Day-->
                                                        <div id="kt_schedule_day_9" class="tab-pane fade show">
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">14:30 - 15:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Sean Bean</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">14:30 - 15:30 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Yannis Gloverson</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                            <!--begin::Time-->
                                                            <div class="d-flex flex-stack position-relative mt-8">
                                                                <!--begin::Bar-->
                                                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                                                <!--end::Bar-->
                                                                <!--begin::Info-->
                                                                <div class="fw-semibold ms-5 text-gray-600">
                                                                    <!--begin::Time-->
                                                                    <div class="fs-5">13:00 - 14:00 
                                                                    <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                                                    <!--end::Time-->
                                                                    <!--begin::Title-->
                                                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                                                    <!--end::Title-->
                                                                    <!--begin::User-->
                                                                    <div class="text-gray-500">Lead by 
                                                                    <a href="#">Terry Robins</a></div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Info-->
                                                                <!--begin::Action-->
                                                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                                                <!--end::Action-->
                                                            </div>
                                                            <!--end::Time-->
                                                        </div>
                                                        <!--end::Day-->
                                                    </div>
                                                    <!--end::Tab Content-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <!--begin::Card-->
                                            <div class="card card-flush h-lg-100">
                                                <!--begin::Card header-->
                                                <div class="card-header mt-6">
                                                    <!--begin::Card title-->
                                                    <div class="card-title flex-column">
                                                        <h3 class="fw-bold mb-1">Latest Files</h3>
                                                        <div class="fs-6 text-gray-500">Total 5 fiels, 2MB space usage</div>
                                                    </div>
                                                    <!--end::Card title-->
                                                    <!--begin::Card toolbar-->
                                                    <div class="card-toolbar">
                                                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                                                    </div>
                                                    <!--end::Card toolbar-->
                                                </div>
                                                <!--end::Card header-->
                                                <!--begin::Card body-->
                                                <div class="card-body p-9 pt-3">
                                                    <!--begin::Files-->
                                                    <div class="d-flex flex-column mb-9">
                                                        <!--begin::File-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Icon-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <img alt="Icon" src="assets/media/svg/files/pdf.svg" />
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Details-->
                                                            <div class="fw-semibold">
                                                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Notice to Vacate</a>
                                                                <div class="text-gray-500">2 days ago 
                                                                <a href="#">Karina Clark</a></div>
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Menu-->
                                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-duotone ki-element-plus fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 1-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6543cc73e338f">
                                                                <!--begin::Header-->
                                                                <div class="px-7 py-5">
                                                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator border-gray-200"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Form-->
                                                                <div class="px-7 py-5">
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Status:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <div>
                                                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6543cc73e338f" data-allow-clear="true">
                                                                                <option></option>
                                                                                <option value="1">Approved</option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="2">In Process</option>
                                                                                <option value="2">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Options-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                                <span class="form-check-label">Author</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                                <span class="form-check-label">Customer</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                        </div>
                                                                        <!--end::Options-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Switch-->
                                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                            <label class="form-check-label">Enabled</label>
                                                                        </div>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Menu 1-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Icon-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <img alt="Icon" src="assets/media/svg/files/doc.svg" />
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Details-->
                                                            <div class="fw-semibold">
                                                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Unlawful Detainer Lawsuit</a>
                                                                <div class="text-gray-500">Due in 1 day 
                                                                <a href="#">Marcus Blake</a></div>
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Menu-->
                                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-duotone ki-element-plus fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 1-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6543cc73e3397">
                                                                <!--begin::Header-->
                                                                <div class="px-7 py-5">
                                                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator border-gray-200"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Form-->
                                                                <div class="px-7 py-5">
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Status:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <div>
                                                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6543cc73e3397" data-allow-clear="true">
                                                                                <option></option>
                                                                                <option value="1">Approved</option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="2">In Process</option>
                                                                                <option value="2">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Options-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                                <span class="form-check-label">Author</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                                <span class="form-check-label">Customer</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                        </div>
                                                                        <!--end::Options-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Switch-->
                                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                            <label class="form-check-label">Enabled</label>
                                                                        </div>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Menu 1-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex align-items-center mb-5">
                                                            <!--begin::Icon-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <img alt="Icon" src="assets/media/svg/files/css.svg" />
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Details-->
                                                            <div class="fw-semibold">
                                                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Summons and Complaint</a>
                                                                <div class="text-gray-500">Due in 1 day 
                                                                <a href="#">Jessica Lawless</a></div>
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Menu-->
                                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-duotone ki-element-plus fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 1-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6543cc73e339d">
                                                                <!--begin::Header-->
                                                                <div class="px-7 py-5">
                                                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator border-gray-200"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Form-->
                                                                <div class="px-7 py-5">
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Status:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <div>
                                                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6543cc73e339d" data-allow-clear="true">
                                                                                <option></option>
                                                                                <option value="1">Approved</option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="2">In Process</option>
                                                                                <option value="2">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Options-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                                <span class="form-check-label">Author</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                                <span class="form-check-label">Customer</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                        </div>
                                                                        <!--end::Options-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Switch-->
                                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                            <label class="form-check-label">Enabled</label>
                                                                        </div>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Menu 1-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                        <!--begin::File-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Icon-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <img alt="Icon" src="assets/media/svg/files/ai.svg" />
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Details-->
                                                            <div class="fw-semibold">
                                                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Writ of Possession</a>
                                                                <div class="text-gray-500">Due in 3 days 
                                                                <a href="#">Lando</a></div>
                                                            </div>
                                                            <!--end::Details-->
                                                            <!--begin::Menu-->
                                                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-duotone ki-element-plus fs-3">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                    <span class="path5"></span>
                                                                </i>
                                                            </button>
                                                            <!--begin::Menu 1-->
                                                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6543cc73e33a4">
                                                                <!--begin::Header-->
                                                                <div class="px-7 py-5">
                                                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                                                </div>
                                                                <!--end::Header-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator border-gray-200"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Form-->
                                                                <div class="px-7 py-5">
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Status:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Input-->
                                                                        <div>
                                                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6543cc73e33a4" data-allow-clear="true">
                                                                                <option></option>
                                                                                <option value="1">Approved</option>
                                                                                <option value="2">Pending</option>
                                                                                <option value="2">In Process</option>
                                                                                <option value="2">Rejected</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Member Type:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Options-->
                                                                        <div class="d-flex">
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                                                <span class="form-check-label">Author</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                            <!--begin::Options-->
                                                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                                                <span class="form-check-label">Customer</span>
                                                                            </label>
                                                                            <!--end::Options-->
                                                                        </div>
                                                                        <!--end::Options-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Input group-->
                                                                    <div class="mb-10">
                                                                        <!--begin::Label-->
                                                                        <label class="form-label fw-semibold">Notifications:</label>
                                                                        <!--end::Label-->
                                                                        <!--begin::Switch-->
                                                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                                                            <label class="form-check-label">Enabled</label>
                                                                        </div>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                    <!--end::Input group-->
                                                                    <!--begin::Actions-->
                                                                    <div class="d-flex justify-content-end">
                                                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                                                    </div>
                                                                    <!--end::Actions-->
                                                                </div>
                                                                <!--end::Form-->
                                                            </div>
                                                            <!--end::Menu 1-->
                                                            <!--end::Menu-->
                                                        </div>
                                                        <!--end::File-->
                                                    </div>
                                                    <!--end::Files-->
                                                    <!--begin::Notice-->
                                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                                        <!--begin::Icon-->
                                                        <i class="ki-duotone ki-svg/files/upload.svg fs-2tx text-primary me-4"></i>
                                                        <!--end::Icon-->
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex flex-stack flex-grow-1">
                                                            <!--begin::Content-->
                                                            <div class="fw-semibold">
                                                                <h4 class="text-gray-900 fw-bold">Quick file uploader</h4>
                                                                <div class="fs-6 text-gray-700">Drag & Drop or choose files from computer</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Card body -->
                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->


                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->
