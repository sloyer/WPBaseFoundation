<div id="sidebar-2" class="sidebar">


	<?php if ( is_active_sidebar( 'sidebar-two' ) ) : ?>
	

		<?php dynamic_sidebar( 'sidebar-two' ); ?>
		

	<?php else : ?>

		
		<div class="help">
		
			<p>Please activate some Widgets.</p>
		
		</div>
		

	<?php endif; ?>
	

</div>