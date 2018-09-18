<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<?php if(is_active_sidebar('showcase')) : ?>
					<?php dynamic_sidebar('showcase') ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12 mt-2">

				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<article class="page shadow p-3">
							<?php if(page_is_parent() || $post->post_parent > 0): ?>
								<nav class="sub-nav float-right">
									<ul>
										<li class="parent-link">
											<a href="<?php echo get_the_permalink(get_top_parent()) ?>">
												<?php echo get_the_title(get_top_parent()) ?>
											</a>
										</li>
										<?php

										$args = array(
											'child_of' => get_top_parent(),
											'title_li' => ''
										);

										?>
										<?php wp_list_pages($args) ?>
									</ul>
								</nav>
								<div class="clearfix"></div>
							<?php endif; ?>

							<h2><?php the_title() ?></h2>
							<?php the_content() ?>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
					<?php echo wpautop('Sorry ,No posts'); ?>
				<?php endif; ?>

			</div>
		</div>

		<div class="row mt-5 widget">
			<div class="col-md-4">
				<?php if(is_active_sidebar('box1')) : ?>
					<?php dynamic_sidebar('box1') ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php if(is_active_sidebar('box2')) : ?>
					<?php dynamic_sidebar('box2') ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<?php if(is_active_sidebar('box3')) : ?>
					<?php dynamic_sidebar('box3') ?>
				<?php endif; ?>
			</div>
		</div>

	</div> <!-- end container  -->

<?php get_footer(); ?>