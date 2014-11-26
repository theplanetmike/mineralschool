<!doctype html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); wp_title('|', true, 'left'); if (is_front_page()): ?> | <?php bloginfo('description'); endif; ?></title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
   <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700|Roboto+Condensed:700,400|Playball' rel='stylesheet' type='text/css'>
    <link rel="profile" href="http://gmpg.org/xfn/11">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    
    <div class="header-wrap">
      <header class="header-main">
      	 <h1><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php bloginfo('template_url'); ?>/images/mineralschool-logo.png"alt="<?php bloginfo('name'); ?>" /></a></h1>

        
        <div class="header-utility">
        <aside id="header-widgets">
          <?php if ( is_active_sidebar( 'header-widgets' ) ) : ?>
            <?php dynamic_sidebar( 'header-widgets' ); ?>
          <?php else : ?>

            <!-- We'll need to update this with default content to display if widgets don't load -->

          <?php endif; ?>
        </aside>
          <p class="loginout"><?php wp_loginout(); ?> | <a href="<?php echo esc_url(get_permalink(get_page_by_title('newsletter'))); ?>">Newsletter</a></p>
          <div class="social-links">
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/facebook-logo.png"alt="facebook link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/instagram-logo.png"alt="instagram link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/twitter-logo.png"alt="twitter link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png"alt="linkedin link"/></a>
          </div>
        </div>
      </header>
    </div><!-- end header.header-main -->
    <div class="nav-wrap">
     <div class="menu-main-divider-top">
      <nav class="main-nav">
        <?php wp_nav_menu( array('theme_location' => 'header-menu','menu' => 'Main Header Menu' )); ?>
        <a class="header-donate" href="shunpike.org"><img src="<?php bloginfo('template_url'); ?>/images/donate.jpg" alt="Donate button"></a>
         <div class="menu-main-divider-bottom">
       
       </div> <!--closes menu-main-divider-bottom--> 
      </nav>
     </div><!--closes menu-main-divider-top-->
    </div><!-- end nav-wrap -->
    <!-- END HEADER.PHP FILE -->
    
    
    
