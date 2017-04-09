<?php
/* THEME DEFAULTS */
add_theme_support( 'post-thumbnails' );

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
?>