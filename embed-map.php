<?php
/**
 * Plugin Name: Embed Map
 */

function enqueue_mapbox_gl() {
	wp_enqueue_script(
		'mapbox-gl',
		'https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/1.4.0/mapbox-gl.js'
	);
	wp_enqueue_style(
		'mapbox-gl-style',
		'https://cdnjs.cloudflare.com/ajax/libs/mapbox-gl/1.4.0/mapbox-gl.css'
	);
}

function enqueue_own_scripts() {
	wp_enqueue_script(
		'own-script',
		plugin_dir_url( __FILE__ ) . 'src/script.js',
		['mapbox-gl']
	);
}

add_action( 'wp_enqueue_scripts', 'enqueue_mapbox_gl' );
add_action( 'wp_enqueue_scripts', 'enqueue_own_scripts' );
