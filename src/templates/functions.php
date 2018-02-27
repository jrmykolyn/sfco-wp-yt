<?php
/* THEME DEFAULTS */
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );

/* CONFIG */
require_once( dirname( __FILE__ ) . '/config.php' );

/* ADMIN */
require_once( dirname( __FILE__ ) . '/admin/appearance.php' );

/* THEME SCRIPTS */
if ( !is_admin() ) {
	add_action( "wp_enqueue_scripts", "enqueue_jquery", 11 ) ;

	function enqueue_jquery() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js', '', '', false );
		wp_enqueue_script( 'jquery' );
	}
}

wp_register_script( 'main', get_stylesheet_directory_uri() . '/js/main.min.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'main' );

/* MENUS */
add_action( 'init', 'register_menus' );
add_filter( 'nav_menu_link_attributes', 'set_tabindex_on_drawer_nav_items', 10, 3 );

/**
* Function ensures that the 'drawer nav' menu items are unfocusable by default.
*/
function set_tabindex_on_drawer_nav_items( $attrs, $item, $args ) {
	if ( $args->menu_class === 'drawer-menu' ) {
		$attrs[ 'tabindex' ] = -1;
	}

	return $attrs;
}

/**
* Function adds theme-specific menus to WP admin.
*/
function register_menus() {
	register_nav_menus(
		array(
			'primary' => __( 'Primary' ),
			'secondary' => __( 'Secondary' ),
			'socials' => __( 'Socials '),
		)
	);
}

/* PLUGINS AND DEPENDENCIES */
add_action( "admin_init", "handle_admin_init" );

/**
* Function is a wrapper around all actions/events that should be executed within the admin area.
*/
function handle_admin_init() {
	if ( is_plugin_inactive( 'advanced-custom-fields/acf.php' ) ) {
		add_action( "admin_notices", "add_acf_plugin_notice" );
	}
}

/**
* Used to quickly create new 'missing plugin notice' elements of a given type (eg. 'error', etc.).
*
* @param {String} `$pluginName` - The name of the missing plugin.
* @param {String} `$pluginType` - The type of notice to create. Default value is 'error'.
*/
function add_plugin_notice( $pluginName, $pluginType="error") {
	echo "<div class=\"notice " . $pluginType . "\">";
	echo "<p>Whoops! Looks like the following plugin is missing or inactive: <strong>" . $pluginName . "</strong>.</p>";
	echo "</div>";
}

/**
* Function adds a 'missing plugin notice' for: Advanced Custom Fields.
*/
function add_acf_plugin_notice() {
	add_plugin_notice( 'Advanced Custom Fields' );
}

/* MISC. */
function get_max_featured_posts() {
	global $CONFIG;

	return $CONFIG[ 'defaults' ][ 'max_featured_posts' ];
}

function get_first_post_category( $id ) {
	$category = get_the_category( $id );

	if ( !$category || !$category[ 0 ] || $category[ 0 ]->name == 'Uncategorized' ) {
		return null;
	} else {
		return $category[ 0 ];
	}
}
?>
