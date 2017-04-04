<?php
/**
 *    The template for displaying the header.
 *
 * @package    WordPress
 * @subpackage illdy
 */
?>
<?php
$preloader_enable          = get_theme_mod( 'illdy_preloader_enable', 1 );

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if ( $preloader_enable == 1 ): ?>
	<div class="pace-overlay"></div>
<?php endif; ?>
<header id="header" class="<?php if ( get_option( 'show_on_front' ) == 'page' && is_front_page() ): echo 'header-front-page';
else: echo 'header-blog'; endif; ?>" >
	
	<?php 
	get_template_part( 'template-parts/top', 'header' );
	echo get_header_navigation();
	?>
	
	<div class="header-slider">
		<?php
			echo do_shortcode('[sp_responsiveslider height="300" effect="fade" design="design-1" speed="3000"]');
			get_template_part( 'sections/blog', 'bottom-header' );
		?>
	</div>
</header><!--/#header-->