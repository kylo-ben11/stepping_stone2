<?php
/**
 * Path to Atomic docs
 */
define( 'ATOMIC', __DIR__ . '/components/' );
/**
 * Path to Atomic organism directory
 */
define( 'ATOMIC_ORGANISM', ATOMIC . 'organisms' );
/**
 * Path to Atomic molecule directory
 */
define( 'ATOMIC_MOLECULES', ATOMIC . 'molecules' );
/**
 * Path to Atomic atom directory
 */
define( 'ATOMIC_ATOM', ATOMIC . 'atoms' );
/**
 * Path to Atomic sidebars directory
 */
define( 'ATOMIC_SIDEBARS', ATOMIC . 'sidebars' );
/**
 * Path to Atomic sidebars directory
 */
define( 'ATOMIC_PAGE', ATOMIC . 'pages' );

function theme_js()
{
	// Register and link scripts:
	//wp_register_script( 'modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js' );
	wp_register_script( 'site', get_template_directory_uri() . '/js/min/site.min.js', array( 'jquery' ),'', true  );
	//wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array( 'jquery' ),'', true );

	//wp_enqueue_script( 'bootstrap' );
//	wp_enqueue_script( 'modernizer' );
  wp_enqueue_script( 'site' );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );

//Register support for custom menu
add_theme_support( 'menus' );

//Register support for widgets
add_theme_support( 'widgets' );


add_theme_support( 'title-tag' );


add_theme_support( 'post-thumbnails' );

//Register Custom Navigation Walker
require_once('dropit_walker.php');

//Remove admin bar from front end
add_filter('show_admin_bar', '__return_false');


/**
 * Give a variable to be accessed globally
 *
 * @param $name The name of the variable (how it will also be "retrieved"
 * @param $value The value to be assigned
 */
if ( !function_exists( 'give' ) ) {
    function give( $name, $value ) {
        $GLOBALS[ $name ] = $value;
        if ( $value === null ) {
            unset( $GLOBALS[ $name ] );
        }
    }
}
/**
 * Receive a value of a variable previously set using give();
 *
 * @param $name The name of the variable to be retrieved
 * @param $default The default value to return if index is not set
 *
 * @return mixed|null returns the value of the variable called, else null if it is not set
 */
if ( !function_exists( 'receive' ) ) {
    function receive( $name, $default = null ) {
        return ( isset( $GLOBALS[ $name ] ) ? $GLOBALS[ $name ] : $default );
    }
}



include( 'customizer/customizer.php' );



add_action( 'admin_bar_menu', 'toolbar_link_to_atomic_docs', 999 );

function toolbar_link_to_atomic_docs( $wp_admin_bar ) {
    $args = array(
        'id'    => 'atomic_docs',
        'title' => 'Atomic Docs',
        'href'  => '/wp-content/themes/jumpoff/atomic-core',
        'meta'  => array(
            'class'  => 'my-toolbar-page',
            'target' => 'atomic-docs',
        ),
    );
    $wp_admin_bar->add_node( $args );
}

