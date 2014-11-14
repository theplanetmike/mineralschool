    <!-- BEGIN footer.php template -->
    <footer>
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu' => 'Main Footer Menu')); ?> 
      <p>Copyright &#169; <?php the_date(' Y '); ?> <?php bloginfo('name'); ?></p>
      <?php get_sidebar( 'footer-widgets' ); ?>
    </footer>
	<?php wp_footer(); ?>
  </body>
</html>