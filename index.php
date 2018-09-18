<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 mt-2">

            <?php if(have_posts()): ?>
	            <?php while(have_posts()): the_post(); ?>
	                <?php get_template_part('content' , get_post_format()); ?>
	            <?php endwhile; ?>
	        <?php else: ?>
	            <?php echo wpautop('Sorry ,No posts'); ?>
            <?php endif; ?>
        </div>
        <div class="col-lg-3 mt-2">
            <?php if(is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar') ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
