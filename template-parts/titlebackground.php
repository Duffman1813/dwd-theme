<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Duffy_Portfolio
 */
?>

<?php if (function_exists('get_field')):?>

<div class="area" >

            <ul class="circles">

              <?php 

              $images = get_field('skills_gallery');
              if( $images ): 
              ?>

              <?php foreach( $images as $image ): ?>

            <li>
              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </li>
			
              <?php endforeach; ?>

              <?php endif; ?>

            </ul>
  </div>

  <?php endif; ?>

