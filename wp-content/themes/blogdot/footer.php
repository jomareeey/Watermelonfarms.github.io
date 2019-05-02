<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogdot
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer row">
			<div class="site-info text-center col-md-12">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'WordPress Theme: %1$s by %2$s.', 'blogdot' ), 'Blogdot', '<a href="https://wp-points.com/" rel="nofollow" target="_blank">TwoPoints</a>' );
				?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #box-container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
