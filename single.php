<?php get_header(); ?>
<!-- single.php template -->

<div class="main">
  <section class="main-content columns-8">
    <h1 class="blog-title">Blog</h1>
    <?php    
      if ( have_posts() ) :
      	while ( have_posts() ) :
            the_post();
            get_template_part('content', get_post_format());
            if (comments_open() ) {
              comments_template();
            }
      	endwhile;
      endif;
    ?>
  </section>
  <aside id="primary" class="columns-4">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
      <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>

      <!-- We'll need to update this with default content to display if widgets don't load -->

    <?php endif; ?>
  </aside>
</div>

<?php get_footer(); ?>