<?php
// ADD THIS TO ALL YOUR PHP FILES FOR ADDED SECURITY
if (!defined('ABSPATH'))
	exit; // EXIT IF ACCESSED DIRECTLY.



// PROPER WAY TO ENQUEUE (ADD) SCRIPTS AND STYLES.
function gwdchildtheme_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

 
    // IF YOU HAVE JAVASCRIPTS, UNCOMMENT THE LINE BELOW (REMOVE THE //)

    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/combined-scripts.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gwdchildtheme_scripts' );



// * INCLUDE GOOGLE FONTS: PRECONNECT  */
function gwd_starter_theme_googleFontsPreconnect(){
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" />';
}
add_action('wp_head', 'gwd_starter_theme_googleFontsPreconnect', 10);

/* INCLUDE GOOGLE FONTS: THE FONT ITSELF  */
function gwd_starter_theme_googleFonts(){
	wp_enqueue_style( 'google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap"' );
}
add_action('wp_enqueue_scripts', 'gwd_starter_theme_googleFonts', 11);



// ADD THE MENU SYSTEM
  function register_gwdchild_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'social-menu' => __( 'Social Menu' ),
      )
    );
  }
add_action( 'init', 'register_gwdchild_menus' ); 



// YOU CAN ADD ADDITIONAL WORDPRESS FEATURES TO THE SITE
function gwdchildtheme_init(){

    // See: https://developer.wordpress.org/reference%2Ffunctions%2Fadd_theme_support%2F/
    //      https://wpblogx.com/add_theme_support/


    }
    
    // NOW ADD THE ABOVE FEATURES TO WP
    add_action('after_setup_theme', 'gwdchildtheme_init'); 