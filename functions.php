<?php
// Add this to all your php files for added security

if (!defined('ABSPATH'))
	exit; // Exit if accessed directly.



// Proper way to enqueue (add) scripts and styles.

function gwdchildtheme_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

 
    // If you have javascripts, uncomment the line below (remove the //)

    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/combined-scripts.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gwdchildtheme_scripts' );





// ADD THE MENU SYSTEM

  function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
        'social-menu' => __( 'Social Menu' ),
      )
    );
  }
add_action( 'init', 'register_my_menus' ); 


// Add GOOGLE Fonts

// 1. Include Google Fonts: Add the Preconnect tag

function gwdchild_googleFontsPreconnect(){
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" />';
}
add_action('wp_head', 'gwdchild_googleFontsPreconnect', 10);

// 2. Include the Google Font itself

function  gwdchild_googleFonts(){
    // Change lato on the line below to the name of your chosen font (just to make the function parameter name unique)
    // Paste the URL from Google Fonts after the comma on the line below
	wp_enqueue_style( 'google-fonts-lato', 'https://fonts.googleapis.com/css2?family=Lato&display=swap' );
}
add_action('wp_enqueue_scripts', 'gwdchild_googleFonts', 11);






// YOU CAN ADD ADDITIONAL WORDPRESS FEATURES TO THE SITE


function gwdchildtheme_init(){

    // See: https://developer.wordpress.org/reference%2Ffunctions%2Fadd_theme_support%2F/
    //      https://wpblogx.com/add_theme_support/


    }
    
    // NOW ADD THE ABOVE FEATURES TO WP
    add_action('after_setup_theme', 'gwdchildtheme_init'); 