<?php
/**
 * Template Name: App Layout Horizontal
 */ 

// Определим авторизацию
$is_logged_in = is_user_logged_in();

// Только теперь — загружаем header
get_header();
echo '<div style="padding: 10px; background: #e0f7fa;">[DEBUG] Старт шаблона</div>';

?>


				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">


					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">


						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">


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
                                        <?php get_template_part('partials/toolbar'); ?>
                                    <!--end::Actions-->

                                    
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            <!--end::Toolbar-->


                            <!--begin::Content-->
                                <!-- 🔥 begin::Контентная часть -->

                                <?php
                                // ➤ Касается создания формы и больше ничего
                                while (have_posts()) : the_post();
                                    // echo '<div style="padding: 10px; background: #ffe0b2;">[DEBUG] Страница найдена: ' . get_the_title() . '</div>';

                                    // ✅ Получаем произвольное поле "json_form_slug" без ACF
                                    // Это значение ты задаёшь вручную в разделе "Пользовательские поля" при редактировании страницы
                                    $form_slug = get_post_meta(get_the_ID(), 'json_form_slug', true);

                                    // ➤ Проверка: это страница, где нужно отобразить форму (тип document И есть slug формы)
                                    if (get_post_type() === 'page' && !empty($form_slug)) {
                                        // ⬇️ Подключаем JSON-форму через универсальный шаблон рендера
                                        get_template_part('template-parts/forms/render', null, ['slug' => $form_slug]);
                                    } else {
                                        // 🟢 Стандартный вывод для проектов, постов и остальных страниц
                                        get_template_part('template-parts/content', get_post_type());
                                    }
                                endwhile;

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

                                <!-- 🔥 end::Контентная часть -->
                            <!--end::Content-->

						</div>
						<!--end::Content wrapper-->

                        
						<!--begin::Footer-->
                            <?php get_footer(); ?>
						<!--end::Footer-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->

			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->


