                        <?php
                        function filter_menu_for_user($items) {
                            $is_logged_in = is_user_logged_in();

                            foreach ($items as $key => $item) {
                                $classes = $item->classes;

                                // Скрыть, если только для авторизованных, а юзер — гость
                                if (in_array('logged-in-only', $classes) && !$is_logged_in) {
                                    unset($items[$key]);
                                }

                                // Можно добавить больше условий (admin-only, guest-only и т.д.)
                            }

                            return $items;
                        }

                        add_filter('wp_nav_menu_objects', 'filter_menu_for_user', 10, 1);
                        ?>

                        <!--begin::sidebar menu-->
                        <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                            <!--begin::Menu wrapper-->
                            <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
                                <!--begin::Scroll wrapper-->
                                <div id="kt_app_sidebar_menu_scroll"
                                    class="scroll-y my-5 mx-3"
                                    data-kt-scroll="true"
                                    data-kt-scroll-activate="true"
                                    data-kt-scroll-height="auto"
                                    data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                                    data-kt-scroll-wrappers="#kt_app_sidebar_menu"
                                    data-kt-scroll-offset="5px"
                                    data-kt-scroll-save-state="true">

                                    <!--begin::Menu-->
                                    <div class="menu menu-column menu-rounded menu-sub-indention px-3"
                                         id="kt_app_sidebar_menu"
                                         data-kt-menu="true"
                                         data-kt-menu-expand="false">
                                         
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location' => 'metronic_sidebar_menu',
                                            'container' => false,
                                            'items_wrap' => '%3$s',
                                            'walker' => new Metronic_Walker_Nav_Menu()
                                        ));
                                        ?>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Scroll wrapper-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::sidebar menu-->