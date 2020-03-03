<?php 
/*
Plugin Name: ALT Lab Exclude Categories
Plugin URI:  https://github.com/
Description: Exclude Categories from Recent Posts listing
Version:     1.01
Author:      ALT Lab (Matt Roberts)
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_filter('widget_posts_args','modify_widget');

function modify_widget() {
//change your category ID number below
$r = array( 'category__not_in' => '158');
return $r;
}


//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}