<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress Orca
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link async rel="preconnect" href="https://fonts.googleapis.com">
	<link async rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link async href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="orca">

	<header id="masthead" class="site-header">

		<div class="flex-row site-heading">
		
			<div id="site-branding" class="flex-row-item">
				<a class="" href="/" target="_self" rel="noreferrer noopener" aria-label="WordPress Orca Link" type="link">
					<img src="/wp-content/themes/wordpress-orca/images/svg/OrcaLogo.svg" loading="lazy" alt="WordPress Orca Logo" height="50" width="50">
				</a>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation flex-row-item">
				<ul class="flex-row">
					<li class="flex-row-item">
						<a class="" href="/" target="_self" rel="noreferrer noopener" aria-label="Home Navigation Link" type="link">
							Home
						</a>
					</li>
					<li class="flex-row-item">
						<a class="" href="/about/" target="_self" rel="noreferrer noopener" aria-label="Home Navigation Link" type="link">
							About
						</a>
					</li>
					<li class="flex-row-item">
						<a class="" href="/articles/" target="_self" rel="noreferrer noopener" aria-label="Home Navigation Link" type="link">
							Articles
						</a>
					</li>
				</ul>
			</nav><!-- #site-navigation -->

		</div>

	</header><!-- #masthead -->

	