<?php
/**
 * Description: this file create Options pages, some groups of ACF fields
 */

/* add acf while theme setup */
// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/inc/acf-pro/'; // update path
    return $path;
}
// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/inc/acf-pro/'; // update path
    return $dir;
}
include_once( get_stylesheet_directory() . '/inc/acf-pro/acf.php' ); // 4. Include ACF

// create Options Pages
add_action('acf/init', 'register_options_pages');
function register_options_pages() {
    if( function_exists('acf_add_options_page') ){
        acf_add_options_page(array(
            'page_title' 	=> 'Contact Settings',
            'menu_title'	=> 'Contact Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
    }
}
/* end of add acf while theme setup */

/* create contact fields on Options Page */
add_action('acf/init', 'register_acf_fields_contacts_settings');
function register_acf_fields_contacts_settings() {
    if( function_exists('acf_add_local_field_group') ):
        // add fields for social share icon
        $fields_soc = array(
            array(
                'key' => 'field_contact1',
                'label' => 'Social links',
                'name' => 'soc_links',
                'type' => 'repeater',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => '',
                'max' => '',
                'layout' => 'table',
                'button_label' => 'Add Social link',
                'sub_fields' => array (
                    array (
                        'key' => 'field_contact2',
                        'label' => 'Link text',
                        'name' => 'link_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array (
                        'key' => 'field_contact3',
                        'label' => 'Link URL',
                        'name' => 'link_url',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array (
                        'key' => 'field_contact4',
                        'label' => 'Link icon',
                        'name' => 'link_icon',
                        'type' => 'text',
                        'placeholder' => '<i class="fa fa-custom"></i>',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                    ),
                    array (
                        'key' => 'field_contact5',
                        'label' => 'Link image (for products)',
                        'name' => 'link_image',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
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
            'key' => 'group_contacts',
            'title' => 'Contacts',
            'fields' => $fields_soc,
            'location' => array (
                array (
                    array (
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'theme-general-settings',
                    ),
                ),
            ),
            'order' => 0
        ));
    endif;
}
/* end of create contact fields on Options Page */

/* add field for big background image on Posts */
add_action('acf/init', 'register_acf_fields_post_img_settings');
function register_acf_fields_post_img_settings() {
    if( function_exists('acf_add_local_field_group') ):
        // add fields for social share icon
        $fields_img = array(
            array (
                'key' => 'field_bg_image1',
                'label' => 'Big background image',
                'name' => 'bg_image',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
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
        );
        acf_add_local_field_group(array(
            'key' => 'group_bg_image',
            'title' => 'Big Background Image',
            'fields' => $fields_img,
            'location' => array (
                array (
                    array (
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
/* end of add field for big background image on Posts */

// add extra fields for form slider on Get Started Page
get_template_part( 'inc/acf', 'form-slider' );