                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">
                                    <!--begin::Stats-->
                                    <div class="row gx-6 gx-xl-9">
                                        <div class="col-lg-6 col-xxl-4">
                                            <!--begin::Card-->
                                            <div class="card h-100">


                                                <!--begin::Card body-->
                                                <div class="card-body p-9">

                                                    <!--begin::Heading-->
                                                    <div class="fs-2hx fw-bold"><?php echo $total_projects; ?></div>
                                                    <div class="fs-4 fw-semibold text-gray-500 mb-7">Current 22Projects</div>
                                                    <!--end::Heading-->

                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-wrap">
                                                        <!--begin::Chart-->
                                                        <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                                                            <canvas id="kt_project_list_chart"></canvas>
                                                        </div>
                                                        <!--end::Chart-->




<!-- Labels -->




                                                        <!--begin::Labels-->
                                                        <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                                            <!--begin::Label-->
                                                            <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                                <div class="bullet bg-primary me-3"></div>
                                                                <div class="text-gray-500">In Process</div>
                                                                <div class="ms-auto fw-bold text-gray-700"><?php echo $status_counts['In Process'] ?? 0; ?></div>
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Label-->
                                                            <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                                                <div class="bullet bg-success me-3"></div>
                                                                <div class="text-gray-500">Completed</div>
                                                                <div class="ms-auto fw-bold text-gray-700"><?php echo $status_counts['Completed'] ?? 0; ?></div>
                                                            </div>
                                                            <!--end::Label-->
                                                            <!--begin::Label-->
                                                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                                                <div class="bullet bg-gray-300 me-3"></div>
                                                                <div class="text-gray-500">Pending</div>
                                                                <div class="ms-auto fw-bold text-gray-700"><?php echo $status_counts['Pending'] ?? 0; ?></div>
                                                            </div>

                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Labels-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                </div>
                                                <!--end::Card body-->









                                            </div>
                                            <!--end::Card-->
                                        </div>
                                        <div class="col-lg-6 col-xxl-4">
                                            <!--begin::Budget-->
                                            <div class="card h-100">
                                                <div class="card-body p-9">
                                                    <div class="fs-2hx fw-bold">$3,290.00</div>
                                                    <div class="fs-4 fw-semibold text-gray-500 mb-7">Project Finance</div>
                                                    <div class="fs-6 d-flex justify-content-between mb-4">
                                                        <div class="fw-semibold">Avg. Project Budget</div>
                                                        <div class="d-flex fw-bold">
                                                        <i class="ki-duotone ki-arrow-up-right fs-3 me-1 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>$6,570</div>
                                                    </div>
                                                    <div class="separator separator-dashed"></div>
                                                    <div class="fs-6 d-flex justify-content-between my-4">
                                                        <div class="fw-semibold">Lowest Project Check</div>
                                                        <div class="d-flex fw-bold">
                                                        <i class="ki-duotone ki-arrow-down-left fs-3 me-1 text-danger">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>$408</div>
                                                    </div>
                                                    <div class="separator separator-dashed"></div>
                                                    <div class="fs-6 d-flex justify-content-between mt-4">
                                                        <div class="fw-semibold">Ambassador Page</div>
                                                        <div class="d-flex fw-bold">
                                                        <i class="ki-duotone ki-arrow-up-right fs-3 me-1 text-success">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>$920</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Budget-->
                                        </div>
                                        <div class="col-lg-6 col-xxl-4">
                                            <!--begin::Clients-->
                                            <div class="card h-100">
                                                <div class="card-body p-9">
                                                    <!--begin::Heading-->
                                                    <div class="fs-2hx fw-bold">49</div>
                                                    <div class="fs-4 fw-semibold text-gray-500 mb-7">Our Experts</div>
                                                    <!--end::Heading-->
                                                    <!--begin::Users group-->
                                                    <div class="symbol-group symbol-hover mb-9">
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                            <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
                                                            <img alt="Pic" src="assets/media/avatars/300-7.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
                                                            <img alt="Pic" src="assets/media/avatars/300-20.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                            <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                            <span class="symbol-label bg-info text-inverse-info fw-bold">P</span>
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                        </div>
                                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                                        </a>
                                                    </div>
                                                    <!--end::Users group-->
                                                    <!--begin::Actions-->
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">All Experts</a>
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                            </div>
                                            <!--end::Clients-->
                                        </div>
                                    </div>
                                    <!--end::Stats-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex flex-wrap flex-stack my-5">
                                        <!--begin::Heading-->
                                        <h2 class="fs-2 fw-semibold my-2">Projects 
                                        <span class="fs-6 text-gray-500 ms-1">by Status</span></h2>
                                        <!--end::Heading-->
                                        <!--begin::Controls-->
                                        <div class="d-flex flex-wrap my-1">
                                            <!--begin::Select wrapper-->
                                            <div class="m-0">
                                                <!--begin::Select-->
                                                <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm form-select-solid fw-bold w-125px">
                                                    <option value="Active" selected="selected">Active</option>
                                                    <option value="Approved">In Progress</option>
                                                    <option value="Declined">To Do</option>
                                                    <option value="In Progress">Completed</option>
                                                </select>
                                                <!--end::Select-->
                                            </div>
                                            <!--end::Select wrapper-->
                                        </div>
                                        <!--end::Controls-->
                                    </div>
                                    <!--end::Toolbar-->






                                    <!--begin::Row-->
                                    <div class="row g-6 g-xl-9">

                                        <!--begin::Col-->
                                        <?php
                                        $total_projects = $GLOBALS['total_projects'] ?? 0;
                                        $args = [
                                            'post_type'      => 'project',
                                            'post_status'    => 'publish',
                                            'posts_per_page' => -1,
                                            'author'         => get_current_user_id(), // Только проекты текущего пользователя
                                        ];

                                        $query = new WP_Query($args);

                                        if ($query->have_posts()) :
                                            while ($query->have_posts()) : $query->the_post();
                                                $project_id      = get_the_ID();
                                                $title           = get_the_title();
                                                $description     = wp_trim_words(get_the_content(), 15);
                                                $status          = get_post_meta($project_id, 'project_status', true) ?: 'Pending';
                                                $date            = get_the_date('M d, Y');
                                                $budget          = get_post_meta($project_id, 'project_budget', true); // если не используется — можно скрыть
                                                $progress        = get_post_meta($project_id, 'project_progress', true); // проценты (от 0 до 100)
                                                $progress        = is_numeric($progress) ? intval($progress) : 0;
                                                ?>
                                                
                                                <!--begin::Col-->
                                                <div class="col-md-6 col-xl-4">
                                                    <!--begin::Card-->
                                                    <a href="<?php the_permalink(); ?>" class="card border-hover-primary">
                                                        <!--begin::Card header-->
                                                        <div class="card-header border-0 pt-9">
                                                            <!--begin::Card Title-->
                                                            <div class="card-title m-0">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-50px w-50px bg-light">
                                                                    <img src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/svg/brand-logos/plurk.svg" alt="image" class="p-3" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                            </div>
                                                            <!--end::Car Title-->
                                                            <!--begin::Card toolbar-->
                                                            <div class="card-toolbar">
                                                                <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">
                                                                    <?php echo esc_html($status); ?>
                                                                </span>
                                                            </div>
                                                            <!--end::Card toolbar-->
                                                        </div>
                                                        <!--end:: Card header-->

                                                        <!--begin:: Card body-->
                                                        <div class="card-body p-9">
                                                            <!--begin::Name-->
                                                            <div class="fs-3 fw-bold text-gray-900"><?php echo esc_html($title); ?></div>
                                                            <!--end::Name-->

                                                            <!--begin::Description-->
                                                            <p class="text-gray-500 fw-semibold fs-5 mt-1 mb-7"><?php echo esc_html($description); ?></p>
                                                            <!--end::Description-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-wrap mb-5">
                                                                <!--begin::Due-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                                                                    <div class="fs-6 text-gray-800 fw-bold"><?php echo esc_html($date); ?></div>
                                                                    <div class="fw-semibold text-gray-500">Created</div>
                                                                </div>
                                                                <!--end::Due-->
                                                                <?php if (!empty($budget)) : ?>
                                                                <!--begin::Budget-->
                                                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
                                                                    <div class="fs-6 text-gray-800 fw-bold"><?php echo esc_html($budget); ?></div>
                                                                    <div class="fw-semibold text-gray-500">Budget</div>
                                                                </div>
                                                                <!--end::Budget-->
                                                                <?php endif; ?>
                                                            </div>
                                                            <!--end::Info-->

                                                            <?php if ($progress > 0) : ?>
                                                            <!--begin::Progress-->
                                                            <div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="This project <?php echo $progress; ?>% completed">
                                                                <div class="bg-primary rounded h-4px" role="progressbar" style="width: <?php echo $progress; ?>%" aria-valuenow="<?php echo $progress; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <!--end::Progress-->
                                                            <?php endif; ?>

                                                            <!--begin::Users-->
                                                            <div class="symbol-group symbol-hover">
                                                                <!-- Здесь можно вставить участников проекта -->
                                                            </div>
                                                            <!--end::Users-->
                                                        </div>
                                                        <!--end:: Card body-->
                                                    </a>
                                                    <!--end::Card-->
                                                </div>
                                                <!--end::Col-->

                                                <?php
                                            endwhile;
                                            wp_reset_postdata();
                                        else :
                                            echo '<p>No projects found.</p>';
                                        endif;
                                        ?>

                                        <!--end::Col-->


                                    </div>
                                    <!--end::Row-->


                                    <!--begin::Pagination-->
                                    <div class="d-flex flex-stack flex-wrap pt-10">
                                        <div class="fs-6 fw-semibold text-gray-700">Showing 1 to 10 of 50 entries</div>
                                        <!--begin::Pages-->
                                        <ul class="pagination">
                                            <li class="page-item previous">
                                                <a href="#" class="page-link">
                                                    <i class="previous"></i>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">6</a>
                                            </li>
                                            <li class="page-item next">
                                                <a href="#" class="page-link">
                                                    <i class="next"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Pages-->
                                    </div>
                                    <!--end::Pagination-->
                                    <!--begin::Modals-->
                                    <!--begin::Modal - View Users-->
                                    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header pb-0 border-0 justify-content-end">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                        <i class="ki-duotone ki-cross fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--begin::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                    <!--begin::Heading-->
                                                    <div class="text-center mb-13">
                                                        <!--begin::Title-->
                                                        <h1 class="mb-3">Browse Users</h1>
                                                        <!--end::Title-->
                                                        <!--begin::Description-->
                                                        <div class="text-muted fw-semibold fs-5">If you need more info, please check out our 
                                                        <a href="#" class="link-primary fw-bold">Users Directory</a>.</div>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Users-->
                                                    <div class="mb-15">
                                                        <!--begin::List-->
                                                        <div class="mh-375px scroll-y me-n7 pe-7">
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$50,500</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$75,900</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$10,500</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$20,000</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Mikaela Collins 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$9,300</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Francis Mitcham 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$15,000</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Olivia Wild 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$23,000</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Neil Owen 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$45,800</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Dan Wilson 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$90,500</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Emma Bold 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$5,000</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Ana Crown 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$70,000</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="d-flex flex-stack py-5">
                                                                <!--begin::Details-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Details-->
                                                                    <div class="ms-6">
                                                                        <!--begin::Name-->
                                                                        <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">Robert Doe 
                                                                        <span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
                                                                        <!--end::Name-->
                                                                        <!--begin::Email-->
                                                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                                                        <!--end::Email-->
                                                                    </div>
                                                                    <!--end::Details-->
                                                                </div>
                                                                <!--end::Details-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Sales-->
                                                                    <div class="text-end">
                                                                        <div class="fs-5 fw-bold text-gray-900">$45,500</div>
                                                                        <div class="fs-7 text-muted">Sales</div>
                                                                    </div>
                                                                    <!--end::Sales-->
                                                                </div>
                                                                <!--end::Stats-->
                                                            </div>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::List-->
                                                    </div>
                                                    <!--end::Users-->
                                                    <!--begin::Notice-->
                                                    <div class="d-flex justify-content-between">
                                                        <!--begin::Label-->
                                                        <div class="fw-semibold">
                                                            <label class="fs-6">Adding Users by Team Members</label>
                                                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Switch-->
                                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" checked="checked" />
                                                            <span class="form-check-label fw-semibold text-muted">Allowed</span>
                                                        </label>
                                                        <!--end::Switch-->
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - View Users-->
                                    <!--begin::Modal - Users Search-->
                                    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header pb-0 border-0 justify-content-end">
                                                    <!--begin::Close-->
                                                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                        <i class="ki-duotone ki-cross fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--begin::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                    <!--begin::Content-->
                                                    <div class="text-center mb-13">
                                                        <h1 class="mb-3">Search Users</h1>
                                                        <div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Search-->
                                                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
                                                        <!--begin::Form-->
                                                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                                                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                                                            <input type="hidden" />
                                                            <!--end::Hidden input-->
                                                            <!--begin::Icon-->
                                                            <i class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                            <!--end::Icon-->
                                                            <!--begin::Input-->
                                                            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                                                            <!--end::Input-->
                                                            <!--begin::Spinner-->
                                                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                                                            </span>
                                                            <!--end::Spinner-->
                                                            <!--begin::Reset-->
                                                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                            <!--end::Reset-->
                                                        </form>
                                                        <!--end::Form-->
                                                        <!--begin::Wrapper-->
                                                        <div class="py-5">
                                                            <!--begin::Suggestions-->
                                                            <div data-kt-search-element="suggestions">
                                                                <!--begin::Heading-->
                                                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                                                <!--end::Heading-->
                                                                <!--begin::Users-->
                                                                <div class="mh-375px scroll-y me-n7 pe-7">
                                                                    <!--begin::User-->
                                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Info-->
                                                                        <div class="fw-semibold">
                                                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                                                            <span class="badge badge-light">Art Director</span>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </a>
                                                                    <!--end::User-->
                                                                    <!--begin::User-->
                                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Info-->
                                                                        <div class="fw-semibold">
                                                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                                                            <span class="badge badge-light">Marketing Analytic</span>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </a>
                                                                    <!--end::User-->
                                                                    <!--begin::User-->
                                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Info-->
                                                                        <div class="fw-semibold">
                                                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                                                            <span class="badge badge-light">Software Enginer</span>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </a>
                                                                    <!--end::User-->
                                                                    <!--begin::User-->
                                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Info-->
                                                                        <div class="fw-semibold">
                                                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                                                            <span class="badge badge-light">Web Developer</span>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </a>
                                                                    <!--end::User-->
                                                                    <!--begin::User-->
                                                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                                                        <!--begin::Avatar-->
                                                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                                        </div>
                                                                        <!--end::Avatar-->
                                                                        <!--begin::Info-->
                                                                        <div class="fw-semibold">
                                                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                                                            <span class="badge badge-light">UI/UX Designer</span>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </a>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Users-->
                                                            </div>
                                                            <!--end::Suggestions-->
                                                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                                                            <div data-kt-search-element="results" class="d-none">
                                                                <!--begin::Users-->
                                                                <div class="mh-375px scroll-y me-n7 pe-7">
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2" selected="selected">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1" selected="selected">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3" selected="selected">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2" selected="selected">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3" selected="selected">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2" selected="selected">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3" selected="selected">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2" selected="selected">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1" selected="selected">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3" selected="selected">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2" selected="selected">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1" selected="selected">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3" selected="selected">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3" selected="selected">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2" selected="selected">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1" selected="selected">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                    <!--begin::Separator-->
                                                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                                                    <!--end::Separator-->
                                                                    <!--begin::User-->
                                                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                                                        <!--begin::Details-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Checkbox-->
                                                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                                                            </label>
                                                                            <!--end::Checkbox-->
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                            <!--begin::Details-->
                                                                            <div class="ms-5">
                                                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                                                            </div>
                                                                            <!--end::Details-->
                                                                        </div>
                                                                        <!--end::Details-->
                                                                        <!--begin::Access menu-->
                                                                        <div class="ms-2 w-100px">
                                                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                                                <option value="1">Guest</option>
                                                                                <option value="2">Owner</option>
                                                                                <option value="3" selected="selected">Can Edit</option>
                                                                            </select>
                                                                        </div>
                                                                        <!--end::Access menu-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                </div>
                                                                <!--end::Users-->
                                                                <!--begin::Actions-->
                                                                <div class="d-flex flex-center mt-15">
                                                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
                                                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                                                                </div>
                                                                <!--end::Actions-->
                                                            </div>
                                                            <!--end::Results-->
                                                            <!--begin::Empty-->
                                                            <div data-kt-search-element="empty" class="text-center d-none">
                                                                <!--begin::Message-->
                                                                <div class="fw-semibold py-10">
                                                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>
                                                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                                                </div>
                                                                <!--end::Message-->
                                                                <!--begin::Illustration-->
                                                                <div class="text-center px-5">
                                                                    <img src="assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
                                                                </div>
                                                                <!--end::Illustration-->
                                                            </div>
                                                            <!--end::Empty-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Search-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - Users Search-->
                                    <!--end::Modals-->
                                </div>
                                <!--end::Content container-->
                            </div>
                            <!--end::Content-->