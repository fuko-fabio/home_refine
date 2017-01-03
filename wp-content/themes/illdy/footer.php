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

?>
<footer id="footer">
	<div class="container">
		<div class="row">
			<?php
			$the_widget_args = array(
				'before_widget' => '<div class="widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h3>',
				'after_title'   => '</h3></div>',
			);
			?>
			<div class="col-sm-3">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-1' ) ):
					dynamic_sidebar( 'footer-sidebar-1' );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-sm-3">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-2' ) ):
					dynamic_sidebar( 'footer-sidebar-2' );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-sm-3">
				<?php
				if ( is_active_sidebar( 'footer-sidebar-3' ) ):
					dynamic_sidebar( 'footer-sidebar-3' );
				endif;
				?>
			</div><!--/.col-sm-3-->
			<div class="col-sm-3">
				<!--
				<?php if ( $img_footer_logo ): ?>
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="footer-logo"><img src="<?php echo esc_url( $img_footer_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" /></a>
				<?php endif; ?>
				-->
				<span class="copyright"><?php echo illdy_sanitize_html( $footer_copyright ); ?></span>
				<a target="_blank" href="http://npsoftware.eu" title="nps software" class="author">
					<span class="cname">nps</span><span class="csoftware"> software</span>
				</a>
			</div><!--/.col-sm-3-->
		</div><!--/.row-->
	</div><!--/.container-->
</footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>