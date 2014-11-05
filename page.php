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
  <?php get_sidebar( 'primary' ); ?>
</div>

<?php get_footer(); ?>