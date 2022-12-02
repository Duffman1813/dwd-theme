<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dwd_starter_theme
 */

?>

	<footer id="colophon" class="site-footer">
	
		<div class="footer-menu">
				<nav id="footer-navigation" class="footer-navigation">
					
					<?php wp_nav_menu( 
						array( 
							'theme_location' => 'footer' 
							));
					?>

				</nav>
		</div>
		
	</footer>

<?php wp_footer(); ?>

</body>
</html>
