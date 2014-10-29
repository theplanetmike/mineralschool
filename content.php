<div class="post-container">
  <?php the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
  <p>Author: <?php the_author(); ?> Date: <?php the_date(); ?></p>
  <p>Categories: <?php the_category(', '); ?></p>
   <?php the_excerpt(); ?> 
</div>