<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info flex space-around">
					<div class="flex flex-column">
						<div class="section-head">CONTACT INFO</div>
						<div class="footer-content"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com"> info@inhabitent.com</a></div>
						<div class="footer-content"><i class="fa fa-phone" aria-hidden="true"></i>778-456-7891</div>
						<div class="flex footer-content">
							<i class="fa fa-facebook" aria-hidden="true"></i>
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</div>
					</div>
					<div class="flex flex-column">
						<div class="section-head">BUSINESS HOURS</div>
						<div class="footer-content">Monday-Friday: 9am to 5pm</div>
						<div class="footer-content">Saturday: 10am to 2pm</div>
						<div class="footer-content">Sunday: Closed</div>
					</div>
					<div class="right"><img src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-text.svg" alt=""></div>
				</div><!-- .site-info -->
					COPYRIGHT &copy; 2016 INHABITENT
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
