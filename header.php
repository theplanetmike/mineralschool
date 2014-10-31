<!doctype html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); wp_title('|', true, 'left'); if (is_front_page()): ?> | <?php bloginfo('description'); endif; ?></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="header-wrap">
      <header class="header-main">
        <h1><a href="<?php echo esc_url(home_url()); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
        <?php get_sidebar( 'header-widgets' ); ?>
      </header>
    </div><!-- end header.header-main -->
    <div class="nav-wrap">
      <nav class="main-nav">
        <?php wp_nav_menu( array( 'menu' => 'Main Header Menu')); ?> 
      </nav>
    </div><!-- end nav.main-nav -->
    