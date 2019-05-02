<?php get_header() ?>

<?php
$page_for_posts = get_the_ID();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <section class="main-baner" style="background-image:url('<?php the_field('bg_image') ?>'">
            <div class="trip-baner-title text-center d-flex">
                <div>
                    <h2><?php the_title() ?></h2>
                </div>
            </div>
            <div class="trip-baner-description text-center">
                <h5><?php the_field('sub_title') ?></h5>
            </div>
        </section>

        <section class="content-line-2 trip-side">
            <div class="container">
                <div class="trips-content-line-3-title text-center">
                    <h2><?php the_field('date') ?></h2>
                    <h3><?php the_field('recommendation') ?></h3>
                </div>
            </div>
        </section>

        <?php $args = array(
            'numberposts' => 1,
            'category' => 8,
        );
        ?>

        <!-- Start Designer Section -->
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
                             style="background-image: url('<?php the_post_thumbnail_url() ?>');"></div>
                    </div>
                    <!-- /Photo side -->
                </div>
            </div>
        </section>
        <!-- End Designer Section -->

        <div style="background-color: #e45858;">
            <?php if (have_rows('days', get_the_ID())): ?>
                <?php while (have_rows('days', get_the_ID())) : the_row() ?>
                    <?php if (get_sub_field("day_bg")) : ?>
                        <section class="trips-days">
                            <div class="trips-days__bg"
                                 style="background-image:url('<?php echo get_sub_field('day_bg') ?>');">
                                <div class="row justify-content-end">
                                    <div class="col-12 col-lg-10 ">
                                        <div class="trips-days__title text-center">
                                            <div class="day-title">
                                                <h2><?php echo get_sub_field('day_name') ?></h2>
                                                <?php if (get_sub_field('day_sub_title')) : ?>
                                                    <h3><?php echo get_sub_field('day_sub_title') ?></h3>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                        <div class="trips-days__info text-left">
                                            <?php echo get_sub_field('day_additional_desc') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif ?>
                <?php endwhile ?>
            <?php endif ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
