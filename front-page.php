<?php

get_header() ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <section class="main-baner">
      <div class="slider-main-content" data-delay="5000">
        <div class="bg-item"
             style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/'; ?>/assets/img/home-baner-bg.jpg');"></div>
        <div class="bg-item"
             style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/'; ?>/assets/img/our-story.jpg');"></div>
        <div class="bg-item"
             style="background-image:url('<?php echo get_template_directory_uri() . '/html_template/build/'; ?>/assets/img/paris.jpg');"></div>
      </div>

      <div class="baner-content">
        <div class="animation animation--1">
          <div class="animation-block animation-block--paragraphs">
            <p>Hello!</p>
            <p>I see you there!</p>
            <p>You look like you`ve been day dreaming</p>
            <p>about a relaxing trip to Fiji!</p>
            <p>Or maybe a romantic getaway to Paris? No?</p>
            <p>An awesome adventure to Machu Picchu?</p>
            <p>Or maybe you`re so fed up with all work, life responsibilitise</p>
            <p>and want to do them all!</p>
            <p>Well, You came to the right place!</p>
          </div>
          <div class="animation-block">
            <h3>Welcome to Well Planned 365!</h3>
          </div>
          <div class="animation-block animation-block-quote">
            <h4>
              We're Well Planned, so you don't have to be!
            </h4>
          </div>
        </div>
      </div>
      <a href="#" class="arr arr--down"></a>
    </section>
    <section class="content-line">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="get-started">
              <div class="get-started__bottom">
                <div class="title-with-underline">
                  <h2>
                    Sample Trip
                  </h2>
                </div>
                <p>
                  Have a look, see how we make a Well Planned trip for you!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

        <?php $args = array('category_name' => 'Homepage Category', 'orderby' => 'date', 'order' => 'ASC', 'post_type' => 'post', 'post_status' => 'publish', 'suppress_filters' => true,);

        $wpb_all_query = new WP_Query($args);
        ?>

    <section class="content-line trip-side">
      <div class="container">
        <div class="row">
          <div class="content-line-2__info col-12 col-lg-6 order-2 order-lg-1">
            <div class="tab-content" id="v-pills-tabContent">
                <?php if ($wpb_all_query->have_posts()) : ?>
                    <?php $i = 0; ?>
                    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>
                    <div class="tab-pane fade show <?php if (++$i === 1) {
                        echo 'active';
                    } ?>" id="tab-<?php echo $i; ?>" role="tabpanel"
                         aria-labelledby="v-pills-home-tab">
                      <h2><?php the_title(); ?></h2>
                        <?php the_content() ?>
                    </div>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                  <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                       aria-labelledby="v-pills-home-tab">
                    <h2><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
                  </div>
                <?php endif; ?>
            </div>
          </div>


          <div class="content-line-2__image col-12 col-lg-6 order-1 order-lg-2">
            <div class="bg-block"></div>
            <div class="nav pt-4 pb-5 flex-column nav-pills justify-content-center align-items-center"
                 id="v-pills-tab" role="tablist" aria-orientation="vertical ">


                <?php if ($wpb_all_query->have_posts()) : ?>
                    <?php $i = 0; ?>


                    <?php while ($wpb_all_query->have_posts()) : $wpb_all_query->the_post(); ?>

                    <a class="nav-link show <?php if (++$i === 1) {
                        echo 'active';
                    } ?>" data-toggle="pill" href="#tab-<?php echo $i; ?>" role="tab"
                       aria-selected="false"
                       data-image="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>">
                      <h2><?php the_title(); ?></h2>
                      <span><?php echo $i; ?></span>
                    </a>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                  <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                       aria-labelledby="v-pills-home-tab">
                    <h2><?php _e('Sorry, no posts matched your criteria.'); ?></h2>
                  </div>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="subscribe">
      <div class="container">
        <h2>Subscribe</h2>
        <div class="es_form_container">
          <form class="es_shortcode_form es_form_success subscribe__form" data-es_form_id="es_shortcode_form">
            <p>
              Sign up today and get the latest from Well Planned 365, directly to your inbox!
            </p>
            <div class="mt-3">
              <input type="email" id="es_txt_email" class="es_textbox_class email-form"
                     name="es_txt_email" value="" maxlength="60" required="" placeholder="Email address">
              <input type="submit" id="es_txt_button"
                     class="es_textbox_button es_submit_button btn btn--default btn--default-blue"
                     name="es_txt_button" value="subscribe">
              <div class="es_msg" id="es_shortcode_msg">
                <span id="es_msg"></span>
              </div>
              <input type="hidden" id="es_txt_group" name="es_txt_group" value="Public">
              <input type="hidden" name="es-subscribe" id="es-subscribe" value="10b4e96644">
              <label style="position:absolute;top:-99999px;left:-99999px;z-index:-99;"><input type="text"
                                                                                              name="es_hp_c4b858d530"
                                                                                              class="es_required_field"
                                                                                              tabindex="-1"
                                                                                              autocomplete="off"></label>
            </div>
        </div>
      </div>
    </section>

    <?php endwhile; ?>
<?php endif; ?>

<?php
if (isset($_GET['tap_id'])) : ?>
    <?php

    $curl = curl_init();

    curl_setopt_array($curl, array(CURLOPT_URL => "https://api.tap.company/v2/charges/" . $_GET['tap_id'], CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => "", CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 30, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => "GET", CURLOPT_POSTFIELDS => "{}", CURLOPT_HTTPHEADER => array("authorization: Bearer sk_test_CcXfM70z8DAkUBEh9pVNOGRZ"),));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) :
        echo "cURL Error #:" . $err;
    else :
        print '<br><br>';
        $response = json_decode($response);
        $metadata = $response->metadata;
        global $wpdb;

        $get_row = $wpdb->get_row('SELECT * FROM wp_orders WHERE order_id = ' . $metadata->order_id);

        // Admin email
        $to = 'info@wellplanned365.com';

        $subject = 'Another one order';
        $content = '<strong> status:</strong> ' . $response->status . '<br>';
        $content .= $get_row->data;
        $email_content = $content;

        if (wp_mail($to, $subject, $email_content)) {
            http_response_code(200);
        } else {
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

        $subject = get_field('subject', 'option');
        $email = $get_row->email;

        $content = '<html><body>';
        $content .= "<h1>Paid successfully. Total amount: $get_row->amount $</h1>";
        $content .= get_field('content', 'option');
        $content .= '<strong>Order details: </strong><br />' . $email_content;
        $content .= '</body></html>';
        $content = str_replace('[text-name]', $get_row->your_name, $content);

        wp_mail($email, $subject, $content);


        $wpdb->query('UPDATE wp_orders SET status = `' . $response->status . '` WHERE order_id = ' . $response->metadata->order_id); ?>

      <div id="modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #e45858; border-color: #e45858">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!--                    --><?php //$custom_logo_id = get_theme_mod('custom_logo');
              //                    $custom_logo_image = wp_get_attachment_image_src( $custom_logo_id , 'full' );  var_dump($custom_logo_id);
              ?>
            <img class="w-100 h-100"
                 src="<?php echo get_template_directory_uri() . '/html_template/build/assets/img/logo.jpeg'; ?>"
                 alt="">
            <div class="modal-footer text-center" style="background-color: #e45858; border-top: 0">
              <p style="margin: 0 auto; color: #fff">
                Thank you for choosing Well Planned 365!<br>
                A confirmation email will be sent to you shortly
              </p>
            </div>
          </div>
        </div>
      </div>

    <?php
    endif;
endif;

get_footer() ?>
