<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress Orca
 */

get_header();
?>

	<main>

		<?php get_template_part( 'template-parts/notfound', 'content' ); ?>

	</main><!-- #main -->

<?php
get_footer();
