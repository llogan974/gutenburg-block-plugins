<?php

/**
 * Plugin Name: My Cool Border Box
 * Author: Luke Block Exercises
 * Version: 1.0.0
 */

function loadMyBlockFiles() {
    // Load the script. Dependencies are wp-blocks, wp-i18n, and wp-editor
  wp_enqueue_script(
    'my-super-unique-handle',
    plugin_dir_url(__FILE__) . 'my-block.js',
    array('wp-blocks', 'wp-i18n', 'wp-editor'),
    true
  );
}

add_action('enqueue_block_editor_assets', 'loadMyBlockFiles');

/* To make your block "dynamic" uncomment
  the code below and in your JS have your "save"
  method return null
*/


function borderBoxOutput($props) {
  return '<h3 style="border: 5px solid' . $props['color'] . '">' . $props['content'] . '</h3>';
}

// same as first line after registerBlockType
register_block_type( 'luke-block-exercise/border-box', array(
  'render_callback' => 'borderBoxOutput',
) );


/* To Save Post Meta from your block uncomment
  the code below and adjust the post type and
  meta name values accordingly. If you want to
  allow multiple values (array) per meta remove
  the 'single' property.
*/

/*
function myBlockMeta() {
  register_meta('post', 'color', array('show_in_rest' => true, 'type' => 'string', 'single' => true));
}

add_action('init', 'myBlockMeta');
*/