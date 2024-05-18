<?php
/**
 * Template part for displaying featured articles in home-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

?>

<section>

  <div class="flex-column all-articles">

    <h2 class="flex-column-item">
      
      <?php echo esc_html( get_field('all_articles_header') ); ?>
    
    </h2>

    <?php 

      $query = new WP_Query( array(
          'post_status' => 'publish'
      ));

    ?>

    <?php if ( $query->have_posts() ) : ?>

      <ul class="flex-row">
        
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

          <li class="flex-row-item">

            <a class="" href="<?php the_permalink(); ?>" target="_self" rel="noreferrer noopener" aria-label="All Article Link" type="link">

              <span class="alt-header">
                
                <?php the_title(); ?>
              
              </span>
              
              <p>

                <?php echo wp_trim_words( get_the_excerpt(), 26, '' ); ?>
              
              </p>

            </a>

          </li>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

      </ul>

    <?php else : ?>

        <p id="user-focused-error">

          <?php echo esc_html( get_field('all_articles_error') ); ?>

        </p>

    <?php endif; ?>

  </div>

</section>
