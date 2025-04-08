<?php
/* Template Name: Register */
get_header();
global $registration_errors;
?>

<?php
/* Template Name: Metronic Login */
$bg_light = get_template_directory_uri() . '/metronic/assets/media/auth/bg4.jpg';
$bg_dark  = get_template_directory_uri() . '/metronic/assets/media/auth/bg4-dark.jpg';
?>

<!DOCTYPE html>
<!--
Theme: Metronic by Keenthemes
License: Commercial use under Envato license — https://1.envato.market/EA4JP
-->

    <!--begin::Body-->
    <body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Page bg image-->
              <style>
                body {
                  background-image: url('<?php echo esc_url($bg_light); ?>');
                }
                [data-bs-theme="dark"] body {
                  background-image: url('<?php echo esc_url($bg_dark); ?>');
                }
              </style>
            <!--end::Page bg image-->
            <!--begin::Authentication - Sign-up -->
            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                <!--begin::Aside-->
                <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                    <!--begin::Aside-->
                    <div class="d-flex flex-center flex-lg-start flex-column">
                        <!--begin::Logo-->
                        <a href="index.html" class="mb-7">
                            <img alt="Logo" style="width: 300px; height: auto;" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/logos/custom-3.svg" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h2 class="text-white fw-normal m-0">Let's get rid of Squtters together, quickly and professionally.</h2>
                        <!--end::Title-->
                    </div>
                    <!--begin::Aside-->
                </div>
                <!--begin::Aside-->
                <!--begin::Body-->
                <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
                    <!--begin::Card-->
                    <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                            <!--begin::Form-->
                            <form method="POST" class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="authentication/layouts/creative/sign-in.html" action="<?php echo esc_url( $_SERVER['REQUEST_URI'] ); ?>">
                                    <!-- 💡 Скрытое поле для запуска регистрации -->
                                    <input type="hidden" name="metronic_register_user" value="1">
                                    <?php wp_nonce_field('metronic_user_registration', 'metronic_register_nonce'); ?>
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-gray-900 fw-bolder mb-3">Sign Up</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                                    <!--end::Subtitle=-->
                                </div>
                                <!--begin::Heading-->
                                <!--begin::Login options-->
                                <div class="row g-3 mb-9">
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Google link=-->
                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
                                        <!--end::Google link=-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-md-6">
                                        <!--begin::Google link=-->
                                        <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
                                        <img alt="Logo" src="<?php echo get_template_directory_uri(); ?>/metronic/assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
                                        <!--end::Google link=-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Login options-->
                                <!--begin::Separator-->
                                <div class="separator separator-content my-14">
                                    <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                                </div>
                                <!--end::Separator-->

                               <!--begin::вывод ошибки-->
                                <?php if (!empty($registration_errors)) : ?>
                                    <div class="mb-10 alert alert-danger d-flex align-items-center p-5">
                                        <i class="ki-duotone ki-information fs-2tx me-4"><span class="path1"></span><span class="path2"></span></i>
                                        <div class="d-flex flex-column">
                                            <?php foreach ($registration_errors as $error) : ?>
                                                <span class="fw-bold fs-6"><?php echo esc_html($error); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <!--end::вывод ошибки-->

                                <!--begin::Input group Email-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Email-->
                                </div>

                                
                                <!--End::Input group Email-->

                                <!--begin::Input group-->
                                <div class="fv-row mb-8" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off" />
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                <i class="ki-duotone ki-eye-slash fs-2"></i>
                                                <i class="ki-duotone ki-eye fs-2 d-none"></i>
                                            </span>
                                        </div>
                                        <!--end::Input wrapper-->
                                        <!--begin::Meter-->
                                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                        <!--end::Meter-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Hint-->
                                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group=-->

                                <!--end::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Repeat Password-->
                                    <input placeholder="Repeat Password" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Repeat Password-->
                                </div>
                                <!--end::Input group=-->

                                <!--begin::Input group First Name-->
                                <div class="fv-row mb-8">
                                    <!--begin::First Name-->
                                    <input type="text" placeholder="First Name" name="first_name" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::First Name-->
                                </div>
                                <!--End::Input group First Name-->

                                <!--begin::Input group last name-->
                                <div class="fv-row mb-8">
                                    <!--begin::last name-->
                                    <input type="text" placeholder="last name" name="last_name" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::last name-->
                                </div>
                                <!--End::Input group last name-->





                                <!--begin::Accept-->
                                <div class="fv-row mb-8">
                                    <label class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                        <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the 
                                        <a href="#" class="ms-1 link-primary">Terms</a></span>
                                    </label>
                                </div>
                                <!--end::Accept-->
                                <!--begin::Submit button-->
                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Sign up</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->
                                <!--begin::Sign up-->
                                <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account? 
                                <a href="<?php echo site_url('/login/'); ?>" class="link-primary">Sign in</a>
                                </div>
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-up-->
        </div>
        <!--end::Root-->
    </body>
    <!--end::Body-->
</html>

<?php get_footer(); ?>