<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress Orca
 */

get_header();
?>

	<main>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/article-content', get_post_type() ); ?>

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>

			<p id="user-focused-error">

				No article available

			</p>

		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
