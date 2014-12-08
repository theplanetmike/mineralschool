<?php get_header(); ?>
<!-- category-residents.php template -->
<div class="main">
<section class="main-content columns-8">
<h1 class="blog-title"><?php single_cat_title(); ?></h1>
<?php
if ( have_posts() ) :
while ( have_posts() ) :
the_post();
get_template_part('content', 'residents');
endwhile; ?>
<div class="nav-previous alignright"><?php next_posts_link( '<<' );
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' Page ' . $paged . ' of ' . $wp_query->max_num_pages; ?></div>
<div class="nav-next alignleft"><?php previous_posts_link( '>>' ); ?></div>
<?php endif;
?>
</section>
<aside id="primary" class="columns-4">
<?php if ( is_active_sidebar( 'primary' ) ) : ?>
<?php dynamic_sidebar( 'primary' ); ?>
<?php else : ?>
<!-- We'll need to update this with default content to display if widgets don't load -->
<?php endif; ?>
</aside>
</div>
<?php get_footer(); ?>