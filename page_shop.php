<?php

/*
Template Name: Shop
*/

//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

genesis();
