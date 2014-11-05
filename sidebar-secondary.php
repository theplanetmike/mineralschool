<!-- BEGIN SIDEBAR-SECONDARY.PHP -->
<aside id="secondary" class="columns-4">
	<?php if ( is_active_sidebar( 'secondary' ) ) : ?>
		<?php dynamic_sidebar( 'secondary' ); ?>
	<?php else : ?>

		<!-- We'll need to update this with default content to display if widgets don't load -->

	<?php endif; ?>
</aside>
<!-- END SIDEBAR-SECONDARY.PHP -->