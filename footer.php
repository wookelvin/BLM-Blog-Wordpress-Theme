<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BLM
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
            <div class="logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-webpage.svg"/></a></div>
            <div class="contact-info">
                <div class="social"></div>
                <div class="phone"><a href="tel:+8047422583">804-742-BLUE(2583)</a></div>
                <div class="contact"><a href="#">Contact Us</a></div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
