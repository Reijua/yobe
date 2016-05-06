<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	</main><!-- main -->

	<footer id="footer" role="contentinfo">
		<div id="footer-content" class="container">
			<div class="row">
				<div class="copyright col-lg-12">
					<span class="pull-left"><?php printf( __( 'Copyright &copy; %s %s', 'arcade' ), date( 'Y' ), '<a href="' . home_url() . '"> Inside Dienstleistungen GmbH </a>' ); ?> 
						<a href="http://www.insidenet.at"> | InsideNet | </a>
						<a href="http://www.travel-inside.at"> TravelInside </a>
						<a href="http://www.123rf.com"> | Bilder von 123rf.com </a>
					</span>
					<span class="pull-right"> <?php echo '<a href="'.home_url().'/impressum">Impressum</a> | <a href="'.home_url().'/agb">AGB</a> | <a href="'.home_url().'/cookies">Cookie-Richtlinien</a> | <a href="'.home_url().'/datenschutz">Datenschutzrichtlinien</a>' ?>
					</span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>