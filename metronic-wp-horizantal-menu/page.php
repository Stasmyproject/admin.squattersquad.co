<?php get_header(); ?>

<div class="d-flex flex-column flex-root">
  <!-- begin::Page -->
  <div class="page d-flex flex-row flex-column-fluid">
    <?php
    // Если у вас есть боковая панель Metronic
    // get_sidebar();
    ?>

    <!-- begin::Wrapper -->
    <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

      <!-- begin::Content -->
      <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        <!-- begin::Container -->
        <div class="container-xxl" id="kt_content_container">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- begin::Card -->
            <div class="card card-flush py-5">
              
              <!-- Заголовок страницы -->
              <div class="card-header">
                <h1 class="card-title fs-2x text-dark"><?php the_title(); ?></h1>
              </div>
              <div class="card-header">
              	 <p>Это базовый шаблон, выставь правильный шаблон</p>
              </div>
              
              <!-- Тело страницы -->
              <div class="card-body">
                <?php the_content(); ?>
              </div>
              
            </div>
            <!-- end::Card -->
          <?php endwhile; endif; ?>

        </div>
        <!-- end::Container -->

      </div>
      <!-- end::Content -->

    </div>
    <!-- end::Wrapper -->

  </div>
  <!-- end::Page -->
</div>

<?php get_footer(); ?>