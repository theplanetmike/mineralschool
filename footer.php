    <!-- BEGIN footer.php template -->
    <div class="footer-wrap">
    <footer>
      <div class="footer-left">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu' => 'Main Footer Menu')); ?> 
      <p>Copyright &#169; <?php the_date(' Y '); ?> <?php bloginfo('name'); ?></p>
      </div>
      <?php get_sidebar( 'footer-widgets' ); ?>
    </footer>
    </div>
	<?php wp_footer(); ?>
  </body>
</html>