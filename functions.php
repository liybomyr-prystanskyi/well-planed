<?php
/**
 * Description: Well-Planned theme functions. Here theme name is 'wellplaned'
 * Date: 19/12/2018
 */

// Sets up theme defaults and registers support for various WordPress features.
// Note that this function is hooked into the after_setup_theme hook, which
// runs before the init hook. The init hook is too late for some features, such
// indicating support for post thumbnails.

// update core jquery.js
function replace_core_jquery_version()
{
    wp_deregister_script('jquery-core');
    wp_register_script('jquery-core', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1');
    wp_deregister_script('jquery-migrate');
    wp_register_script('jquery-migrate', "https://code.jquery.com/jquery-migrate-3.0.0.min.js", array(), '3.0.0');
}

add_action('wp_enqueue_scripts', 'replace_core_jquery_version');

// theme setup
add_action('after_setup_theme', 'wellpanned_setup');
function wellpanned_setup()
{

    // Make theme available for translation.
    load_theme_textdomain('wellpanned');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title. By adding theme support, we declare that this theme does not use
    // a hard-coded <title> tag in the document head, and expect WordPress to provide it for us.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');
    add_image_size('wellpanned-featured-image', 610, 375, true);

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'header-nav' => __('Header Menu', 'wellplanned'),
        'footer-nav' => __('Footer Menu', 'wellplanned')
    ));

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'height' => 119,
        'width' => 183,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Define and register starter content to showcase the theme on new sites.
    $starter_content = array(
        // Default to a static front page and assign the front and posts pages.
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ),

        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods' => array(
            'panel_1' => '{{homepage-section}}',
            'panel_2' => '{{trips}}',
            'panel_3' => '{{pricing}}',
        ),

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus' => array(
            // Assign a menu to the "top" location.
            'header-nav' => array(
                'name' => __('Header Menu', 'wellplanned'),
                'items' => array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_blog',
                    'page_pricing',
                ),
            ),
            'footer-nav' => array(
                'name' => __('Footer Menu', 'wellplanned'),
                'items' => array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_privacy-policy',
                    'page_contact',
                ),
            ),
        ),
    );
    $starter_content = apply_filters('wellplanned_starter_content', $starter_content);
    add_theme_support('starter-content', $starter_content);
}

// Allow SVG through WordPress Media Uploader
add_filter('upload_mimes', 'cc_mime_types');
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

