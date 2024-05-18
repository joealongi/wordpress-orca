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

  <div class="flex-column experience">

    <h2 class="flex-column-item">
      
      <?php echo esc_html( get_field('experience_header') ); ?>
    
    </h2>

    <div class="flex-column-item experience-content">

      <?php the_field('experience_content'); ?>

    </div>

    <div class="flex-column-item">

      <a class="button" href="<?php echo esc_html( get_field('experience_button_link') ); ?>" target="_blank" rel="noreferrer noopener" aria-label="" type="link">

        <?php echo esc_html( get_field('experience_button') ); ?>
        
      </a>

    </div>

  </div>

</section>
