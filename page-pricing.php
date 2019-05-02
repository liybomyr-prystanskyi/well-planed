<?php /* Template Name: Pricing */ ?>

<?php get_header() ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="pricing">
            <div class="pricing__content" style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/'; ?>assets/img/paris.jpg');">
                <div class="row">
                    <div class="col-12 test">
                        <div class="pricing__content__main">


                            <div class="central-info-block">
                            <?php the_content() ?>
                                <?php
                                $page = get_page_by_path('get-started');
                                ?>
                                <a href="<?php echo get_permalink($page->ID) ?>" class="btn btn--default  d-none d-lg-block">get started</a>
                            </div>

                            <div class="position-absolute w-100 h-100 numeric-wrapper">

                                <div class="numeric">
                                    <div class="numeric__circle">
                                        <h2>1</h2>
                                    </div>
                                    <div class="numeric__description">
                                        <p>
                                            Get paired with an expert
                                            trip designer
                                        </p>
                                    </div>
                                </div>

                                <div class="numeric">
                                    <div class="numeric__circle">
                                        <h2>2</h2>
                                    </div>
                                    <div class="numeric__description">
                                        <p>Custom daily travel plan</p>
                                    </div>
                                </div>

                                <div class="numeric">
                                    <div class="numeric__circle">
                                        <h2>3</h2>
                                    </div>
                                    <div class="numeric__description">
                                        <p>Delivery in
                                            5-8 business days</p>
                                    </div>
                                </div>

                                <div class="numeric">
                                    <div class="numeric__circle">
                                        <h2>4</h2>
                                    </div>
                                    <div class="numeric__description">
                                        <p>In-destination support</p>
                                    </div>
                                </div>

                                <div class="numeric">
                                    <div class="numeric__circle">
                                        <h2>5</h2>
                                    </div>
                                    <div class="numeric__description">
                                        <p>Links to book all recommended hotels,
                                            airlines/transportations tickets,
                                            activities and restaurants</p>
                                    </div>
                                </div>

                                <div class="numeric">
                                    <div class="numeric__circle">
                                        <h2>6</h2>
                                    </div>
                                    <div class="numeric__description">
                                        <p>2 rounds of
                                            trip revisions </p>
                                    </div>
                                </div>

                                <div class="numeric">
                                    <div class="numeric__circle">
                                        <h2>7</h2>
                                    </div>
                                    <div class="numeric__description">
                                        <p>Unlimited email /
                                            chat with your designer</p>
                                    </div>
                                </div>

                            </div>

                            <div class="d-block d-lg-none mt-5 mb-1">
                                <a href="<?php echo get_permalink($page->ID) ?>" class="btn btn--default  ">get started</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>