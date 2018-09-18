<!doctype html>
<html <?php language_attributes() ?> >
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php bloginfo('name') ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
	<?php wp_head() ?>
</head>
<body <?php body_class() ?> >

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>



<header class="bg-light">
	<div class="container">
		<div class="row py-2">
			<div class="col-lg-9">
				<h1 class="font-weight-bold header-title text-primary d-inline-flex">
					<a href="<?php echo home_url('/') ?>">
						<?php bloginfo('name') ?>
					</a>
				</h1>
				<span class="text-muted"><?php bloginfo('description') ?></span>
			</div>
			<div class="col-lg-3 pr-0 d-flex align-items-center
                    justify-content-lg-end justify-content-md-center
                    justify-content-xs-center">
				<form style="width: 100%" method="get"
				      action="<?php echo esc_url(home_url('/')) ?>">
					<input type="text" name="s" class="form-control raduis-0"
					       placeholder="Search...">
				</form>
			</div>
		</div>
	</div>
</header>

<div class="border-top-3"></div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow mb-5">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<?php
			$args = array(
				'theme_location' => 'primary',
				// bootstrap menu options
				'menu_class' => 'navbar-nav',
				'menu_id'        => 'primary-menu',
				'container'      => false,
				'depth'          => 2,
				'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
				'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
				// end bootstrap menu options
			);
			?>

			<?php wp_nav_menu($args); ?>

		</div>
	</div>

</nav>