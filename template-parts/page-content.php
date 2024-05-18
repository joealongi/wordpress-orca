<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress Orca
 */

?>

<section>

  <div class="flex-column not-found">

    <div class="flex-column-item not-found-content">

      <h1 class="flex-column-item">
        
        <?php the_title(); ?>
      
      </h1>

      <div class="flex-column-item">

        <?php the_content(); ?>

      </div>

      <div class="flex-column-item">

        <a class="button" href="/" target="_self" rel="noreferrer noopener" aria-label="" type="link">

          Return to home

        </a>

      </div>

    </div>

  </div>

</section>