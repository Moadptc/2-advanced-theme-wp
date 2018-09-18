<?php if(is_search()): ?>

	<div class="archive-post">
		<h4>
			<a href="<?php the_permalink() ?>" >
				<?php the_title() ?>
			</a>
		</h4>
		<p>Posted On <?php the_date() ?> <?php the_time() ?></p>
	</div>
	<hr class="py-3">

<?php elseif(is_archive()): ?>

	<div class="archive-post">
		<h4>
			<a href="<?php the_permalink() ?>" >
				<?php the_title() ?>
			</a>
		</h4>
		<p>Posted On <?php the_date() ?> <?php the_time() ?></p>
		<p class="text-muted">
			<?php the_excerpt() ?>
		</p>
	</div>
	<hr class="py-3">

<?php else: ?>

	<article class="post shadow p-3 mb-4">
		<h2><?php the_title() ?></h2>
		<p class="meta text-muted">
			Created By
			<a href="<?php
			echo get_author_posts_url(get_the_author_meta('ID'))
			?>"> <?php the_author() ?>
			</a> On <?php the_date(); ?> <?php the_time(); ?> |
			Posted in :
			<?php
			$categories = get_the_category();
			$seperator = ", ";
			$output = "";

			if($categories)
			{
				foreach ($categories as $category)
				{
					$output .= '<a href="'.
					           get_category_link($category->term_id)
					           .'">' . $category->cat_name .
					           '</a>' . $seperator;
				}
			}

			echo trim($output , $seperator);

			?>
		</p>
		<?php if (has_post_thumbnail()): ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail() ?>
			</div>
		<?php endif; ?>
		<p>

		<?php if (is_single()): ?>
			<?php the_content(); ?>
		<?php else: ?>
			<?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>"
               class="btn btn-primary">
                Read More
            </a>
		<?php endif; ?>

		</p>
	</article>

<?php endif; ?>

