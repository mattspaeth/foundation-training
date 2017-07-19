<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

add_action( 'woocommerce_after_shop_loop_item_title', 'tutsplus_excerpt_in_product_archives', 40 );
function tutsplus_excerpt_in_product_archives() {
     
    the_excerpt();
     
}

get_header( 'shop' ); ?>

<h1>Store</h1>
<h2>Self-Paced Learning</h2>
<div class="one-fourth first">
  <?php echo do_shortcode('[product id="16234"]'); ?>
</div>
<div class="one-fourth">
  <?php echo do_shortcode('[product id="148"]'); ?>
</div>
<div class="one-fourth">
  <?php echo do_shortcode('[product id="15273"]'); ?>
</div>
<div class="one-fourth">
  <?php echo do_shortcode('[product id="22794"]'); ?>
</div>
<div style="clear: both;"></div>

<h2>In-Person Learning</h2>
<div class="one-half first">
  <?php echo do_shortcode('[product id="7306"]'); ?>
</div>
<div class="one-half">
  <?php echo do_shortcode('[product id="6087"]'); ?>
</div>
<div style="clear: both;"></div>

<h2>Testimonials</h2>
<div class="row flex">

<div class="one-half first">
<div class="video-container">
<iframe src="https://player.vimeo.com/video/218846142?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><h4>Chuck Oese</h4></div>
</div>

<div class="one-half">
<div class="video-container">
<iframe src="https://player.vimeo.com/video/218847484?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><h4>Erin Carson</h4></div>
</div>

<div class="one-half first">
<div class="video-container">
<iframe src="https://player.vimeo.com/video/218850017?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>Janeen Hulbert, DC</div>
</div>

<div class="one-half">
<div class="video-container">
<iframe src="https://player.vimeo.com/video/218852022?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>Laurence Berarducci, MD</div> 
</div>
</div>
<?php get_footer( 'shop' ); ?>
