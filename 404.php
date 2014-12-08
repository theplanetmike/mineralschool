<?php get_header(); ?>
<!-- archive.php template -->
  <div class="main">
    <section class="main-content columns-8">
      <div class="post-container">
        <h2>404: page not found</h2>
        <p><a href="<?php echo home_url('/'); ?>">Return home</a></p>
      </div>
    </section>
  <aside id="primary" class="columns-4">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
      <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?> 
      
  <?php endif; ?>
  </aside>
  </div>
<?php get_footer(); ?>