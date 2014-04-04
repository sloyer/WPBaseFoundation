<?php get_header(); ?>

		
		<?php if (is_category()) { ?>
		
			<h1 class="archive-title">
				<span><?php _e('Posts Categorized:'); ?></span> <?php single_cat_title(); ?>
			</h1>
			
		<?php } elseif (is_tag()) { ?> 
		
			<h1 class="archive-title">
				<span><?php _e('Posts Tagged:'); ?></span> <?php single_tag_title(); ?>
			</h1>
			
		<?php } elseif (is_author()) { ?>
		
			<h1 class="archive-title">
				<span><?php _e('Posts By:'); ?></span> <?php get_the_author_meta('display_name'); ?>
			</h1>
			
		<?php } elseif (is_day()) { ?>
		
			<h1 class="archive-title">
				<span><?php _e('Daily Archives:'); ?></span> <?php the_time('l, F j, Y'); ?>
			</h1>
			
		<?php } elseif (is_month()) { ?>
		
		    <h1 class="archive-title">
		    	<span><?php _e('Monthly Archives:'); ?>:</span> <?php the_time('F Y'); ?>
		    </h1>
		    
		<?php } elseif (is_year()) { ?>
		
		    <h1 class="archive-title">
		    	<span><?php _e('Yearly Archives:'); ?>:</span> <?php the_time('Y'); ?>
		    </h1>
		    
		<?php } else { ?>
		
			<h1 class="page-title"><?php the_title(); ?></h1>
			
		<?php } ?>
		


		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		
			<?php get_template_part('entry'); ?>
		
		
		<?php endwhile; ?>	
		
		
		
		
		<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
		
		
			<div class="page-navi">	
				<?php page_navi(); ?>
			</div>
		
			
		<?php } else { // if it is disabled, display regular wp prev & next links ?>
		
			<div class="page-navi">
			
				<ul>
				
					<li class="next-link"><?php next_posts_link(__('&laquo; Older Entries')) ?></li>
					<li class="prev-link"><?php previous_posts_link(__('Newer Entries &raquo;')) ?></li>
					
				</ul>
				
			</div>
			
		<?php } ?>		
		
		
		<?php 
			// not found (invalid post/page id, not at 404)
		else : ?>
		
		
			<div class="post">

		    	<h2>Not Found</h2>
		    	<p>Sorry, but the requested resource was not found on this site.</p>

			</div>
			
		
<?php endif; ?>
	
	
<?php get_sidebar(); // Sidebar One will Render ?>
	

<?php get_footer(); ?>