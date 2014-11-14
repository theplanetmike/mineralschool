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
  <?php get_sidebar( 'primary' ); ?>
</div>

<?php get_footer(); ?>