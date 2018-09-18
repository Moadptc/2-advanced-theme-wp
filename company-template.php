<?php

/*
    Template Name: Company Layout
*/

?>

<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-9 mt-2">

			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="page shadow p-3">
						<h2><?php the_title() ?></h2>
						<p class="phone bg-dark">Call Us : 156-65478-6987</p>
						<?php the_content() ?>
					</article>
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
