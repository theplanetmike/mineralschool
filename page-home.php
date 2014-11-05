<?php get_header(); ?>
<!-- page-home.php template -->

<div class="main home">
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
  <?php get_sidebar( 'secondary' ); ?>
  <?php get_sidebar( 'primary-home' ); ?>
</div>

<?php get_footer(); ?>