// post excerpt link
// Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
add_filter('excerpt_more', 'wellplanned_excerpt_more');
function wellplanned_excerpt_more($link)
{
    if (is_admin()) {
        return $link;
    }
    $link = sprintf('<p><a href="%1$s" class="btn btn--default text-uppercase">%2$s</a></p>',
        esc_url(get_permalink(get_the_ID())),
        /* translators: %s: Name of current post */
        sprintf(__('read more ', 'wellplanned'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
}

// Handles JavaScript detection. Adds a `js` class to the root `<html>` element when JavaScript is detected.
function wellplanned_javascript_detection()
{
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action('wp_head', 'wellplanned_javascript_detection', 0);

// Add a pingback url auto-discovery header for singularly identifiable articles.
function wellplanned_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", get_bloginfo('pingback_url'));
    }
}

add_action('wp_head', 'wellplanned_pingback_header');

// Enqueue theme scripts and styles.
add_action('wp_enqueue_scripts', 'wellplaned_scripts');
function wellplaned_scripts()
{
    // path ti ;theme stylesheet
    $path = get_template_directory_uri() . '/html_template/build/assets/';//local path to directory with styles and scripts

    wp_enqueue_style('wellplaned-slick', $path . 'css/vendors/slick.css', array(), false, 'all');
    wp_enqueue_style('wellplaned-bootstrap', $path . 'css/vendors/bootstrap.min.css', 'wellplaned-slick', false, 'all');
    wp_enqueue_style('wellplaned-fontawesome', 'https://use.fontawesome.com/releases/v5.4.2/css/all.css', 'wellplaned-bootstrap', false, 'all');
    wp_enqueue_style('wellplaned-mcustomscrollbar', $path . 'css/vendors/jquery.mCustomScrollbar.css', 'wellplaned-bootstrap', false, 'all');
    wp_enqueue_style('wellplaned-style', $path . 'css/style.min.css', array('wellplaned-slick', 'wellplaned-fontawesome', 'wellplaned-mcustomscrollbar'), $ver = false, 'all');

    wp_enqueue_style('style', get_stylesheet_uri(), 'wellplaned-style');

    // Load the html5 shiv.
    wp_enqueue_script('html5', get_theme_file_uri('/js/html5.js'), array(), '3.7.3');
    wp_script_add_data('html5', 'conditional', 'lt IE 9');

    // load scripts in footer (last arg in wp_enqueue_script)
    $path_vendors = $path . 'js/vendors/';
    wp_enqueue_script('wellplanned-bootstrap-js', $path_vendors . 'bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('wellplanned-slick-js', $path_vendors . 'slick.min.js', 'wellplanned-bootstrap-js', false, true);
    wp_enqueue_script('wellplanned-contentloaded-js', $path_vendors . 'contentloaded.js', 'wellplanned-slick-js', false, true);
    wp_enqueue_script('wellplanned-cssParser', $path_vendors . 'cssParser.js', 'wellplanned-contentloaded-js', false, true);

    wp_enqueue_script('wellplanned-css-filters-polyfill', $path_vendors . 'css-filters-polyfill.js', 'wellplanned-cssParser', false, true);

    wp_enqueue_script('wellplanned-clippath', $path_vendors . 'clippath.min.js', 'wellplanned-css-filters-polyfill', false, true);
    wp_enqueue_script('moments', 'https://cdn.jsdelivr.net/momentjs/latest/moment.min.js', 'wellplanned-clippath', false, true);
    wp_enqueue_script('date-picker', 'https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js', 'moments', false, true);


    wp_enqueue_script('range-slider', 'https://rawgit.com/andreruffert/rangeslider.js/develop/dist/rangeslider.min.js', 'date-picker', false, true);

    wp_enqueue_script('mCustom-scrollbar', $path_vendors . 'jquery.mCustomScrollbar.js', 'wellplanned-cssParser', false, true);


    wp_enqueue_script('wellplanned-general-js', $path . 'js/script.min.js', array('wellplanned-bootstrap-js', 'wellplanned-clippath'), false, true);

    wp_enqueue_script('send-ajax-email', get_template_directory_uri() . '/send-ajax-email.js', array('wellplanned-bootstrap-js', 'wellplanned-clippath', 'wellplanned-general-js'), false, true);
}

// Use front-page.php when Front page displays is set to a static page.
add_filter('frontpage_template', 'wellplanned_front_page_template');
function wellplanned_front_page_template($template)
{
    return is_home() ? '' : $template;
}

// add theme settings fields with acf
get_template_part('inc/acf-settings', 'acf-settings');

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}


/* create contact fields on Options Page */
add_action('acf/init', 'register_acf_fields_sub_title_settings');
function register_acf_fields_sub_title_settings()
{
    if (function_exists('acf_add_local_field_group')):
        // add fields for social share icon
        $fields_soc = array(
            array(
                'key' => 'field_contact1',
                'name' => 'sub_title',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'button_label' => 'Add Sub title',
            )
        );
        acf_add_local_field_group(array(
            'key' => 'group_sub_title',
            'title' => 'Sub title',
            'fields' => $fields_soc,
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'order' => 0
        ));
    endif;
}

/* end of create contact fields on Options Page */

add_action('acf/init', 'register_acf_fields_date_settings');
function register_acf_fields_date_settings()
{
    if (function_exists('acf_add_local_field_group')):
        // add fields for social share icon
        $fields_soc = array(
            array(
                'key' => 'field_contact3',
                'name' => 'date',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'button_label' => 'Add date',
            )
        );
        acf_add_local_field_group(array(
            'key' => 'group_date',
            'title' => 'date',
            'fields' => $fields_soc,
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'order' => 0
        ));
    endif;
}

add_action('acf/init', 'register_acf_fields_recomendation_settings');
function register_acf_fields_recomendation_settings()
{
    if (function_exists('acf_add_local_field_group')):
        // add fields for social share icon
        $fields_soc = array(
            array(
                'key' => 'field_contact2',
                'name' => 'recommendation',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'button_label' => 'Add recommendation',
            )
        );
        acf_add_local_field_group(array(
            'key' => 'group_recommendation',
            'title' => 'Recommendation',
            'fields' => $fields_soc,
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'order' => 0
        ));
    endif;
}

add_action('acf/init', 'register_acf_fields_short_content_settings');
function register_acf_fields_short_content_settings()
{
    if (function_exists('acf_add_local_field_group')):
        // add fields for social share icon
        $fields_soc = array(
            array(
                'key' => 'field_short_content',
                'name' => 'short_content',
                'type' => 'textarea',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'button_label' => 'Add short content',
            )
        );
        acf_add_local_field_group(array(
            'key' => 'group_short_content',
            'title' => 'Short Content',
            'fields' => $fields_soc,
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'order' => 0
        ));
    endif;
}

/* create contact fields on Options Page */
add_action('acf/init', 'register_acf_fields_days_settings');
function register_acf_fields_days_settings()
{
    if (function_exists('acf_add_local_field_group')):
        // add fields for social share icon
        $fields_soc = array(
            array(
                'key' => 'field_days1',
                'label' => 'Schedule',
                'name' => 'days',
                'type' => 'repeater',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'layout' => 'row',
                'button_label' => 'Add day',
                'sub_fields' => array(
                    array(
                        'key' => 'field_days2',
                        'label' => 'Day title',
                        'name' => 'day_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_days3',
                        'label' => 'Day Sub title',
                        'name' => 'day_sub_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_days4',
                        'label' => 'Day Description',
                        'name' => 'day_additional_desc',
                        'type' => 'wysiwyg',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array(
                        'key' => 'field_days5',
                        'label' => 'Backgroud image',
                        'name' => 'day_bg',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'full',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                ),
            )
        );
        acf_add_local_field_group(array(
            'key' => 'group_days',
            'title' => 'Contacts',
            'fields' => $fields_soc,
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'post',
                    ),
                ),
            ),
            'order' => 0
        ));
    endif;
}

/* end of create contact fields on Options Page */

if (function_exists('acf_add_options_page')) {

    acf_add_options_page();

}

/**
 * Adding header for wp_mail
 */
function wpse27856_set_content_type()
{
    return "text/html";
}

add_filter('wp_mail_content_type', 'wpse27856_set_content_type');