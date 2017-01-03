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
$address1                  = get_theme_mod( 'illdy_address1' );
$address2                  = get_theme_mod( 'illdy_address2' );
$address3                  = get_theme_mod( 'illdy_address3' );
$address4                  = get_theme_mod( 'illdy_address4' );
$general_title             = get_theme_mod( 'illdy_contact_us_general_title' );
$general_entry             = get_theme_mod( 'illdy_contact_us_general_entry' );
$general_contact_form_7    = get_theme_mod( 'illdy_contact_us_general_contact_form_7' );
$general_address_title     = get_theme_mod( 'illdy_contact_us_general_address_title' );
$customer_support_title    = get_theme_mod( 'illdy_contact_us_general_customer_support_title' );


if ( $general_title != '' || $general_entry != '' || $general_address_title != '' || $address1 != '' || $address2 != '' || $customer_support_title != '' || $email != '' || $phone != '' || $contact_bar_twitter_url != ''
     || $contact_bar_facebook_url != '' || $contact_bar_linkedin_url != '' || $contact_bar_googlep_url != '' || $contact_bar_instagram_url || $contact_bar_vimeo_url != '' || $contact_bar_pinterest_url != '' || $contact_bar_youtube_url != ''
     || $general_contact_form_7 != null && $general_contact_form_7 != 'default' ) {

	?>
	<section id="contact-us" class="front-page-section">
		<?php if ( $general_title || $general_entry ): ?>
			<div class="section-header">
				<div class="container">
					<div class="row">
						<?php if ( $general_title ): ?>
							<div class="col-sm-12">
								<h3><?php echo illdy_sanitize_html( $general_title ); ?></h3>
							</div><!--/.col-sm-12-->
						<?php endif; ?>
						<?php if ( $general_entry ): ?>
							<div class="col-sm-10 col-sm-offset-1">
								<p><?php echo illdy_sanitize_html( $general_entry ); ?></p>
							</div><!--/.col-sm-10.col-sm-offset-1-->
						<?php endif; ?>
					</div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.section-header-->
		<?php endif; ?>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row" style="margin-bottom: 25px;">
							<div class="col-sm-6">
								<div class="contact-us-box">
									<?php if ( $general_address_title ): ?>
										<div class="box-left" data-customizer="box-left-address-title">
											<?php echo illdy_sanitize_html( $general_address_title ); ?>
										</div><!--/.box-left-->
									<?php endif; ?>
									<div class="box-right">
										<?php if ( $address1 ): ?>
											<span class="box-right-row" data-customizer="contact-us-address-1"><?php echo illdy_sanitize_html( $address1 ); ?></span>
										<?php endif; ?>
										<?php if ( $address2 ): ?>
											<span class="box-right-row" data-customizer="contact-us-address-2"><?php echo illdy_sanitize_html( $address2 ); ?></span>
										<?php endif; ?>
										<?php if ( $address3 ): ?>
											<span class="box-right-row" data-customizer="contact-us-address-3"><?php echo illdy_sanitize_html( $address3 ); ?></span>
										<?php endif; ?>
										<?php if ( $address4 ): ?>
											<span class="box-right-row" data-customizer="contact-us-address-4"><?php echo illdy_sanitize_html( $address4 ); ?></span>
										<?php endif; ?>
									</div><!--/.box-right-->
								</div><!--/.contact-us-box-->
							</div><!--/.col-sm-6-->
							<div class="col-sm-6">
								<div class="contact-us-box">
									<?php if ( $customer_support_title ): ?>
										<div class="box-left" data-customizer="box-left-customer-support-title">
											<?php echo illdy_sanitize_html( $customer_support_title ); ?>
										</div><!--/.box-left-->
									<?php endif; ?>
									<div class="box-right">
										<?php if ( $email ): ?>
											<span class="box-right-row"><?php _e( 'E-mail:', 'illdy' ); ?>
												<a href="mailto:<?php echo esc_attr( $email ); ?>" title="<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></span>
										<?php endif; ?>
										<?php if ( $phone ): ?>
											<span class="box-right-row" data-customizer="contact-us-phone"><?php _e( 'Phone:', 'illdy' ); ?><?php echo illdy_sanitize_html( $phone ); ?></span>
										<?php endif; ?>
										<?php if ( $mobile ): ?>
											<span class="box-right-row" data-customizer="contact-us-phone"><?php _e( 'Mobile:', 'illdy' ); ?><?php echo illdy_sanitize_html( $mobile ); ?></span>
										<?php endif; ?>
									</div><!--/.box-right-->
								</div><!--/.contact-us-box-->
							</div><!--/.col-sm-6-->
						</div><!--/.row-->
					</div><!--/.col-sm-12-->
				</div><!--/.row-->
				<div class="row">
					<div class="col-sm-12">
						<?php if ( class_exists( 'WPCF7' ) && $general_contact_form_7 != null && $general_contact_form_7 != 'default' ): ?>
							<?php $shortcode = '[contact-form-7 id="' . esc_html( $general_contact_form_7 ) . '"]'; ?>
							<?php echo do_shortcode( $shortcode ); ?>
						<?php endif; ?>
					</div><!--/.col-sm-12-->
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-content-->
	</section><!--/#contact-us.front-page-section-->

<?php } ?>