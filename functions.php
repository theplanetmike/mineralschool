<?php

//menu function to register menu, can be used to register multiple menus if needed later
function register_menu() {
  register_nav_menu('main-menu',__( 'Main Header Menu' ));
}
add_action( 'init', 'register_menu' );


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