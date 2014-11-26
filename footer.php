    <!-- BEGIN footer.php template -->
    <div class="footer-wrap">
    <footer>
      <div class="footer-left">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu' => 'Main Footer Menu')); ?>
      <p><a href="javascript:;">Privacy Policy</a> <a href="javascript:;">Terms of use</a></p>
      <p>Copyright &#169; <?php the_date(' Y '); ?> <?php bloginfo('name'); ?></p>
      </div>
      <div class="footer-right">
        <?php get_sidebar( 'footer-widgets' ); ?>
        <div class="social-links">
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/facebook-logo.png"alt="facebook link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/instagram-logo.png"alt="instagram link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/twitter-logo.png"alt="twitter link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png"alt="linkedin link"/></a>
          </div>
      </div>
    </footer>
    </div>
	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
  </body>
</html>