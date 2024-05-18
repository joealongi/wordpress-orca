<?php
/**
 * Template Name: About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

get_header();
?>

	<main>

		<div class="about-introduction">

			<?php get_template_part( 'template-parts/page', 'introduction' ); ?>

		</div>

		<div class="about-experience">

			<?php get_template_part( 'template-parts/page', 'experience' ); ?>

		</div>

	</main><!-- #main -->

<?php
get_footer();
