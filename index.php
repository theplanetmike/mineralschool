<?php get_header(); ?>
<!-- index.php template -->

<div class="main">
  <section class="main-content columns-8">
    <h1 class="blog-title"><?php wp_title(false); ?></h1>
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
	      the_post();
	      get_template_part('content', get_post_format());
		endwhile; ?>
        <div class="nav-previous alignright"><?php next_posts_link( '<<' );
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' Page ' . $paged . ' of ' . $wp_query->max_num_pages; ?></div>
<div class="nav-next alignleft"><?php previous_posts_link( '>>' ); ?></div>
	<?php endif;
	?>
  </section>
  <?php get_sidebar( 'primary' ); ?>
</div>

<?php get_footer(); ?>