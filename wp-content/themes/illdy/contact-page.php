<?php
/*
Template Name: Contact Page
*/

get_header();

if( have_posts() ):
	while( have_posts() ): the_post();
		$static_page_content = get_the_content();
		if ( $static_page_content != '' ) : ?>
			<section class="front-page-section" id="static-page-content">
				<div class="section-header">
					<div class="container-fluid">
						<div class="row">
							<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
								<div class="col-sm-8">
							<?php } else { ?>
								<div class="col-sm-8 col-sm-offset-2">
							<?php } ?>
								<h3><?php the_title(); ?></h3>
							</div>
						</div><!--/.row-->
					</div><!--/.container-->
				</div><!--/.section-header-->
				<div class="section-content">
					<div class="container-fluid">
						<div class="row">
							<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
								<div class="col-sm-8">
							<?php } else { ?>
								<div class="col-sm-8 col-sm-offset-2">
							<?php } ?>
								<?php echo $static_page_content; ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif;
	endwhile;
endif;

get_template_part( 'sections/front-page', 'contact-us' );

get_footer(); ?>