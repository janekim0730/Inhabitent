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

//change WordPress logo to custom logo
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// add function that removes "powered by wordpress"
add_action('login_head', 'inhabitent_custom_login');

//change the url linked on the log-in logo to home page instead of WordPress site
function inhabitent_login_url( $url ){
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_url' );
