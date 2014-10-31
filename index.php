<?php get_header(); ?>
<!-- index.php template -->

<div class="main">
  <section class="main-content">
    <h1 class="blog-title"><?php wp_title(false); ?></h1>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
	      the_post();
	      get_template_part('content', get_post_format());
		endwhile;
	endif;
	?>
  </section>
  <?php get_sidebar( 'primary' ); ?>
</div>

<?php get_footer(); ?>