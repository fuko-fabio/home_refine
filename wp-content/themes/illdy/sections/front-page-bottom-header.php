<?php
/**
 *    The template for displaying the bottom header section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$first_row_from_title  = get_theme_mod( 'illdy_jumbotron_general_first_row_from_title', get_the_title() );
$second_row_from_title = get_theme_mod( 'illdy_jumbotron_general_second_row_from_title' );
$third_row_from_title  = get_theme_mod( 'illdy_jumbotron_general_third_row_from_title' );
$entry                 = get_theme_mod( 'illdy_jumbotron_general_entry' );
$first_button_title    = get_theme_mod( 'illdy_jumbotron_general_first_button_title' );
$first_button_url      = get_theme_mod( 'illdy_jumbotron_general_first_button_url' );
$second_button_title   = get_theme_mod( 'illdy_jumbotron_general_second_button_title' );
$second_button_url     = get_theme_mod( 'illdy_jumbotron_general_second_button_url' );


if ( $first_row_from_title || $second_row_from_title || $third_row_from_title || $entry || $first_button_title || $second_button_title ) {
?>
	<div class="bottom-header front-page" style="<?php echo get_header_background_style() ?>">
		<div class="container">
			<div class="row">
				<?php if ( $first_row_from_title || $second_row_from_title || $third_row_from_title ): ?>
					<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 bottom-header-info-box">
						<h2><?php if ( $first_row_from_title ) {
								echo '<span data-customizer="first-row-from-title">' . illdy_sanitize_html( $first_row_from_title ) . '</span>';
							} ?>
							<?php if ( $second_row_from_title ) {
								echo '<span data-customizer="second-row-from-title">' . illdy_sanitize_html( $second_row_from_title ) . '</span>';
							} ?>

							<?php if ( $third_row_from_title ) {
								echo '<span data-customizer="third-row-from-title">' . illdy_sanitize_html( $third_row_from_title ) . '</span>';
							} ?>
						</h2>
						<?php if ( $entry ): ?>
							<p><?php echo illdy_sanitize_html( $entry ); ?></p>
						<?php endif; ?>
						<?php if ( $first_button_title ): ?>
							<a href="<?php echo esc_url( $first_button_url ); ?>" title="<?php echo esc_attr( $first_button_title ); ?>" class="header-button-one"><?php echo esc_html( $first_button_title ); ?></a>
						<?php endif; ?>
						<?php if ( $second_button_title ): ?>
							<a href="<?php echo esc_url( $second_button_url ); ?>" title="<?php echo esc_attr( $second_button_title ); ?>" class="header-button-two"><?php echo esc_html( $second_button_title ); ?></a>
						<?php endif; ?>
					</div><!--/.col-sm-10-->
				<?php endif; ?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.bottom-header.front-page-->

<?php } ?>