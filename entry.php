<div class="row">
  <div class="front-content">
    <h2 class="title">Entrys</h2>
    <?php
     $postslist = get_posts('numberposts=3&order=DESC&orderby=date');
     foreach ($postslist as $post) :
	setup_postdata($post);
     ?>
     <div class="entry">
	 <span class="post-thumbnail"><?php the_post_thumbnail('thumbnail');?></span>
	 <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	 <h3 class="post-date"> <?php the_time(get_option('date_format')) ?></h3>
	 <?php the_excerpt(); ?>
    </div>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
  </div>
</div>

