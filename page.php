<?php get_header(); ?>
<!-- page.php template -->

<div class="main">
  <section class="main-content columns-8">
    <?php 
      if ( have_posts() ) :
      	while ( have_posts() ) :
            the_post();
            get_template_part('content', 'page');

            if (comments_open() ) {
              comments_template();
            }
      	endwhile;
      endif;
    ?>
  </section>

  <aside id="primary" class="columns-4">
    <?php if ( is_active_sidebar( 'page' ) ) : ?>
      <?php dynamic_sidebar( 'page' ); ?>
    <?php else : ?>

      <!-- We'll need to update this with default content to display if widgets don't load -->

    <?php endif; ?>
  </aside>

</div>

<?php get_footer(); ?>