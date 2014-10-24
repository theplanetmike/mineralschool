<aside id="footer-widgets">

	<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>

		<?php dynamic_sidebar( 'footer-widgets' ); ?>

	<?php else : ?>

		<!-- We'll need to update this with default content to display if widgets don't load -->

	<?php endif; ?>

</aside>