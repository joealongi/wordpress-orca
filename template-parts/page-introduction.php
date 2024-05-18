<?php
/**
 * Template part for displaying the introduction in about-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

?>

<section>

  <div class="flex-column introduction">

    <h1 class="flex-column-item">
        
      <?php echo esc_html( get_field('introduction_header') ); ?>
      
    </h1>

    <div class="flex-column-item introduction-content">

      <?php the_field('introduction_content'); ?>

    </div>

    <div class="flex-column-item">

      <a class="button" href="<?php echo esc_html( get_field('introduction_button_link') ); ?>"  target="_self" rel="noreferrer noopener" aria-label="Page Introduction Link" type="link">
          
        <?php echo esc_html( get_field('introduction_button') ); ?>
        
      </a>

    </div>

  </div>

</section>
