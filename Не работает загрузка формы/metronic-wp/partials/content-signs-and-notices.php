<?php
/**
 * Template Part: Таблички и знаки (товары WooCommerce)
 */

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 12,
    'orderby'        => 'date',
    'order'          => 'DESC',
    //'product_cat'    => 'signs-and-notices', // Укажи свою категорию, если есть
);

$loop = new WP_Query($args);
?>

                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <!--begin::Content container-->
                                <div id="kt_app_content_container" class="app-container container-xxl">

                                        <!--begin::Card body-->
                                        <div class="card-body ">
                                            <div class="row g-6">
                                            <?php if ($loop->have_posts()) : ?>
                                                <?php while ($loop->have_posts()) : $loop->the_post(); global $product; ?>
                                                    <div class="col-md-3">
                                                        <div class="card p-5 h-100 d-flex flex-column justify-content-between text-center">
                                                            <div>
                                                                <h4 class="fw-bold mb-2 "><?php the_title(); ?></h4>
                                                                <?php if (has_post_thumbnail()) : ?>
                                                                    <div class="mb-3">
                                                                        <a href="<?php the_permalink(); ?>">
                                                                            <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                                                        </a>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <p class="text-muted"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                                            </div>
                                                            <div class="mt-4">
                                                                <span class="fs-6 fw-bold text-primary"><?php echo $product->get_price_html(); ?></span><br>
                                                                <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-primary mt-2">View & Purchase</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            <?php else : ?>
                                                <div class="col-12">
                                                    <div class="alert alert-warning">No signs available at this moment.</div>
                                                </div>
                                            <?php endif; ?>
                                            </div>
                                        </div>
                          
                                </div>
                            </div>
                            <!--end::Content-->

<?php wp_reset_postdata(); ?>
