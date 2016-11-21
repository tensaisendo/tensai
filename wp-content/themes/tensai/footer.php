<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<?php printf( '<p> &middot; &copy; %1$s <a href="%2$s" title="%3$s" rel="bookmark">%3$s</a> &middot; Design & Integration Laurent KHAUV &middot;</p>',
					    esc_attr( date( 'Y' ) ), 	//&1$s
					    esc_url( home_url() ), 	 	//&2$s
					    esc_attr(get_bloginfo()) 	//&3$s
				);?>
				
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>