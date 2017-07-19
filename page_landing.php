<?php
/**
 * This file adds the Landing template to the Aspire Theme.
 *
 * @author Appfinite
 * @package App
 * @subpackage Customizations
 */

/*
Template Name: Landing
*/

//* Add custom body class to the head
add_filter( 'body_class', 'aspire_add_body_class' );
function aspire_add_body_class( $classes ) {

   $classes[] = 'landing-page';

   return $classes;

}

// Add Post image above post title, single posts only 
//add_action( 'genesis_entry_header', 'custom_before_post_image');
function custom_before_post_image() {

  the_post_thumbnail( 'post-image' );
  //if ( $image = the_post_thumbnail( 'post-image' ) ) {
    //printf( '<div class="post-featured-image" style="background-image: url(%s);">', $image );

    //printf( $image );
  //}
  echo '<span class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';

  echo '</div>';
}


if (has_post_thumbnail()){
  remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
  add_action( 'genesis_entry_header', 'gp_page_header');
/*  function gp_page_header(){
      echo '<div class="image-title" style="background-image: url(';
      the_post_thumbnail_url(); 
      echo ')">';
      genesis_do_post_title();
      echo '<h2>' . genesis_get_custom_field('subhead') . '</h2>';
      echo '</div>';
  }*/
  
    function gp_page_header(){
      echo '<div class="image-title height-100vh center-aligned">';
      the_post_thumbnail();
      genesis_do_post_title();
      echo '<h2>' . genesis_get_custom_field('subhead') . '</h2>';
      echo '</div>';
  }
}

//* Run the Genesis loop
genesis();
