<?php
/**
 *    The template for displaying the contact us section in front page.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$email                     = get_theme_mod( 'illdy_email' );
$phone                     = get_theme_mod( 'illdy_phone' );
$mobile                    = get_theme_mod( 'illdy_mobile' );
$general_contact_form_7    = get_theme_mod( 'illdy_contact_us_general_contact_form_7' );

$default_lang = pll_default_language('slug');
$current_lang = pll_current_language('slug');
if($current_lang != $default_lang){
  $general_contact_form_7 = pll_get_post($form_id, $current_lang);
  if(empty($form_id)){ 
    $form_id = get_theme_mod( 'illdy_contact_us_general_contact_form_7' );
  }
}
?>


<section id="contact-us" class="front-page-section">
	<div class="section-header">
		<div class="container-fluid">
			<div class="row">
				<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
					<div class="col-sm-8">
				<?php } else { ?>
					<div class="col-sm-8 col-sm-offset-2">
				<?php } ?>
				<h3><?php echo __( 'Contact', 'illdy' ); ?></h3>
				</div>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-header-->
	<div class="section-content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row" style="margin-bottom: 25px;">
						<div class="col-sm-6">
							<div class="contact-us-box">
								<div class="box-left" data-customizer="box-left-address-title">
									<?php echo __( 'Address', 'illdy' ); ?>
								</div><!--/.box-left-->
								<div class="box-right">
									<span class="box-right-row" data-customizer="contact-us-address-1">
										<?php echo __( 'Home Refine Ltd', 'illdy' ); ?>
									</span>
									<span class="box-right-row" data-customizer="contact-us-address-2">
										<?php echo __( 'Suite W0078', 'illdy' ); ?>
									</span>
									<span class="box-right-row" data-customizer="contact-us-address-3">
										<?php echo __( '265 269 Kingston Road', 'illdy' ); ?>
									</span>
									<span class="box-right-row" data-customizer="contact-us-address-4">
										<?php echo __( 'SW19 3NW London UK', 'illdy' ); ?>
									</span>
								</div><!--/.box-right-->
							</div><!--/.contact-us-box-->
						</div><!--/.col-sm-6-->
						<div class="col-sm-6">
							<div class="contact-us-box">
								<div class="box-left" data-customizer="box-left-customer-support-title">
									<?php echo __( 'Contact Us', 'illdy' ); ?>
								</div><!--/.box-left-->
								<div class="box-right">
									<span class="box-right-row"><?php _e( 'E-mail:', 'illdy' ); ?>
										<a href="mailto:<?php echo esc_attr( $email ); ?>" title="<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
									</span>
									<span class="box-right-row" data-customizer="contact-us-phone">
										<?php _e( 'Phone:', 'illdy' ); ?><?php echo illdy_sanitize_html( $phone ); ?>
									</span>
									<span class="box-right-row" data-customizer="contact-us-phone">
										<?php _e( 'Mobile:', 'illdy' ); ?><?php echo illdy_sanitize_html( $mobile ); ?>
									</span>
								</div><!--/.box-right-->
							</div><!--/.contact-us-box-->
						</div><!--/.col-sm-6-->
					</div><!--/.row-->
				</div><!--/.col-sm-12-->
			</div><!--/.row-->
			<div class="row">
				<div class="col-sm-5">
					<iframe class="contact-us-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39816.54018902203!2d-0.24340738653834806!3d51.41162097951945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487608bef8bb6677%3A0x4b6cb3bffb792a2e!2s269+Kingston+Rd%2C+London+SW19+3NW%2C+Wielka+Brytania!5e0!3m2!1spl!2spl!4v1483711320845" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-sm-7">
					<?php if ( class_exists( 'WPCF7' ) && $general_contact_form_7 != null && $general_contact_form_7 != 'default' ): ?>
						<?php $shortcode = '[contact-form-7 id="' . esc_html( $general_contact_form_7 ) . '"]'; ?>
						<?php echo do_shortcode( $shortcode ); ?>
					<?php endif; ?>
				</div><!--/.col-sm-8-->
			</div><!--/.row-->
	</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#contact-us.front-page-section-->