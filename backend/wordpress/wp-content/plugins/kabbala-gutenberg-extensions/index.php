<?php
/**
 * Plugin Name: Kabbala Gutenberg Extensions
 * Author: Denis Hudyria
 * Version: 1.0.0
 */

function loadBlocks() {
	wp_enqueue_script(
		'warning-block',
		plugin_dir_url(__FILE__) . '/js/warning-block.js',
		array('wp-blocks','wp-editor'),
		true
	);
}

add_action('enqueue_block_editor_assets', 'loadBlocks');