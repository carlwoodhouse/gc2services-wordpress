<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>
		</section><!-- #main -->
		<footer role="contentinfo">
		<div>
			<p>Copyright GC2 services &copy; 2012 <br>
<b>Phone</b>: +44 (0)1638 669 950 &nbsp;&nbsp;<b>Email</b>: <a href="info@gc2services.com">info@gc2services.com</a></p>
	<a href="http://www.zaust.com" target="_blank" class="ir zaust">Site by Zaust</a>
		</div>
		
<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
					</footer><!-- footer -->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */
	wp_footer();
?>
	<script type="text/javascript" src="../wp-content/themes/boilerplate/js/contactform.js">></script>
	</body>
</html>