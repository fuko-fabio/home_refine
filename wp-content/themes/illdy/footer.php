<?php
/**
 *    The template for dispalying the footer.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php

$footer_copyright  = get_theme_mod( 'illdy_footer_copyright' );
$img_footer_logo   = get_theme_mod( 'illdy_img_footer_logo' );

$contact_bar_facebook_url  = get_theme_mod( 'illdy_contact_bar_facebook_url' );
$contact_bar_twitter_url   = get_theme_mod( 'illdy_contact_bar_twitter_url' );
$contact_bar_linkedin_url  = get_theme_mod( 'illdy_contact_bar_linkedin_url' );
$contact_bar_googlep_url   = get_theme_mod( 'illdy_contact_bar_googlep_url' );
$contact_bar_youtube_url   = get_theme_mod( 'illdy_contact_bar_youtube_url' );
$contact_bar_vimeo_url     = get_theme_mod( 'illdy_contact_bar_vimeo_url' );
$contact_bar_pinterest_url = get_theme_mod( 'illdy_contact_bar_pinterest_url' );
$contact_bar_instagram_url = get_theme_mod( 'illdy_contact_bar_instagram_url' );

?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-12" style="margin-top: 15px; text-align: right">
				<div class="contact-us-social">
					<?php if ( $contact_bar_twitter_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_twitter_url ); ?>" title="<?php _e( 'Twitter', 'illdy' ); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					<?php endif; ?>
					<?php if ( $contact_bar_facebook_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_facebook_url ); ?>" title="<?php _e( 'Facebook', 'illdy' ); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
					<?php endif; ?>
					<?php if ( $contact_bar_linkedin_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_linkedin_url ); ?>" title="<?php _e( 'LinkedIn', 'illdy' ); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/linkedin.png' ); ?>" /></a>
					<?php endif; ?>
					<?php if ( $contact_bar_googlep_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_googlep_url ); ?>" title="<?php _e( 'Google+', 'illdy' ); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/google-plus.png' ); ?>" /></a>
					<?php endif; ?>
					<?php if ( $contact_bar_pinterest_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_pinterest_url ); ?>" title="<?php _e( 'Pinterest', 'illdy' ); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
					<?php endif; ?>
					<?php if ( $contact_bar_instagram_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_instagram_url ); ?>" title="<?php _e( 'Instagram', 'illdy' ); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
					<?php endif; ?>
					<?php if ( $contact_bar_youtube_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_youtube_url ); ?>" title="<?php _e( 'YouTube', 'illdy' ); ?>" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/youtube.png' ); ?>" /></a>
					<?php endif; ?>
					<?php if ( $contact_bar_vimeo_url ): ?>
						<a href="<?php echo esc_url( $contact_bar_vimeo_url ); ?>" title="<?php _e( 'Vimeo', 'illdy' ); ?>" target="_blank"><i class="fa fa-vimeo"></i></a>
					<?php endif; ?>
					<a href="javascript:void(0);">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/wechat.png' ); ?>" />
						<img class="wechat-code" src="<?php echo esc_url( get_template_directory_uri() . '/layout/images/wechat_code.png' ); ?>" />
					</a>
					<!--
					<a href="https://www.patreon.com/bePatron?u=4673334" data-patreon-widget-type="become-patron-button">Be a Home Refine Patron</a><script async src="https://cdn6.patreon.com/becomePatronButton.bundle.js"></script>
					-->
				</div><!--/.contact-us-social-->
			</div><!--/.col-sm-12-->
		</div>
		<div class="row">
			<?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h3>',
				'after_title'   => '</h3></div>',
			);
			?>
			<div class="col-sm-4">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-1' ) ):
					dynamic_sidebar( 'footer-sidebar-1' );
				endif;
				?>
			</div><!--/.col-sm-4-->
			<div class="col-sm-4">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-2' ) ):
					dynamic_sidebar( 'footer-sidebar-2' );
				endif;
				?>
			</div><!--/.col-sm-4-->
			<div class="col-sm-4">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-3' ) ):
					dynamic_sidebar( 'footer-sidebar-3' );
				endif;
				?>
			</div><!--/.col-sm-4-->
		</div><!--/.row-->
		<div class="row">
			<div class="col-sm-6">
				<a target="_blank" href="http://npsoftware.eu" title="nps software" class="author">
					<span class="cname">nps</span><span class="csoftware"> software</span>
				</a>
			</div><!--/.col-sm-6-->
			<div class="col-sm-6">
				<!--
				<?php if ( $img_footer_logo ): ?>
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="footer-logo"><img src="<?php echo esc_url( $img_footer_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
				<?php endif; ?>
				-->
				<span class="copyright"><?php echo illdy_sanitize_html( $footer_copyright ); ?></span>
			</div><!--/.col-sm-6-->
		</div><!--/.row-->
	</div><!--/.container-->
</footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>