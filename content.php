<div class="post-container">
<?php if (is_single() :
  the_title('<h2>', '</h2>' );
else:
  the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
endif; ?>
  <div class="post-meta">
    <p>Author: <?php the_author(); ?> Date: <?php the_date(); ?></p>
    <p>Categories: <?php the_category(', '); ?></p>
  </div>
<?php if (is_single() ) :
  the_content();
else:
the_excerpt();
endif;  
?>
</div><!-- end .post-container -->