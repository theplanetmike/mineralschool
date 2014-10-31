<?php get_header(); ?>
<!-- index.php template -->

<div class="main">
  <section class="main-content">
    <h1 class="blog-title"><?php wp_title(false); ?></h1>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
	      the_post();
	  	  //this doesn't work because get_post_format() comes up empty
	      //get_template_part('content', get_post_format());
	      
	  	  //this does work but we have no content-post, but do we want one
	      //get_template_part('content', get_post_type());
		endwhile;
	endif;
	?>
  </section>
  <?php get_sidebar( 'primary' ); ?>
</div>

<?php get_footer(); ?>