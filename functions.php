<?php
/**
 * @author  Pressbooks (Book Oven Inc.)
 * @license GPL 2.0+
 */

function pressbooks_baseline_theme_setup() {
	// Add theme support for special features here.
add_filter( 'pb_is_shape_shifter_compatible', '__return_true' );
}

add_action( 'after_setup_theme', 'pressbooks_baseline_theme_setup' );
