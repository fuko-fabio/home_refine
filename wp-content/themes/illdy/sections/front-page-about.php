<?php
/**
 *	The template for displaying about section in front page.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>
<?php
$general_title = get_theme_mod( 'illdy_about_general_title' );
$general_entry = get_theme_mod( 'illdy_about_general_entry' );
?>

<?php if ( $general_title != '' || $general_entry != '' || is_active_sidebar( 'front-page-about-sidebar' ) ) { ?>

<section id="about" class="front-page-section" style="<?php if( !$general_title && !$general_entry ): echo 'padding-top: 130px;'; endif; ?>">
	<?php if( $general_title || $general_entry ): ?>
		<div class="section-header">
			<div class="container-fluid">
				<div class="row">
					<?php if( $general_title ): ?>
						<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
							<div class="col-sm-8">
						<?php } else { ?>
							<div class="col-sm-8 col-sm-offset-2">
						<?php } ?>
							<h3><?php echo illdy_sanitize_html( $general_title ); ?></h3>
						</div>
					<?php endif; ?>
					<?php if( $general_entry ): ?>
						<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
							<div class="col-sm-8">
						<?php } else { ?>
							<div class="col-sm-8 col-sm-offset-2">
						<?php } ?>
							<p><?php echo illdy_sanitize_html( $general_entry ); ?></p>
						</div>
					<?php endif; ?>
				</div><!--/.row-->
			</div><!--/.container-->
		</div><!--/.section-header-->
	<?php endif; ?>
	<div class="section-content">
		<div class="container">
			<div class="row">
				<?php
				if( is_active_sidebar( 'front-page-about-sidebar' ) ):
					dynamic_sidebar( 'front-page-about-sidebar' );
				elseif( current_user_can( 'edit_theme_options' ) & defined("ILLDY_COMPANION") ):
					$the_widget_args = array(
						'before_widget'	=> '<div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1 col-lg-4 col-lg-offset-0 widget_illdy_skill">',
						'after_widget'	=> '</div>',
						'before_title'	=> '',
						'after_title'	=> ''
					);

					the_widget( 'Illdy_Widget_Skill', 'title='. __( 'Typography', 'illdy' ) .'&percentage=60&icon=fa-font&color=#f18b6d', $the_widget_args );
					the_widget( 'Illdy_Widget_Skill', 'title='. __( 'Design', 'illdy' ) .'&percentage=82&icon=fa-pencil&color=#f1d204', $the_widget_args );
					the_widget( 'Illdy_Widget_Skill', 'title='. __( 'Development', 'illdy' ) .'&percentage=86&icon=fa-code&color=#6a4d8a', $the_widget_args );
				endif;
				?>
			</div><!--/.row-->
		</div><!--/.container-->
	</div><!--/.section-content-->
</section><!--/#about.front-page-section-->

<?php } ?>