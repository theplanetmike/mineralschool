<?php get_header(); ?>

<div class="main">
  <section class="main-content">
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
</div>

<?php get_footer(); ?>