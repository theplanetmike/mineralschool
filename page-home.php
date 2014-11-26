<?php get_header(); ?>
<!-- page-home.php template -->

<div class="main home">
  <div class="home-main-container">
  <section class="main-content columns-8">
    <?php 
      if ( have_posts() ) :
      	while ( have_posts() ) :
            the_post();
            get_template_part('content', 'home');

            if (comments_open() ) {
              comments_template();
            }
      	endwhile;
      endif;
    ?>
  </section>
  <aside id="secondary" class="columns-4">
    <?php if ( is_active_sidebar( 'secondary' ) ) : ?>
      <?php dynamic_sidebar( 'secondary' ); ?>
    <?php else : ?>

      <!-- We'll need to update this with default content to display if widgets don't load -->

    <?php endif; ?>
  </aside>
  </div><!-- end .home-main-container -->
  <aside id="primary-home">
    <?php if ( is_active_sidebar( 'primary-home' ) ) : ?>
      <?php dynamic_sidebar( 'primary-home' ); ?>
    <?php else : ?>

      <!-- We'll need to update this with default content to display if widgets don't load -->

    <?php endif; ?>
  </aside>
</div>

<?php get_footer(); ?>