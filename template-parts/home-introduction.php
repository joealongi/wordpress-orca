<?php
/**
 * Template part for displaying the home introduction in home-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

?>

<section>

  <div class="flex-column introduction">

    <h1 class="flex-column-item">
        
      <?php echo esc_html( get_field('introduction_extra_header') ); ?>
      
    </h1>

    <h3 class="flex-column-item">
        
      <?php echo esc_html( get_field('introduction_extra_subheader') ); ?>
      
    </h3>

    <div class="flex-column-item introduction-content">

      <?php the_field('introduction_extra_content'); ?>

    </div>

    <div class="flex-column-item">

      <a class="button" href="<?php echo esc_html( get_field('introduction_extra_button_link') ); ?>"  target="_self" rel="noreferrer noopener" aria-label="" type="link">

        <?php echo esc_html( get_field('introduction_extra_button') ); ?>

      </a>

    </div>

  </div>

</section>
