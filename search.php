<?php get_header(); ?>
<!-- archive.php template -->
  <div class="main">
    <section class="main-content columns-8">
      <h1 class="blog-title">Results for : <?php echo get_search_query(); ?></h1>
      <?php
      if ( have_posts() ) :
        while ( have_posts() ) :
          the_post();
          get_template_part('content', get_post_format());
        endwhile; ?>
        <div class="nav-previous alignright"><?php next_posts_link( '<<' );
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; echo ' Page ' . $paged . ' of ' . $wp_query->max_num_pages; ?>
        </div>
        <div class="nav-next alignleft"><?php previous_posts_link( '>>' ); ?></div>
        <?php else : ?>
          <div class="post-container">
            <h2>No results for your term</h2>
            <p><a href="<?php echo home_url('/'); ?>">Return home</a></p>
          </div>
        <?php endif; ?>
    </section>
  <aside id="primary" class="columns-4">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
      <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?> 
      
  <?php endif; ?>
  </aside>
  </div>
<?php get_footer(); ?>