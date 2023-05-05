<?php
/*
Plugin Name:  Guesmi Ahmed Theme Customizer 
Plugin URI:   https://github.com/ahmedguesmi/customwptheme
Description:  Theme Customizer for Custom function,css,js
Version:      1.1.1
Author:       ahmedguesmi
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Domain Path:  /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


define( 'CH_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );   // returns like /home/user/site/
define( 'CH_PLUGIN_URL', plugin_dir_url( __FILE__ ) );	//	returns like https://example.com/wp-content/yourplugin/



/**
 * [ch_theme_customizer_assets_enqueue description]
 * @return [type] [CH Assets enqueue]
 */



function ch_theme_customizer_assets_enqueue(){

/**
 * Enquee All the Css For theme
 * [Add your style here with wp_enqueue_style  CH_PLUGIN_URL withh return current plugin url withh http or https  ]
 */


wp_enqueue_style( 'ch_tc_style', CH_PLUGIN_URL . 'assets/css/style.css', array(), '1.1', 'all');


/**
 * Enquee All The scripts for Theme
 * [Add your scripts here with wp_enqueue_script  CH_PLUGIN_URL withh return current plugin url withh http or https  
 * @arg 1 = handle
 * @arg 2 = url
 * @arg 3 = Dependency for Scripts like jquery 
 *      	(Find your dependency handel here https://developer.wordpress.org/reference/functions/wp_enqueue_script/)
 * @arg 4 = version
 * @arg 5 = boolean (in footer or not -- If true in footer)
 */

wp_enqueue_script( 'ch_tc_scripts', CH_PLUGIN_URL . 'assets/js/script.js', array('jquery'), '1.0.0', true );

}


add_action( 'wp_enqueue_scripts', 'ch_theme_customizer_assets_enqueue' );



/**
 * Require Custom Functions
 */


require_once (CH_PLUGIN_PATH .'inc/custom-function.php');
