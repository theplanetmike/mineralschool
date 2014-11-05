<!-- BEGIN SIDEBAR-PRIMARY.PHP -->
<aside id="primary" class="columns-4">
	<?php if ( is_active_sidebar( 'primary' ) ) : ?>
		<?php dynamic_sidebar( 'primary' ); ?>
	<?php else : ?>

		<!-- We'll need to update this with default content to display if widgets don't load -->

	<?php endif; ?>
</aside>
<!-- END SIDEBAR-PRIMARY.PHP -->