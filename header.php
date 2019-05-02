<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <title><?php (wp_title("", false)) ? wp_title("") : bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-4 col-lg-3 logo-block">
                <?php
                // display logo
                $page = get_page_by_path('get-started');
                $custom_logo_id = get_theme_mod('custom_logo');
                $custom_logo_image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if(has_custom_logo())
                    echo '<a href="'.get_home_url().'" class="hidden-xs"><img src="'.$custom_logo_image[0].'" alt="'.get_bloginfo('name').'" class="logo-image" /></a>';
                else
                    echo '<a href="'.get_home_url().'"><img src="'.get_template_directory_uri() . '/html_template/build/assets/img/logo-well-planned.png'.'" alt="'.get_bloginfo('name').'" class="logo-image" /></a>';
                ?>
            </div>
            <?php
            // get permalink GET Started Page
            $page_get_started = get_pages(array(
                'meta_key' => '_wp_page_template',
                'meta_value' => 'page-get-started.php'
            ))[0];

            // display header nav menu
            $args = array(
                'theme_location' => 'header-nav',
                'container_class' => 'col-4 col-lg-9 text-right d-none d-lg-inline-block',
                'menu' => '',
                'container' => 'div',
                'container_id' => 'menu',
                'menu_class' => 'main-nav',
                'menu_id' => '',
                'echo' => true,
                'depth' => 0,
                'fallback_cb' => '__return_empty_string',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul><a href="'.get_permalink($page->ID).'" class="btn btn--default">'.__("get started", "wellplanned").'</a>',
            );
            wp_nav_menu($args);
            ?>

            <!-- Mobile MENU-->
            <div class="responsive-menu d-lg-none d-block">
                <div class="burger">
                    <span></span>
                </div>

                <?php
                $args = array(
                    'theme_location' => 'header-nav',
                    'container_class' => '',
                    'menu' => '',
                    'container' => 'nav',
                    'container_id' => '',
                    'menu_class' => 'main',
                    'menu_id' => '',
                    'echo' => true,
                    'depth' => 0,
                    'fallback_cb' => '__return_empty_string',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul><div class="col-12 d-lg-none text-center">
                       <a href="'.get_permalink($page->ID).'" class="btn btn--default responsive-btn">'.__("get started", "wellplanned").'</a>
                    </div>',
                );
                wp_nav_menu($args);
                ?>

            </div>
            <!-- /Mobile MENU -->
        </div>

    </div>
</header>