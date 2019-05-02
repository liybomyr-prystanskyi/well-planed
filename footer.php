<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                $args = array(
                    'theme_location' => 'footer-nav',
                    'container_class' => 'footer-main__list text-center',
                    'menu' => '',
                    'container' => 'div',
                    'container_id' => 'menu',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'depth' => 0,
                    'fallback_cb' => '__return_empty_string',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                );
                wp_nav_menu($args);
                ?>

                <div class="footer-main__social">
                    <?php
                    // get acf fields from contact options page
                    if (have_rows('soc_links', 'option')):
                        while (have_rows('soc_links', 'option')):the_row();
                            if (get_sub_field("link_url")) {
                                echo '<a href="' . get_sub_field("link_url") . '">';
                                if (get_sub_field("link_icon")) {
                                    echo get_sub_field("link_icon");
                                } else {
                                    if (get_sub_field("link_image")) {
                                        echo '<img src="' . get_sub_field("link_image") . '" alt="social-icon">';
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . '/html_template/build/assets/img/insta.png" alt="social-icon">';
                                    }
                                }
                                echo '</a>';
                            }
                        endwhile;
                    endif;
                    ?>

                    <?php

                    // check if the repeater field has rows of data
                    if (have_rows('social', 'options')):

                        // loop through the rows of data
                        while (have_rows('social', 'options')) : the_row();
                            ?>
                            <a href="<?php the_sub_field('link'); ?>">
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                            </a>
                        <?php
                        endwhile;


                    endif;

                    ?>


                </div>
            </div>
        </div>
    </div>
</footer>
<div id="cookieAcceptBar" class="cookieAcceptBar">
  We use cookies to improve your experience when using our website. <a href="<?php echo home_url('/cookie-policy'); ?>">Read our cookies policy.</a><br>
  <div id="cookieAcceptBarConfirm" class="btn btn--default">I agree</div>
</div>

<script>
    // this is important
    var polyfilter_scriptpath = '<?php echo get_template_directory_uri() . '/html_template/build/'; ?>/assets/js/vendors/';
</script>

<?php wp_footer(); ?>
</body>
</html>