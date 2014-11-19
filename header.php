<!doctype html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); wp_title('|', true, 'left'); if (is_front_page()): ?> | <?php bloginfo('description'); endif; ?></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700,400' rel='stylesheet' type='text/css'>
    <link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="header-wrap">
      <header class="header-main">
      	 <h1><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php bloginfo('template_url'); ?>/images/mineralschool-logo.png"alt="<?php bloginfo('name'); ?>" /></a></h1>
        
        
        <?php get_sidebar( 'header-widgets' ); ?>
        <div class="header-utility">
          <p><?php wp_loginout(); ?> | <a href="<?php echo esc_url(get_permalink(get_page_by_title('newsletter'))); ?>">Newsletter</a></p>
          
        </div>
      </header>
    </div><!-- end header.header-main -->
    <div class="nav-wrap">
      <nav class="main-nav">
        <?php wp_nav_menu( array('theme_location' => 'header-menu','menu' => 'Main Header Menu' )); ?>
        <a class="header-donate" href="shunpike.org"><img src="<?php bloginfo('template_url'); ?>/images/donate.jpg" alt="Donate button"></a>
      </nav>
    </div><!-- end nav.main-nav -->
    <!-- END HEADER.PHP FILE -->