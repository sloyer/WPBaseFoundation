<div id="sidebar-3" class="sidebar">


	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	

		<?php dynamic_sidebar( 'sidebar-3' ); ?>
		

	<?php else : ?>

		
		<div class="help">
		
			<p>Please activate some Widgets.</p>
		
		</div>
		

	<?php endif; ?>
	

</div>