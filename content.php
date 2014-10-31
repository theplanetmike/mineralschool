<div class="post-container">
<<<<<<< HEAD
<?php if (is_single() ) :
  the_title('<h2>', '</h2>' );
else:
  the_title('<h2><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' );
endif; ?>
  <div class="post-meta">
    <p>Posted <?php the_date(); ?> - <?php the_time('g:i a'); ?> by <?php the_author_posts_link(); ?> | Category: <?php the_category(', '); ?></p>
  </div>
<?php if (is_single() ) :
  the_content();
else:
the_excerpt();
?>
  <p class="read-more"><a href="<?php esc_url( the_permalink() ); ?>">Read More</a></p>
<?php
endif;  
?>
</div><!-- end .post-container -->
=======
  	<!-- content.php template -->
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
</div>
<!-- end .post-container -->
>>>>>>> 5a68f02f7174ae0c7d121a0abf0961537698830c
