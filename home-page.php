<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

get_header();
?>

	<main>

		<div class="home-introduction">

			<?php get_template_part( 'template-parts/home', 'introduction' ); ?>

		</div>

		<div class="home-featured-articles">

			<?php get_template_part( 'template-parts/home', 'featured-articles' ); ?>

		</div>

	</main><!-- #main -->

<?php
get_footer();
