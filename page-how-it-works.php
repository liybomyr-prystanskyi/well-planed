<?php /* Template Name: How It Works */ ?>

<?php get_header() ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();

        // get all big background post images
        $img_all = '';
        while (have_rows('fields')) : the_row();
            if (get_sub_field('backgroud')) {
                $img_all .= get_sub_field('backgroud') . ',';
            }
        endwhile; ?>

        <section class="how-it-works" data-big-images="<?php echo $img_all; ?>" id="post-<?php the_ID(); ?>">
            <div class="blur-bg-image"></div>
            <div class="how-it-works__content">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-2">
                            <div class="number-cube ml-auto">
                                1
                            </div>
                        </div>
                        <div class="col-12 col-lg-10">
                            <div class="my-slider">
                                <?php
                                $page_id = 45;
                                // check if the repeater field has rows of data
                                if (have_rows('fields', $page_id)):

                                    // loop through the rows of data
                                    while (have_rows('fields', $page_id)) : the_row();
                                        ?>
                                        <div class="how-it-works__content__slide">
                                            <div class="row align-items-center">
                                                <div class="col-lg-6 col-12 text-right">
                                                    <h1><?php the_sub_field('title'); ?></h1>
                                                </div>
                                                <div class="col-lg-5 col-12">
                                                    <img src="<?php the_sub_field('image'); ?>"
                                                         alt="<?php the_sub_field('image'); ?>"
                                                         class="w-100 h-auto">
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="my-slider-controls">
                        <div class="row ">
                            <div class="col-12 col-lg-2 text-right pt-4">
                                <div class="my-slider-arrows">
                                    <div class="left-arrow-slide">
                                        <img src="<?php echo get_template_directory_uri() . '/html_template/build/'; ?>assets/img/arr-prev.png"
                                             alt="prev">
                                    </div>
                                    <div class="right-arrow-slide">
                                        <img src="<?php echo get_template_directory_uri() . '/html_template/build/'; ?>assets/img/arr-next.png"
                                             alt="next">
                                    </div>
                                </div>
                            </div>
                            <div class="col-9 d-none d-lg-block">
                                <div class="dots-container"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>