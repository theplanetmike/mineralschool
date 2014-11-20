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
    <?php get_sidebar( 'secondary' ); ?>
  </div><!-- end .home-main-container -->
  <?php get_sidebar( 'primary-home' ); ?>
</div>

<?php get_footer(); ?>