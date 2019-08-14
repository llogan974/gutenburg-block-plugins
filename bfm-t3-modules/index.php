<?php

/**
 * Plugin Name: BFM T3 Modules
 * Author: Luke
 * Version: 1.0.0
 */


// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', dirname(__FILE__) . '/../advanced-custom-fields-pro/' );
define( 'MY_ACF_URL', dirname(__FILE__) . '/../advanced-custom-fields-pro/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );




// Saving and loading, from https://www.advancedcustomfields.com/resources/local-json/

add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

    // update path
    $path = dirname(__FILE__) . '/t3-acf';


    // return
    return $path;

}

// Loading files from JSON in the plugin
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point( $paths ) {

    // remove original path (optional)
    unset($paths[0]);


    // append path
    $path = dirname(__FILE__) . '/t3-acf';


    // return
    return $paths;

}

array(
	'5bc5ebc7d8680g' => array(
		'key'        => '5bc5ebc7d868gg',
		'name'       => 'visit',
		'label'      => 'Visit',
		'display'    => 'block',
		'sub_fields' => array(
			array(
				'key'               => 'field_5be9842df604e',
				'label'             => 'Title',
				'name'              => 'title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'Schedule a Visit',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => 50,
			),
			array(
                'key'               => 'field_5be98621253fc',
                'label'             => 'Description',
                'name'              => 'description',
                'type'              => 'textarea',
                'instructions'      => '',
                'required'          => 1,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
                'maxlength'         => 208,
                'rows'              => 4,
                'new_lines'         => 'br',
            ),
            array(
                'key'               => 'field_5be9tx21253fc',
                'label'             => 'Login Text',
                'name'              => 'login_text',
                'type'              => 'text',
                'instructions'      => '',
                'required'          => 1,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => 'if you have already created an account.',
                'placeholder'       => '',
                'prepend'           => '',
                'append'            => '',
                'maxlength'         => '',
            ),
			array(
				'key'               => 'field_5be98e0524c1d',
				'label'             => 'Toggle list',
				'name'              => 'list',
				'type'              => 'repeater',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'collapsed'         => '',
				'min'               => 0,
				'max'               => 0,
				'layout'            => 'row',
				'button_label'      => '',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5be98fe424c1e',
						'label'             => 'Label',
						'name'              => 'label',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 50,
					),
					array(
						'key'               => 'field_5be98ff724c1f',
						'label'             => 'Content',
						'name'              => 'content',
						'type'              => 'wysiwyg',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 1,
					),
				),
			),
			array(
				'key'               => 'field_5be990375f805',
				'label'             => 'Open Title',
				'name'              => 'open_title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'Open House',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => 50,
			),
			array(
				'key'               => 'field_5be990555f806',
				'label'             => 'Open Description',
				'name'              => 'open_description',
				'type'              => 'textarea',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'maxlength'         => 184,
				'rows'              => 2,
				'new_lines'         => 'br',
			),
            array(
                'key'               => 'field_5be990555f906',
                'label'             => 'Open Full Description',
                'name'              => 'open_full_description',
                'type'              => 'textarea',
                'instructions'      => '',
                'required'          => 1,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
                'maxlength'         => '',
                'rows'              => 3,
                'new_lines'         => 'br',
            ),
			array(
				'key'               => 'field_5be990865f807',
				'label'             => 'Open Keep Reading',
				'name'              => 'open_keep_reading',
				'type'              => 'group',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'layout'            => 'block',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5be9914d5f808',
						'label'             => 'Open',
						'name'              => 'open',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 'Keep Reading',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 50,
					),
					array(
						'key'               => 'field_5be992275f809',
						'label'             => 'Close',
						'name'              => 'close',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 'Close',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 50,
					),
				),
			),
            array(
                'key'               => 'field_5be98e0h24e1d',
                'label'             => 'Events',
                'name'              => 'events',
                'type'              => 'repeater',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'collapsed'         => '',
                'min'               => 0,
                'max'               => 0,
                'layout'            => 'table',
                'button_label'      => 'Add Event',
                'sub_fields'        => array(
                    array (
                        'key' => 'field_5cd2888cd926e',
                        'label' => 'Date',
                        'name' => 'date',
                        'type' => 'date_picker',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'display_format' => 'm/d/Y',
                        'return_format' => 'm/d/Y',
                        'first_day' => 1,
                    ),
                    array (
                        'key' => 'field_5cd2889ed926f',
                        'label' => 'Time',
                        'name' => 'time',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5cd288a7d9270',
                        'label' => 'Event title',
                        'name' => 'event_title',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array (
                        'key' => 'field_5cd288afd9271',
                        'label' => 'Event URL',
                        'name' => 'event_url',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array (
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
			array(
				'key'               => 'field_5be9927550ab4',
				'label'             => 'Upcoming Sessions',
				'name'              => 'upcoming_sessions',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'Upcoming Sessions',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => 50,
			),
			array(
				'key'               => 'field_5be9931750ab5',
				'label'             => 'Tour Title',
				'name'              => 'tour_title',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'Personalized Tour',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => 50,
			),
			array(
				'key'               => 'field_5bea722662043',
				'label'             => 'Tour Description',
				'name'              => 'tour_description',
				'type'              => 'textarea',
				'instructions'      => '',
				'required'          => 1,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'maxlength'         => 184,
				'rows'              => 3,
				'new_lines'         => 'br',
			),
            array(
                'key'               => 'field_5bea722663043',
                'label'             => 'Tour Full Description',
                'name'              => 'tour_full_description',
                'type'              => 'textarea',
                'instructions'      => '',
                'required'          => 1,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'default_value'     => '',
                'placeholder'       => '',
                'maxlength'         => '',
                'rows'              => 3,
                'new_lines'         => 'br',
            ),
			array(
				'key'               => 'field_5bea72b862044',
				'label'             => 'Tour Keep Reading',
				'name'              => 'tour_keep_reading',
				'type'              => 'group',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'layout'            => 'block',
				'sub_fields'        => array(
					array(
						'key'               => 'field_5bea72c462045',
						'label'             => 'Open',
						'name'              => 'open',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 'Keep Reading',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 50,
					),
					array(
						'key'               => 'field_5bea72de62046',
						'label'             => 'Close',
						'name'              => 'close',
						'type'              => 'text',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '50',
							'class' => '',
							'id'    => '',
						),
						'default_value'     => 'Close',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => 50,
					),
				),
			),
			array(
				'key'               => 'field_5bea731c62047',
				'label'             => 'Choose a Date',
				'name'              => 'choose_date',
				'type'              => 'text',
				'instructions'      => '',
				'required'          => 0,
				'conditional_logic' => 0,
				'wrapper'           => array(
					'width' => '',
					'class' => '',
					'id'    => '',
				),
				'default_value'     => 'Choose a Date',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'maxlength'         => '',
			),
		),
		'min'        => '',
		'max'        => '',
	)
);