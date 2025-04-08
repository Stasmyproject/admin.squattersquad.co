<?php
/**
 * Template Name: Страница корзины (Metronic)
 */

get_header();

// Подключаем кастомный layout
get_template_part('template-app-layout');
?>

<!--begin::Page content-->
<div class="app-content flex-column-fluid" id="kt_app_content">
    <div class="container-xxl" id="kt_app_content_container">
        <div class="card card-flush shadow-sm">
            <div class="card-body">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content(); // это выведет [woocommerce_cart]
                endwhile;
                ?>
            </div>
        </div>
    </div>
</div>
<!--end::Page content-->

<?php
get_footer();
