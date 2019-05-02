<?php get_header() ?>

<?php
if (is_page('privacy-policy') || is_page('terms-and-conditions') || is_page('cookie-policy')) $is_rule = true; else
    $is_rule = false;
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) :
        the_post(); ?>
    <section class="main-baner ">
      <div class="slider-main-content" data-delay="5000">
        <div class="bg-item"
             style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/'; ?>/assets/img/our-story.jpg');"></div>
      </div>

      <div class="baner-content">
        <div class="footer-page-content <?php if ($is_rule) {
            echo 'wider';
        } ?>">
          <div class="footer-page-content__block">
            <div class="title-with-underline">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
          <div class="footer-page-content__block <?php if ($is_rule) {
              echo 'text-left';
          } ?>">
              <?php the_content(); ?>
          </div>
            <?php if (get_the_ID() == 33) : ?>
              <div class="footer-page-content__block">
                <h3><?php _e('Click the button below to show you how it works.', 'wellplanned') ?></h3>
                <div class="text-center mt-4">
                  <a href="<?php echo home_url('/how-it-works') ?>"
                     class="btn btn--default"><?php _e('LET’S GO', 'wellplanned') ?></a>
                </div>
              </div>
            <?php endif; ?>
        </div>
      </div>
    </section>
        <?php if (get_the_ID() == 33) : ?>
    <section class="our-story">
      <div class="container text-center">
        <div class="our-story__dotted col-12 text-center">
          <div class="our-story__dotted__dot"></div>
          <div class="our-story__dotted__dot"></div>
          <div class="our-story__dotted__dot"></div>
        </div>
        <div class="our-story__description">
          <p>While on your trip, get support from our team for any last minute reservation changes or
            alternative recommendations. Due to international time differences, please ask for any
            updates or changes at least 12 hours in advance.</p>
        </div>
      </div>
    </section>
    <?php elseif (get_the_ID() == 7) : ?>
    <section class="our-story">
      <div class="container text-center">
        <div class="our-story__dotted col-12 text-center">
          <div class="our-story__dotted__dot"></div>
          <div class="our-story__dotted__dot"></div>
          <div class="our-story__dotted__dot"></div>
        </div>
        <div class="our-story__description">
          <p>We at Well Planned 365 know how hard it is to not be able to feel freedom while traveling because you're
            part of a tourist group. That's why, we write our itineraries in a way to really keep things loose! No
            strings atached.</p>
        </div>
        <div class="our-story__dotted col-12 text-center mt-5">
          <div class="our-story__dotted__dot"></div>
          <div class="our-story__dotted__dot"></div>
          <div class="our-story__dotted__dot"></div>
        </div>
        <div class="our-story__description">
          <p>
            Time not on your side? Not in the mood to read endless travel blogs and research like you're preparing a
            thesis? It's boring. But we love research, we'll do it for you and craft the perfect itinerary! No more
            wasting time and effort. At Well Planned 365, all you have to do is have fun and enjoy your trip!
          </p>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer() ?>
