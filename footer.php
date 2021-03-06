<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ARE_Visual
 */

?>
<?php
 $root_url = get_site_url();
?>
	<footer id="colophon" class="site-footer  wow animate__animated  animate__ animate__fadeInUp">
		<div class="site-info">
			<div class="footer-container">
				&copy; <?php echo date( 'Y' ); ?> Andrew R Emery
			</div>
			<div id="social-menu" class="footer-container">
				<a href="https://github.com/arevisual/" target="_blank">
					<span class="fa fa-github-square" role="link"></span>
				</a>
				<a href="https://www.linkedin.com/in/andrewemery" target="_blank">
					<span class="fa fa-linkedin-square" role="link"></span>
				</a>
				<a href="https://www.shutterstock.com/g/are%20visual" target="_blank">
					<span class="fa fa-camera" role="link"></span>
				</a>
				<a href="https://www.youtube.com/channel/UCWH9j2eo_sJRP4CHk7NMVWQ" target="_blank">
					<span class="fa fa-youtube-square" role="link"></span>
				</a> 
			</div>
			<div id="sitemap-container"class="footer-container">
				<a href="<?php echo $root_url . '/sitemap.xml'; ?> ">sitemap.xml</a>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
