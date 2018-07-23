<?php
	function add_scipts() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizr.js', array('jquery'), '1.0', false );
		wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-2.1.4.js', '', true, '3.1.x');
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'jqueryMobile', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', array('jquery'), '3.3.4', true );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true );
	}
}
add_action('init', 'add_scipts');

function prefix_add_footer_styles() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css',false,'1.1','all');
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/style.css',false,'1.1','all');
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css',false,'1.1','all');
	wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css?family=Lato:400,300,700,900,300italic,400italic,700italic',false,'1.1','all');
	
};
add_action( 'get_footer', 'prefix_add_footer_styles' );


// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
