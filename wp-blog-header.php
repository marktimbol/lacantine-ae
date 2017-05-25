<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( !isset($wp_did_header) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once( dirname(__FILE__) . '/wp-load.php' );

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
$url = $_SERVER['REQUEST_URI'];
if (strpos($url,'/poste/') !== false) {
    $url = str_replace('/poste/','/job/', $_SERVER['REQUEST_URI']);
    header('Location:' . $url);
    exit();
}

