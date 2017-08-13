<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="footer-text-container">
						<div class="footer-text-left"
								<h3>Contact Info</h3>
								<p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
								<p><i class="fa fa-phone"></i><a href="tel:7784567891">778-456-7891</a></p>
								<p><span><i class="fa fa-facebook-square"    aria-hidden="true"></i></span></p>
								<p><span><i class="fa fa-twitter-square"     aria-hidden="true"></i></span></p>
								<p><span><i class="fa fa-google-plus-square" aria-hidden="true"></i></span></p>

					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
