<div class="post-container">
  <?php if (is_single() || is_page() ) :
  the_title('<h2>', '</h2>' );
  else: 
  the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
  endif; ?>
  <p>Author: <?php the_author(); ?> Date: <?php the_date(); ?></p>
  <p>Categories: <?php the_category(', '); ?></p>
  <?php the_content(); ?>
</div>
