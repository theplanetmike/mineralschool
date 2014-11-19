<!-- BEGIN SIDEBAR-PRIMARY-HOME.PHP -->
<aside id="primary-home">
	<?php if ( is_active_sidebar( 'primary-home' ) ) : ?>
		<?php dynamic_sidebar( 'primary-home' ); ?>
	<?php else : ?>

		<!-- We'll need to update this with default content to display if widgets don't load -->

	<?php endif; ?>
</aside>
<!-- END SIDEBAR-PRIMARY-HOME.PHP -->