<?php 

// Enqueue the parent styles 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Add additional functions here. 
// Any functions added will be in addition to the parent theme functions
// The functions will not replace the parent theme functions. 



// REMOVE THE // TO USE THE FOLLOWINGS AVAILABLE SCRIPTS
function pure_child_enqueue_scripts() {
// Register some often used Scripts

  // register some of our custom styles
      wp_register_style( 'pure-child', get_stylesheet_uri() . '', array(), '', 'all' );
      //wp_register_style( 'ss-pika', get_template_directory_uri() . '/fonts/symbolset/ss-pika.css', array(), '', 'all' );
      // wp_register_style( 'ss-social', get_template_directory_uri() . '/fonts/ss-social-circle/ss-social-circle.css', array(), '', 'all' );
      //wp_register_style( 'tabscss', get_template_directory_uri() . '/stylesheets/easy-responsive-tabs.css', array(), '', 'all' );

  // enqueue da styles
      wp_enqueue_style('pure-child');
      // wp_enqueue_style('ss-pika');
      // wp_enqueue_style('ss-social');
      // wp_enqueue_style('tabscss');

   // register da scripts that we often use
      
      // wp_register_script( 'stellar', get_template_directory_uri() . '/js/jquery.stellar.js', array(), true,true );
      //wp_register_script( 'selects', get_template_directory_uri() . '/js/jquery.customSelect.min.js', array(), true,true );
      // wp_register_script( 'tabs', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array(), true,true );
 
   // enqueue da scripts
      // wp_enqueue_script( 'stellar' );
      // wp_enqueue_script( 'slides' );
      // wp_enqueue_script( 'selects' );
      // wp_enqueue_script( 'tabs' );

}

add_action('wp_enqueue_scripts', 'pure_child_enqueue_scripts');


?>