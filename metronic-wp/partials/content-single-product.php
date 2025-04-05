<?php
defined('ABSPATH') || exit;

global $product;
?>

<div>
    <h1>Проверка - проверка</h1>
</div>
<div class="app-content flex-column-fluid" id="kt_app_content">
    <div class="container-xxl" id="kt_app_content_container">
        <div class="row g-6 g-xl-9">
            <div class="col-lg-8">
                <div class="card card-flush">
                    <div class="card-body">
                        <!-- Название товара -->
                        <h1 class="product_title entry-title mb-5"><?php the_title(); ?></h1>

                        <div class="row">
                            <!-- Главное изображение -->
                            <div class="col-md-6">
                                <div class="woocommerce-product-gallery mb-4">
                                    <?php echo $product->get_image('large'); ?>
                                </div>
                            </div>

                            <!-- Контент: цена, описание, кнопка -->
                            <div class="col-md-6">
                                <div class="woocommerce-product-details">
                                    <!-- Цена -->
                                    <p class="price fs-3 text-primary mb-3"><?php echo $product->get_price_html(); ?></p>

                                    <!-- Краткое описание -->
                                    <div class="product-short-description mb-5">
                                        <?php echo apply_filters('woocommerce_short_description', $post->post_excerpt); ?>
                                    </div>

                                    <!-- Форма добавления в корзину -->
                                    <div class="add-to-cart-wrapper">
                                        <?php woocommerce_template_single_add_to_cart(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Характеристики и т.д. -->
                        <div class="mt-10">
                            <?php
                                woocommerce_output_product_data_tabs(); // вкладки: описание, доп. информация, отзывы
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Боковая панель -->
            <div class="col-lg-4">
                <div class="card card-flush">
                    <div class="card-body">
                        <!-- Метки и категории -->
                        <div class="product-meta mb-4">
                            <?php
                                echo wc_get_product_category_list($product->get_id(), ', ', '<strong>Категории:</strong> ', '<br>');
                                echo wc_get_product_tag_list($product->get_id(), ', ', '<strong>Метки:</strong> ', '<br>');
                            ?>
                        </div>

                        <!-- Кнопка "Назад" -->
                        <a href="<?php echo esc_url(get_permalink(wc_get_page_id('shop'))); ?>" class="btn btn-secondary">
                            ← Вернуться к списку товаров
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Похожие товары -->
        <div class="row mt-10">
            <div class="col-12">
                <?php woocommerce_output_related_products(); ?>
            </div>
        </div>
    </div>
</div>
