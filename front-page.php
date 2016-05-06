<?php
/**
 * The front page template.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @since 1.0.0
 */
get_header();

global $paged;
$bavotasan_theme_options = bavotasan_theme_options();

if ( 2 > $paged ) {
	// Display jumbo headline is the option is set
	if ( is_active_sidebar( 'jumbo-headline' ) || ! empty( $bavotasan_theme_options['jumbo_headline_title'] ) ) {
	?>
	<div class="home-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php
					if ( is_active_sidebar( 'jumbo-headline' ) ) {
						dynamic_sidebar( 'jumbo-headline' );
					} else {
						?>
						<div class="home-jumbotron jumbotron">
							<h1><?php echo apply_filters( 'the_title', html_entity_decode( $bavotasan_theme_options['jumbo_headline_title'] ) ); ?></h1>
							<p><?php echo wp_kses_post( html_entity_decode( $bavotasan_theme_options['jumbo_headline_text'] ) ); ?></p>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
	<?php
	}

	// Display home page top widgetized area
	if ( is_active_sidebar( 'home-page-top-area' ) ) {
		?>
		<div id="home-page-widgets">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'home-page-top-area' ); ?>
				</div>
			</div>
		</div>
		<?php
	}
}
if ( 'page' == get_option('show_on_front') ) {
	include( get_page_template() );
} else {
?>
<div class="mission-picture">
	<img src="<?php echo get_template_directory_uri();?>/library/images/mission.jpg" />
</div>
<a name="mission" />
<div class="mission-container">
	<div class="mission-content">
		<div class="content-header">
				UNSERE MISSION
		</div>
		<div class="mission-line">
		</div>
		<div class="content-text">
				Gemäß unserem Motto - workHARD & saveSMART haben wir uns zur Aufgabe gemacht
				Österreichs größte Community für Mitarbeiter-Vorteile zu schaffen. Ein jeder von uns arbeitet hart und viel um jedes Monat seinen schwer verdienten Lohn zu erhalten. 

				Gemeinsam mit deinem Arbeitgeber wollen wir, dass du, deine Familie und deine Freunde bei Urlaub, verschiedenen Produkten sowie Dienstleistungen sparen könnt. 

				Auf getyobe.com findest du Angebote zu Reisen (travelINSIDE) und zu unterschiedlichen Angeboten aus vielen verschiedenen Bereichen (insideNET)

				Ständig neue Angebote, jede Woche, Monat für Monat. 

				Wir arbeiten täglich daran, dich mit neuen, attraktiven Angeboten zu überraschen. 
				Vom Romantikurlaub bis zum Familiy- oder Abenteuertrip. Tolle Angebote aus Sport, Freizeit und anderen Bereichen. 

				Du kannst uns aktiv dabei helfen das Beste für dich und alle anderen zu bekommen. 
				Dein Feedback, Ideen und Wünsche sind uns wichtig. 

				Wir freuen uns wenn du uns an Kolleginnen und Kollegen, Freundinnen und Freunde weiter empfiehlst. 

				Gemeinsam geht viel mehr. Werde Teil Österreichs größter Community für Mitarbeiter-Vorteile.
			</br>
				yobe - your benefit
				<br/>
				<br/>
				<div style="text-align:center;"> Mit &#128147; gemacht </div>
		</div>
		</div>
		<div class="mission-images">
			<div class="mission-icons">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-1.png" />
			</div>
			<div class="mission-icons">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-2.png" />
			</div>
			<div class="mission-icons">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-3.png" />
			</div>
		</div>
	</div>

<?php
}
get_footer(); ?>