<?php get_header() ?>

<?php
$page_for_posts = get_option('page_for_posts');
if (has_post_thumbnail($page_for_posts)) {
    $img_id = get_post_thumbnail_id($page_for_posts);
    $img = wp_get_attachment_url($img_id);
    $alt = get_post_meta($img_id, "_wp_attachment_image_alt", true);
}
?>


<?php if (have_posts()) : ?>

    <?php $args = array('numberposts' => -1, 'category' => 6,);
    ?>

  <section class="sample-trip-list-baner"
           style="background-image: url('<?php echo $img ?>')">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 col-lg-9 h-auto text-center">
          <h1><?php echo get_the_title($page_for_posts) ?></h1>
        </div>
      </div>
    </div>
  </section>

    <?php $i = 0 ?>

    <?php foreach (get_posts($args) as $post) : setup_postdata($post); ?>
        <?php $i++;

        wp_is_mobile() ? $is_odd = false : $is_odd = ($i % 2 === 0);

        ?>

    <!--- Some Commit --->

    <section class="content-line content-line--sample-trip-list">
      <div class="container">
        <div class="row align-items-center">
          <!-- Text side -->
          <div class="col-12 col-lg-6 <?php echo $is_odd ? 'order-1 order-lg-2' : ''; ?>">
            <div class="st-text-side <?php echo $is_odd ? 'st-text-side--reverse' : ''; ?>">
              <h2><?php the_title() ?></h2>
              <div class="st-photo-side d-md-block d-lg-none mb-4"
                   style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
              <p><?php the_field('short_content') ?></p>
              <a href="<?php the_permalink() ?>" class="btn btn--default btn-custome-style text-uppercase">read more</a>
            </div>
          </div>
          <div class="col-12 col-lg-6 align-self-stretch position-relative d-lg-block d-none">
            <div class="st-photo-side "
                 style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
          </div>
        </div>
      </div>
    </section>

    <?php endforeach; ?>
<?php endif; ?>

<?php get_footer() ?>