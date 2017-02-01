<?php
/**
 *	The template for displaying services section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$services_general_title = get_theme_mod( 'illdy_services_general_title' );
$services_general_entry = get_theme_mod( 'illdy_services_general_entry' );
?>

<?php if ( $services_general_title != '' || $services_general_entry != '' || is_active_sidebar( 'front-page-services-sidebar' ) ) { ?>

<section id="services" class="front-page-section">
	<?php if( $services_general_title || $services_general_entry ): ?>
		<div class="section-header">
			<div class="container-fluid">
				<div class="row">
					<?php if( $services_general_title ): ?>
						<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
							<div class="col-sm-8">
						<?php } else { ?>
							<div class="col-sm-8 col-sm-offset-2">
						<?php } ?>
							<h3><?php echo illdy_sanitize_html( $services_general_title ); ?></h3>
						</div>
					<?php endif; ?>
					<?php if( $services_general_entry ): ?>
						<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
							<div class="col-sm-8">
						<?php } else { ?>
							<div class="col-sm-8 col-sm-offset-2">
						<?php } ?>
							<p><?php echo illdy_sanitize_html( $services_general_entry ); ?></p>
						</div>
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row inline-columns">
				<?php
				if( is_active_sidebar( 'front-page-services-sidebar' ) ):
					dynamic_sidebar( 'front-page-services-sidebar' );
				elseif( current_user_can( 'edit_theme_options' ) & defined("ILLDY_COMPANION") ):
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-4 widget_illdy_service">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Web Design', 'illdy' ) .'&icon=fa-pencil&entry='. __( 'Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus. Aliquam a leo risus. Fusce a metus non augue dapibus porttitor at in mauris. Pellentesque commodo...', 'illdy' ) .'&color=#f18b6d', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'Web Development', 'illdy' ) .'&icon=fa-code&entry='. __( 'Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus. Aliquam a leo risus. Fusce a metus non augue dapibus porttitor at in mauris. Pellentesque commodo...', 'illdy' ) .'&color=#f1d204', $the_widget_args );
					the_widget( 'Illdy_Widget_Service', 'title='. __( 'SEO Analisys', 'illdy' ) .'&icon=fa-search&entry='. __( 'Consectetur adipiscing elit. Praesent molestie urna hendrerit erat tincidunt tempus. Aliquam a leo risus. Fusce a metus non augue dapibus porttitor at in mauris. Pellentesque commodo...', 'illdy' ) .'&color=#6a4d8a', $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#services.front-page-section-->

<?php } ?>