<?php
/**
 * Template Name: App Layout Horizontal
 */ 

// Определим авторизацию
$is_logged_in = is_user_logged_in();

// Только теперь — загружаем header
get_header();
?>


		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->

		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">


            <?php //if ( is_user_logged_in() ) : ?>
                <!--begin::Header-->
                <?php get_template_part('partials/header-dashdoards-horizontal'); ?>
                <!--end::Header-->
            <?php //endif; ?>


				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">


						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
                                <!--begin::Toolbar-->
                                <?php
                                $is_product_page     = is_singular('product');
                                $is_signs_page       = is_page('signs-and-notices');
                                $is_create_doc_page  = is_page('create-document');
                                $is_choose_doc_page  = is_page('choose-document'); // ✅

                                $is_document_page    = is_singular('document') 
                                    || is_post_type_archive('document') 
                                    || is_page('my-documents') 
                                    || is_page('documents') 
                                    || $is_create_doc_page 
                                    || $is_choose_doc_page; // ✅

                                $is_wc_page = function_exists('is_woocommerce') && (
                                    is_cart() ||
                                    is_checkout() ||
                                    is_account_page() ||
                                    is_shop()
                                );

                                if ( $is_logged_in ) {
                                    if ( $is_product_page || $is_signs_page || $is_wc_page ) {
                                        get_template_part('partials/toolbar-woocommerce');
                                    } elseif ( $is_document_page ) {
                                        get_template_part('partials/toolbar-documents');
                                    } else {
                                        get_template_part('partials/toolbar');
                                    }
                                }
                                ?>
                                <!--end::Toolbar-->
							<!--end::Toolbar-->

                            <!--begin::Content-->
                              <!-- 🔥 Контентная часть -->
                                <?php
                                // Получаем текущий слаг страницы
                                global $post;
                                $slug = isset($post->post_name) ? $post->post_name : '';

                                // 💡 Блок подсчёта проектов по статусу (для страницы my-projects)
                                if ($slug === 'my-projects') {
                                    $user_id = get_current_user_id();
                                    $statuses = ['Pending', 'In Process', 'On Hold', 'Completed'];
                                    $status_counts = [];

                                    foreach ($statuses as $status) {
                                        $query = new WP_Query([
                                            'post_type'   => 'project',
                                            'post_status' => 'publish',
                                            'meta_key'    => 'project_status',
                                            'meta_value'  => $status,
                                            'author'      => $user_id,
                                            'fields'      => 'ids',
                                        ]);
                                        $status_counts[$status] = $query->found_posts;
                                    }

                                    $total_projects = array_sum($status_counts);
                                }

                                // 🛍 Страница отдельного товара WooCommerce
                                if (is_singular('product')) {
                                    get_template_part('partials/content-single-product');
                                    return;
                                }

                                // 📁 Страница отдельного проекта
                                if (is_singular('project')) {
                                    get_template_part('partials/content-single-project');
                                    return;
                                }

                                // 📄 Все остальные страницы — ищем content-файл по слагу
                                $post_slug = get_post_field('post_name', get_the_ID());
                                $template_path = get_template_directory() . '/partials/content-' . $post_slug . '.php';


                                // Обработка по-умолчанию для страниц
                                if ( is_shop() ) {
                                    // Специальный вывод архива товаров (страница магазина)
                                    ?>

                                    <!--begin::Content-->
                                    <div id="kt_app_content" class="app-content flex-column-fluid">
                                        <!--begin::Content container-->
                                        <div id="kt_app_content_container" class="app-container container-xxl">

                                            <!--begin::Card body-->
                                            <div class="card-body px-0">
                                                <?php woocommerce_output_all_notices(); ?>

                                                <div class="row g-6">
                                                    <?php if ( have_posts() ) : ?>
                                                        <?php while ( have_posts() ) : the_post(); global $product; ?>
                                                            <div class="col-md-3">
                                                                <div class="card p-5 h-100 d-flex flex-column justify-content-between text-center">

                                                                    <!-- Название -->
                                                                    <div>
                                                                        <h4 class="fw-bold mb-2"><?php the_title(); ?></h4>

                                                                        <!-- Изображение -->
                                                                        <?php if ( has_post_thumbnail() ) : ?>
                                                                            <div class="mb-3">
                                                                                <a href="<?php the_permalink(); ?>">
                                                                                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded']); ?>
                                                                                </a>
                                                                            </div>
                                                                        <?php endif; ?>

                                                                        <!-- Описание -->
                                                                        <p class="text-muted">
                                                                            <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                                                                        </p>
                                                                    </div>

                                                                    <!-- Цена и кнопка -->
                                                                    <div class="mt-4">
                                                                        <span class="fs-6 fw-bold text-primary"><?php echo $product->get_price_html(); ?></span><br>
                                                                        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary mt-2">
                                                                            Посмотреть и купить
                                                                        </a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        <?php endwhile; ?>
                                                    <?php else : ?>
                                                        <div class="col-12">
                                                            <div class="alert alert-warning">Нет доступных товаров.</div>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>

                                                <!-- Пагинация -->
                                                <div class="mt-10">
                                                    <?php woocommerce_pagination(); ?>
                                                </div>

                                            </div>
                                            <!--end::Card body-->

                                        </div>
                                    </div>
                                    <!--end::Content-->

                                    <?php
                                } elseif ( file_exists($template_path) ) {
                                    include $template_path;
                                } else {
                                    echo '<div class="alert alert-warning">Контент для этой страницы пока не добавлен.</div>';
                                }
                                ?>

                            <!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-xxl d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-gray-900 order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2023&copy;</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->


<?php get_footer(); ?>