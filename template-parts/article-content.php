<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<div class="flex-column entry-header-singleton">

			<span class="flex-column-item alt-article-lead">

			    <?php $the_category = get_the_category(); if ( ! empty( $the_category ) ) {echo esc_html( $the_category[0]->name ); }; ?>

			</span>

			<h1 class="flex-column-item">
				
				<?php the_title(); ?>

			</h1>

			<span class="flex-column-item  alt-article-date">

				<?php echo get_the_date(); ?>

			</span>

		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wordpress-orca' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-orca' ),
				'after'  => '</div>',
			)
		);
		?>
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
