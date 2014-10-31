<div class="comments">
  <!-- comments.php template -->
  <?php if (have_comments() ) : ?>
  <div class="single-comment">
  <?php wp_list_comments( array( "style" => "div",) ); ?>
  </div>
  
  <?php if (! comments_open() ) : ?>
  <p>Comments are closed at this time.</p>
  <?php endif; //!comments_open() ?>
  
  <?php endif; //hav_comments() ?>
  
  <?php comment_form(); ?>
</div>