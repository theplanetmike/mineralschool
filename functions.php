<?php

//menu function to register menu, can be used to register multiple menus if needed later

//Register custom menus
function register_my_menus() {
	register_nav_menus(
		array( 
		  'main-menu' => __( 'Main Header Menu' ), 		  
		  'footer-menu' => __( 'Footer Menu' )
		)	
	);

  add_action( 'init', 'register_my_menus' );

}

/* Add custom menus to Dashboard > Menus, if you have menus registered. */       
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Header Menu',
		  'footer-menu' => 'Footer Menu'
		)
	);
}

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary' ),
			'description' => __( 'The main widgetized area.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'secondary' sidebar. */
	register_sidebar(
		array(
			'id' => 'secondary',
			'name' => __( 'Secondary' ),
			'description' => __( 'The extra widgetized area on the home page.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'header' sidebar. */
	register_sidebar(
		array(
			'id' => 'header-widgets',
			'name' => __( 'Header-Widgets' ),
			'description' => __( 'Widgetized space in the header.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="header-widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Register the 'footer' sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-widgets',
			'name' => __( 'Footer-Widgets' ),
			'description' => __( 'Widgetized space in the footer.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="footer-widget-title">',
			'after_title' => '</h3>'
		)
	);
}

//adding filter to modify trailing elipses at end of the_excerpt() tag
function changed_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'changed_excerpt_more');

// function for removing paragraph tags from wrapping around inserted images in posts. snippet credit http://css-tricks.com/snippets/wordpress/remove-paragraph-tags-from-around-images/
function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
