<?php /* Template Name: Sample Trips */ ?>

<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <section class="main-baner"
             style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/'; ?>assets/img/st-list-baner.jpg');">
      <div class="trip-baner-title text-center d-flex">
        <div>
          <h2><?php the_title() ?></h2>
        </div>
      </div>
      <div class="trip-baner-description text-center">
          <?php the_content() ?>
      </div>
    </section>

        <?php $args = array('numberposts' => 1, 'category' => 6,);
        ?>

    <!-- Start Trip Direction -->
        <?php foreach (get_posts($args) as $post) : setup_postdata($post); ?>
      <section class="content-line-2 trip-side">
        <div class="container">
          <div class="trips-content-line-3-title text-center">
            <h2><?php the_title() ?></h2>
            <h3><?php the_content() ?></h3>
          </div>
        </div>
      </section>
        <?php endforeach; ?>
    <!-- End Trip Direction -->

        <?php $args = array('numberposts' => 1, 'category' => 8,);
        ?>

    <!-- Start Designer Section -->
        <?php foreach (get_posts($args) as $post) : setup_postdata($post); ?>
      <section class="content-line content-line--sample-trip-list">
        <div class="container">
          <div class="row align-items-center">
            <!-- Text side -->
            <div class="col-12 col-lg-6 order-2 order-lg-1 ">
              <div class="st-text-side ">
                  <?php the_content() ?>
              </div>
            </div>
            <!-- /Text side -->
            <!-- Photo side -->
            <div class="col-12 col-lg-6 align-self-stretch position-relative order-1 order-lg-2 ">
              <div class="st-photo-side "
                   style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
            </div>
            <!-- /Photo side -->
          </div>
        </div>
      </section>
        <?php endforeach; ?>
    <!-- End Designer Section -->

        <?php $args = array('numberposts' => -1, 'category' => 7, 'orderby' => 'post_title', 'order' => 'ASC',);
        ?>

    <!-- Start Days Section -->
    <div style="background-color: #e45858;">
      <section class="trips-days">
          <?php foreach (get_posts($args) as $post) : setup_postdata($post); ?>
            <div class="trips-days__bg" style="background-image:url('<?php the_post_thumbnail_url() ?>');">
              <div class="row justify-content-end">
                <div class="col-12 col-lg-10 ">
                  <div class="trips-days__title text-center">
                    <div class="day-title">
                      <h2><?php the_title() ?></h2>
                      <div class="text-center">
                        <h3><?php the_field('sub_title') ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="trips-days__info text-left">
                      <?php the_content() ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
      </section>
    </div>
    <!-- End Days Section -->


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>