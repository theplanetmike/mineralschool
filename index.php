<?php get_header(); ?>

<div class="main">
  <section class="main-content">
    <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
      the_post();
      get_template_part('content', get_post_format());
	}
}
?>
  </section>
</div>

<?php get_footer(); ?>