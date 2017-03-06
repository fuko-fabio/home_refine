<?php
/**
 *    The template for displaying the bottom header section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$first_button_url      = get_theme_mod( 'illdy_jumbotron_general_first_button_url' );
$second_button_url     = get_theme_mod( 'illdy_jumbotron_general_second_button_url' );
?>
<div class="bottom-header front-page" style="<?php echo get_header_background_style() ?>">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2 bottom-header-info-box">
				<h2><?php echo __( 'The Popular Property Management Company in London', 'illdy' ); ?></h2>
				<p><?php echo __( 'Lettings, Maintenance, Buying & Selling', 'illdy' ); ?></p>
				<a href="<?php echo esc_url( $first_button_url ); ?>" title="<?php echo __( '+44 01689 768393', 'illdy' ); ?>" class="header-button-one"><?php echo __( '+44 01689 768393', 'illdy' ); ?></a>
				<a href="<?php echo esc_url( $second_button_url ); ?>" title="<?php echo __( 'Contact Us', 'illdy' ); ?>" class="header-button-two"><?php echo __( 'Contact Us', 'illdy' ); ?></a>
			</div><!--/.col-sm-10-->
		</div><!--/.row-->
	</div><!--/.container-->
</div><!--/.bottom-header.front-page-->

