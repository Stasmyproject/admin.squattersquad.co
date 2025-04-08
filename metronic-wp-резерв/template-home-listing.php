<?php
/**
 * Template Name: Home Listing Page
 */

get_header();
?>

        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Header Section-->
            <div class="mb-0" id="home">
                <!--begin::Wrapper-->
                <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/svg/illustrations/landing.svg)">
                    <!--begin::Header-->
                    <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center justify-content-between">
                                <!--begin::Logo-->
                                <div class="d-flex align-items-center flex-equal">
                                    <!--begin::Mobile menu toggle-->
                                    <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none" id="kt_landing_menu_toggle">
                                        <i class="ki-duotone ki-abstract-14 fs-2hx">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </button>
                                    <!--end::Mobile menu toggle-->
                                    <!--begin::Logo image-->
                                    <a href="landing.html">
                                        <img alt="Logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/metronic/assets/media/logos/custom-3.svg" class="logo-default h-25px h-lg-30px" />
                                        <img alt="Logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/metronic/assets/media/logos/landing-dark.svg" class="logo-sticky h-20px h-lg-25px" />
                                    </a>
                                    <!--end::Logo image-->
                                </div>
                                <!--end::Logo-->

                                <!--begin::Menu wrapper-->
                                <!--begin::Menu wrapper-->
                                <div class="d-lg-block" id="kt_header_nav_wrapper">
                                    <div class="d-lg-block p-5 p-lg-0"
                                        data-kt-drawer="true"
                                        data-kt-drawer-name="landing-menu"
                                        data-kt-drawer-activate="{default: true, lg: false}"
                                        data-kt-drawer-overlay="true"
                                        data-kt-drawer-width="200px"
                                        data-kt-drawer-direction="start"
                                        data-kt-drawer-toggle="#kt_landing_menu_toggle"
                                        data-kt-swapper="true"
                                        data-kt-swapper-mode="prepend"
                                        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">

                                        <!--begin::Menu-->
                                        <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-600 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                             id="kt_landing_menu">
                                            <?php
                                            // Получаем меню по его location
                                            $locations = get_nav_menu_locations();
                                            if ( isset($locations['landing-menu']) ) {
                                                $menu_id = $locations['landing-menu'];
                                                $menu_items = wp_get_nav_menu_items($menu_id);

                                                foreach ($menu_items as $item) :
                                                    ?>
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item">
                                                        <a class="menu-link nav-link py-3 px-4 px-xxl-6"
                                                           href="<?php echo esc_url($item->url); ?>"
                                                           data-kt-scroll-toggle="true"
                                                           data-kt-drawer-dismiss="true">
                                                            <?php echo esc_html($item->title); ?>
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <?php
                                                endforeach;
                                            }
                                            ?>
                                        </div>
                                        <!--end::Menu-->

                                    </div>
                                </div>
                                <!--end::Menu wrapper-->

                                <!--end::Menu wrapper-->

                                <!--begin::Toolbar-->
                                <div class="flex-equal text-end ms-1">
                                    <a href="<?php echo esc_url( site_url('/login/') ); ?>" class="btn btn-success">
                                        Sign In
                                    </a>
                                </div>



                                <!--end::Toolbar-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->


            <!-- Здесь вставляем верстку твоего листинга -->
            <!--begin::Content-->
            <?php get_template_part('partials/content-home-listing'); ?>
            <!--end::Content-->

            <!--begin::Footer Section-->
            <div class="mb-0">
                <!--begin::Curve top-->
                <div class="landing-curve landing-dark-color">
                    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="currentColor"></path>
                    </svg>
                </div>
                <!--end::Curve top-->
                <!--begin::Wrapper-->
                <div class="landing-dark-bg pt-20">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Row-->
                        <div class="row py-10 py-lg-20">
                            <!--begin::Col-->
                            <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                                <!--begin::Block-->
                                <div class="rounded landing-dark-border p-9 mb-10">
                                    <!--begin::Title-->
                                    <h2 class="text-white">Would you need a Custom License?</h2>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="fw-normal fs-4 text-gray-700">Email us to 
                                    <a href="https://keenthemes.com/support" class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Block-->
                                <!--begin::Block-->
                                <div class="rounded landing-dark-border p-9">
                                    <!--begin::Title-->
                                    <h2 class="text-white">How About a Custom Project?</h2>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service. 
                                    <a href="pages/user-profile/overview.html" class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
                                    <!--end::Text-->
                                </div>
                                <!--end::Block-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6 ps-lg-16">
                                <!--begin::Navs-->
                                <div class="d-flex justify-content-center">
                                    <!--begin::Links-->
                                    <div class="d-flex fw-semibold flex-column me-20">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-500 mb-6">More for Metronic</h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
                                        <a href="https://keenthemes.com/faqs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://preview.keenthemes.com/html/metronic/docs" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://www.youtube.com/c/KeenThemesTuts/videos" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://devs.keenthemes.com/" class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://keenthemes.com/blog" class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                    <!--begin::Links-->
                                    <div class="d-flex fw-semibold flex-column ms-lg-20">
                                        <!--begin::Subtitle-->
                                        <h4 class="fw-bold text-gray-500 mb-6">Stay Connected</h4>
                                        <!--end::Subtitle-->
                                        <!--begin::Link-->
                                        <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                            <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2" alt="" />
                                            <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://github.com/KeenthemesHub" class="mb-6">
                                            <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
                                            <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://twitter.com/keenthemes" class="mb-6">
                                            <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2" alt="" />
                                            <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://dribbble.com/keenthemes" class="mb-6">
                                            <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2" alt="" />
                                            <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                        </a>
                                        <!--end::Link-->
                                        <!--begin::Link-->
                                        <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                            <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2" alt="" />
                                            <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                        </a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Links-->
                                </div>
                                <!--end::Navs-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Container-->
                    <!--begin::Separator-->
                    <div class="landing-dark-separator"></div>
                    <!--end::Separator-->
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                            <!--begin::Copyright-->
                            <div class="d-flex align-items-center order-2 order-md-1">
                                <!--begin::Logo-->
                                <a href="landing.html">
                                    <img alt="Logo" src="assets/media/logos/landing.svg" class="h-15px h-md-20px" />
                                </a>
                                <!--end::Logo image-->
                                <!--begin::Logo image-->
                                <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com">&copy; 2023 Keenthemes Inc.</span>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                                <li class="menu-item">
                                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                                </li>
                                <li class="menu-item mx-5">
                                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                                </li>
                                <li class="menu-item">
                                    <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Wrapper-->

            </div>
            <!--end::Footer Section-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <i class="ki-duotone ki-arrow-up">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <!--end::Scrolltop-->
        </div>
        <!--end::Root-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Scrolltop-->

<?php get_footer(); ?>
