    <!-- BEGIN footer.php template -->
    <footer>
      <?php wp_nav_menu( array( 'menu' => 'Main Header Menu')); ?> 
      <p>Copyright &#169; 2014 Mineral School</p>
      <?php get_sidebar( 'footer-widgets' ); ?>
    </footer>
	<?php wp_footer(); ?>
  </body>
</html>