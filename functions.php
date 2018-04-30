<?php
/**
 * Twenty Fifteen functions and definitions
 *
 */





/**
 * Navigation menus
 *
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );



/**
 * Remove prepend text fro the_archive_title
 *
 */
add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = get_the_author();

        }

    return $title;

});


