<?php
/**
 * @package VW Startup
 * Setup the WordPress core custom header feature.
 *
 * @uses vw_startup_header_style()
*/
function vw_startup_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vw_startup_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'vw_startup_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'vw_startup_custom_header_setup' );

if ( ! function_exists( 'vw_startup_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vw_startup_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'vw_startup_header_style' );
function vw_startup_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .top-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'vw-startup-basic-style', $custom_css );
	endif;
}
endif; // vw_startup_header_style