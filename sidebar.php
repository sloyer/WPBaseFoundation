<div id="sidebar-1" class="sidebar">


	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
	

		<?php dynamic_sidebar( 'sidebar1' ); ?>
		

	<?php else : ?>

		
		<div class="help">
		
			<p>Please activate some Widgets.</p>
		
		</div>
		

	<?php endif; ?>
	

</div>