<?php
/**
 * Description: this file contains ACF fields settings for Form-Slider Get-Started Page
 */

add_action('acf/init', 'register_acf_fields_form_slide_settings');
function register_acf_fields_form_slide_settings() {
    if( function_exists('acf_add_local_field_group') ):
        $fields_form = array(
            array (
                'key' => 'field_fslide11',
                'label' => 'Slide title',
                'name' => 'field_label',
                'type' => 'text',
                'prefix' => '',
                'instructions' => '',
                'placeholder' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            ),
            array (
                'key' => 'field_fslide12',
                'label' => 'Choose form field',
                'name' => 'field_type',
                'type' => 'flexible_content',
                'prefix' => '',
                'instructions' => "In this area you can choose and add form fields.",
                'button_label' => 'Add field',
                'min' => '',
                'max' => '',
                'layouts' => array(
                    array (
                        'label' => 'Label',
                        'name' => 'field_label',
                        'display' => 'row',
                        'min' => '',
                        'max' => '',
                        'sub_fields' => array(
                            array (
                                'key' => 'field_fslide121',
                                'label' => 'Label text',
                                'name' => 'field_label',
                                'type' => 'text',
                                'prefix' => '',
                                'instructions' => '',
                                'placeholder' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                        ),
                    ),
                    array (
                        'label' => 'Dropdown',
                        'name' => 'field_select',
                        'display' => 'row',
                        'min' => '',
                        'max' => '',
                        'sub_fields' => array(
                            array (
                                'key' => 'field_fslide1221',
                                'label' => 'Dropdown name',
                                'name' => 'field_select_name',
                                'type' => 'text',
                                'prefix' => '',
                                'instructions' => '',
                                'placeholder' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                            array(
                                'key' => 'field_fslide1222',
                                'label' => 'Dropdown menu options',
                                'name' => 'select_options',
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
                                'button_label' => 'Add Option',
                                'sub_fields' => array (
                                    array (
                                        'key' => 'field_fslide12221',
                                        'label' => 'Option value',
                                        'name' => 'field_op_value',
                                        'type' => 'text',
                                        'prefix' => '',
                                        'instructions' => '',
                                        'placeholder' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array (
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                        'readonly' => 0,
                                        'disabled' => 0,
                                    ),
                                    array (
                                        'key' => 'field_fslide12222',
                                        'label' => 'Option text',
                                        'name' => 'field_op_text',
                                        'type' => 'text',
                                        'prefix' => '',
                                        'instructions' => '',
                                        'placeholder' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array (
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                        'readonly' => 0,
                                        'disabled' => 0,
                                    ),
                                    array (
                                        'key' => 'field_fslide12223',
                                        'label' => 'Onclick',
                                        'name' => 'field_op_onclick',
                                        'type' => 'true_false',
                                        'layout' => 'horizontal',
                                        'message' => 'Create text field on click this option',
                                        'prefix' => '',
                                        'instructions' => '',
                                        'placeholder' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array (
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => false,
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                        'readonly' => 0,
                                        'disabled' => 0,
                                    ),
                                )
                            )
                        )
                    ),
                    array (
                        'label' => 'Radio buttons',
                        'name' => 'field_radio',
                        'display' => 'table',
                        'min' => '',
                        'max' => '',
                        'sub_fields' => array(
                            array (
                                'key' => 'field_fslide1231',
                                'label' => 'Button name',
                                'name' => 'field_radio_name',
                                'type' => 'text',
                                'prefix' => '',
                                'instructions' => '',
                                'placeholder' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                            array (
                                'key' => 'field_fslide1232',
                                'label' => 'Button text',
                                'name' => 'field_radio_label',
                                'type' => 'text',
                                'prefix' => '',
                                'instructions' => '',
                                'placeholder' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                        )
                    ),
                    array (
                        'label' => 'Textarea',
                        'name' => 'field_textarea',
                        'display' => 'row',
                        'min' => '',
                        'max' => '',
                        'sub_fields' => array(
                            array (
                                'key' => 'field_fslide1241',
                                'label' => 'Text field name',
                                'name' => 'field_textarea_name',
                                'type' => 'text',
                                'prefix' => '',
                                'instructions' => '',
                                'placeholder' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                            array (
                                'key' => 'field_fslide1242',
                                'label' => 'Text field placeholder',
                                'name' => 'field_textarea_placeholder',
                                'type' => 'textarea',
                                'prefix' => '',
                                'instructions' => '',
                                'placeholder' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                        )
                    ),
                    array (
                        'label' => 'Date field',
                        'name' => 'field_date',
                        'display' => 'table',
                        'min' => '',
                        'max' => '',
                        'sub_fields' => array(
                            array (
                                'key' => 'field_fslide1251',
                                'label' => 'Field name',
                                'name' => 'field_date_name',
                                'type' => 'text',
                                'prefix' => '',
                                'instructions' => '',
                                'placeholder' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array (
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                                'readonly' => 0,
                                'disabled' => 0,
                            ),
                            array (
                                'key' => 'field_fslide1252',
                                'label' => 'Date default value',
                                'name' => 'field_default_date',
                                'type' => 'date_picker',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => [
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ],
                                'display_format' => 'Y-m-d',
                                'return_format' => 'Y-m-d',
                                'first_day' => 1,
                            ),
                        )
                    )
                )
            )
        );
        $fields_slider = array(
            array(
                array (
                    'key' => 'field_fslide1',
                    'label' => 'Poll forms',
                    'name' => 'polls',
                    'type' => 'repeater',
                    'prefix' => '',
                    'instructions' => "In this area you can add polls.",
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
                    'layout' => 'row',
                    'button_label' => 'Add a poll',
                    'sub_fields' => array (
                        array (
                            'key' => 'field_poll1',
                            'label' => 'Poll title',
                            'name' => 'poll_title',
                            'type' => 'text',
                            'prefix' => '',
                            'instructions' => '',
                            'placeholder' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array (
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                            'readonly' => 0,
                            'disabled' => 0,
                        ),
                        array (
                            'key' => 'field_poll2',
                            'label' => 'Narrow background image',
                            'name' => 'bg_small',
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
                        array (
                            'key' => 'field_poll3',
                            'label' => 'Full-width background image',
                            'name' => 'bg_big',
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
                        array (
                            'key' => 'field_poll4',
                            'label' => 'Form Slide',
                            'name' => 'form_slide',
                            'type' => 'repeater',
                            'prefix' => '',
                            'instructions' => "In this area you can add slide with form elements.",
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
                            'layout' => 'row',
                            'button_label' => 'Add a Slide',
                            'sub_fields' =>  $fields_form
                        )
                    )
                )
            )
        );
        acf_add_local_field_group(array(
            'key' => 'group_slider1',
            'title' => 'Trip Types',
            'fields' => $fields_slider,
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-get-started.php',
                    ),
                ),
            ),
        ));
    endif;
}