<!-- single.php template -->
<?php get_header(); ?>

<div class="main">
  <section class="main-content">
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
</div>

<?php get_footer(); ?>