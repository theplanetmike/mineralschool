<?php

//menu function to register menu, can be used to register multiple menus if needed later
function register_menu() {
  register_nav_menu('main-menu',__( 'Main Header Menu' ));
}
add_action( 'init', 'register_menu' );