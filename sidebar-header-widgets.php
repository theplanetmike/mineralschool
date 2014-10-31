<!-- BEGIN SIDEBAR-HEADER-WIDGETS.PHP -->
<aside id="header-widgets">
	<?php if ( is_active_sidebar( 'header-widgets' ) ) : ?>
		<?php dynamic_sidebar( 'header-widgets' ); ?>
	<?php else : ?>

		<!-- We'll need to update this with default content to display if widgets don't load -->

	<?php endif; ?>
</aside>
<!-- END SIDEBAR-HEADER-WIDGETS.PHP -->