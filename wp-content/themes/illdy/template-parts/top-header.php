<?php
/**
 *    The template for displaying the top header part.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$logo_id                   = get_theme_mod( 'custom_logo' );
$logo_image                = wp_get_attachment_image_src( $logo_id, 'full' );
$text_logo                 = get_theme_mod( 'illdy_text_logo', __( 'Illdy', 'illdy' ) );
?>

<div class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-xs-8">
				<?php if ( ! empty( $logo_image ) ) { ?>
					<?php echo '<a href="' . esc_url( home_url() ) . '"><img class="header-logo-img" src="' . esc_url( $logo_image[0] ) . '" /></a>'; ?>
				<?php } else { ?>
					<?php if ( get_option( 'show_on_front' ) == 'page' ) { ?>
						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( $text_logo ); ?>" class="header-logo"><?php echo esc_html( $text_logo ); ?></a>
					<?php } else { // front-page option ?>
						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
					<?php } ?>
				<?php } ?>
			</div><!--/.col-sm-2-->
			<div class="col-sm-10 col-xs-4">
				<nav class="header-navigation">
					<ul class="clearfix">
						<?php
						wp_nav_menu( array(
							'theme_location'  => 'primary-menu',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'items_wrap'      => '%3$s',
							'walker'          => new Illdy_Extended_Menu_Walker(),
							'fallback_cb'     => 'Illdy_Extended_Menu_Walker::fallback',
						) );
						?>
					</ul><!--/.clearfix-->
				</nav><!--/.header-navigation-->
				<button class="open-responsive-menu"><i class="fa fa-bars"></i></button>
			</div><!--/.col-sm-10-->
		</div><!--/.row-->
	</div><!--/.container-->
</div><!--/.top-header-->