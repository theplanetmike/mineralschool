    <!-- BEGIN footer.php template -->
    <div class="footer-wrap">
    <footer>
      <div class="footer-left">
      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu' => 'Main Footer Menu')); ?>
      <p><a href="javascript:;">Privacy Policy</a> <a href="javascript:;">Terms of use</a></p>
      <p>Copyright &#169; <?php the_date(' Y '); ?> <?php bloginfo('name'); ?></p>
      </div>
      <div class="footer-right">
      <aside id="footer-widgets">
        <?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
          <?php dynamic_sidebar( 'footer-widgets' ); ?>
        <?php else : ?>

          <!-- We'll need to update this with default content to display if widgets don't load -->

        <?php endif; ?>
      </aside>
        <div class="social-links">
            <a href="jhttps://www.facebook.com/MineralSchool"target="blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook-logo.png"alt="facebook link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/instagram-logo.png"alt="instagram link"/></a>
            <a href="https://twitter.com/MineralSchool" target="blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter-logo.png"alt="twitter link"/></a>
            <a href="javascript:;"><img src="<?php bloginfo('template_url'); ?>/images/linkedin.png"alt="linkedin link"/></a>
          </div>
         <p class="sponsor"<?php bloginfo('template_url'); ?>>SPONSORED BY:</p>
         <div class ="shunpike-logo">
         	<a href="http://www.shunpike.org/" target="blank"><img src ="<?php bloginfo('template_url'); ?>/images/shunpike-logo.jpg"alt="Shunpike logo"/></a>
          </div>
      </div>
    </footer>
    </div>
	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/functions.js"></script>
  </body>
</html>