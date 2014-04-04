<?php get_header(); ?>

    
<?php get_header(); ?>

<div class="row">
    <div class="content">
        <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail('featured');
        }             
        ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

        <?php the_content(); ?>

        <?php endwhile; endif; ?>       
    </div>
</div>  

<div class="row">
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?> 
