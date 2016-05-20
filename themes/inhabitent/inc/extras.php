<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//remove submenus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_init', 'inhabitent_remove_submenus', 102 );

// /*change WordPress logo to custom logo*/
// function inhabitent_login_logo() {
// 	echo '<style type="text/css">
// 	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/logos/inhabitent-logo-text-dark.svg) !important; }
// 	</style>';
// }
// add_action('login_head', 'inhabitent_login_logo');

// custom login for theme
function inhabitent_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/build/css/customlogin.css" />';
}

add_action('login_head', 'inhabitent_custom_login');


// add function that removes "powered by wordpress"
function inhabitent_login_caption(){
	return 'Return to home page';
}
add_filter( 'login_headertitle', 'inhabitent_login_caption');

//change the url linked on the log-in logo to home page instead of WordPress site
function inhabitent_login_url( $url ){
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_url' );
