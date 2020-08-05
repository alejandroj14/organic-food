<?php
/**
 * Theme header partial.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyApp
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php my_app_shim_wp_body_open(); ?>

<section class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 header__nav mt-3">
				<div class="pos-f-t">

					<nav class="navbar navbar-light d-flex justify-content-end">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
					</nav>

					<div class="collapse" id="navbarToggleExternalContent">
						<div class="header__content-menu">
							<div class="header__content-logo">
								<a href="<?php echo home_url(); ?>" class="header__content-link">
									<img class="header__content-img" src="<?php echo \MyApp::core()->assets()->getAssetUrl('images/logo.png') ?>" alt="Logo">
								</a>
							</div>
							<?php wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu_class'  => 'navbar-nav ml-auto'
								)
							); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">

			<div class="col-12 header__nav-logo"></div>
			<div class="col-12 header__nav-title"></div>
			<div class="col-12 header__nav-line"></div>
			<div class="col-12 header__nav-description"></div>
			<div class="col-6 header__nav-button-one"></div>
			<div class="col-6 header__nav-button-two"></div>
		</div>
	</div>
</section>
