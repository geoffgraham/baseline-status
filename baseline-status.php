<?php
/**
 * Plugin Name:       Baseline Status
 * Plugin URI:        https://css-tricks.com
 * Description:       Displays current Baseline availability for web platform features.
 * Requires at least: 6.6
 * Requires PHP:      7.2
 * Version:           0.1.0
 * Author:            geoffgraham
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       baseline-status
 *
 * @package CssTricks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function css_tricks_baseline_status_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'css_tricks_baseline_status_block_init' );

function baseline_status_widget_enqueue_block_assets() {
	wp_enqueue_script(
			'baseline-status-widget-script',
			plugins_url( 'baseline-status.min.js', __FILE__ ),
			array(),
			'1.0.4',
			true
	);
}
add_action( 'enqueue_block_assets', 'baseline_status_widget_enqueue_block_assets' );

function add_type_attribute($tag, $handle, $src) {
	// Add the 'type="module"' attribute to the specific script
	if ( 'baseline-status-widget-script' === $handle ) {
			$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
	}
	return $tag;
}
add_filter( 'script_loader_tag', 'add_type_attribute', 10, 3 );

function baseline_status_widget_enqueue_block_editor_assets() {
	wp_enqueue_script(
			'baseline-status-widget-block',
			plugins_url( 'block.js', __FILE__ ),
			array( 'wp-blocks', 'wp-element', 'wp-editor' ),
			false,
	);

	wp_enqueue_style(
			'baseline-status-widget-block-editor',
			plugins_url( 'style.css', __FILE__ ),
			array( 'wp-edit-blocks' ),
			false,
	);
}
add_action( 'enqueue_block_editor_assets', 'baseline_status_widget_enqueue_block_editor_assets' );
