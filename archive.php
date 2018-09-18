<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-9 shadow mt-2 pt-3">
				<h1 class="page-header pb-3">
					<?php
					if(is_category()){
						single_cat_title();
					} else if(is_author()){
						the_post();
						echo 'Archives By Author: ' .get_the_author();
						rewind_posts();
					} else if(is_tag()){
						single_tag_title();
					} else if(is_day()){
						echo 'Archives By Day: ' .get_the_date();
					} else if(is_month()){
						echo 'Archives By Month: ' .get_the_date('F Y');
					} else if(is_year()){
						echo 'Archives By Year: ' .get_the_date('Y');
					} else {
						echo 'Archives';
					}
					?>
				</h1>

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