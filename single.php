<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-9 mt-2">
				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
						<?php get_template_part('content' , get_post_format()); ?>
					<?php endwhile; ?>
				<?php else: ?>
					<?php echo wpautop('Sorry ,No post'); ?>
				<?php endif; ?>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link"
                           id="profile-tab" data-toggle="tab"
                           href="#profile" role="tab" aria-controls="profile"
                           aria-selected="true">Wordpress Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active"
                           id="home-tab" data-toggle="tab"
                           href="#home" role="tab" aria-controls="home"
                           aria-selected="false">Facebook Comments</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active"
                         id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="fb-comments"
                             data-href="https://www.facebook.com/TestPage-2068330863477027/"
                             data-numposts="5">

                        </div>

                        <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="true" data-auto-logout-link="false" data-use-continue-as="true"></div>

                    </div>
                    <div class="tab-pane fade" id="profile"
                         role="tabpanel" aria-labelledby="profile-tab">
                        <div class="comments-form mt-5">
		                    <?php comments_template() ?>
                        </div>
                    </div>
                </div>


			</div>
			<div class="col-lg-3 mt-2 mb-3">
				<?php if(is_active_sidebar('sidebar')) : ?>
					<?php dynamic_sidebar('sidebar') ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>