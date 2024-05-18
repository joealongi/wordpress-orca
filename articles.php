<?php
/**
 * Template Name: Articles Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

get_header();
?>

	<main>

		<div class="articles-introduction">

			<?php get_template_part( 'template-parts/page', 'introduction' ); ?>

		</div>

		<div class="articles-all-articles">

			<?php get_template_part( 'template-parts/page', 'articles' ); ?>

		</div>

	</main><!-- #main -->

<?php
get_footer();