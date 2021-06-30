<?php
/**
 * Template Name: About Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

	<header id="inner-header" style="background-image: url(<?php the_field('background_image_about_header'); ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col">
					<div class="header-caption">
						<h1><?php the_field('main_title_header_about'); ?></h1>
						<div class="header-cta">
							<a href="<?php the_field('cta_button_link_header', 'options'); ?>"><i class="twf twf-et-clipboard"></i> <?php the_field('cta_button_label_header', 'options'); ?></a>
						</div>
						<!-- /.header-cta -->
					</div>
					<!-- /.header-caption -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</header>

	<div id="about-page">
		<section class="about-item">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-xl-1 col-xl-5">
						<div class="about-content">
							<h2><?php the_field('main_title_who_about'); ?></h2>
							<?php the_field('about_content_about_page'); ?>
						</div>
						<!-- /.about-content -->
					</div>
					<!-- /.col -->
					<div class="col-lg-6 col-xl-5">
						<div class="about-photo">
							<?php
							$attachment_id = get_field('featured_image_about_side');
							$size = "crop-image"; // (thumbnail, medium, large, full or custom size)
							$image = wp_get_attachment_image_src( $attachment_id, $size );
							?> 

							<img class="img-responsive" alt="" src="<?php echo $image[0]; ?>" />   
						</div>
						<!-- /.about-photo -->
					</div>
					<!-- /.col-lg-5 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.about-item -->
		<section class="about-item">
			<div class="container">
				<div class="row">
					<div class="offset-lg-1-r col-lg-12 col-xl-5">
						<div class="about-content">
							<h2><?php the_field('main_title_what_about'); ?></h2>
							<?php the_field('content_block_what_about'); ?>
						</div>
						<!-- /.about-content -->
					</div>
					<!-- /.col -->
					<div class="col-lg-12 col-xl">
						<div class="about-photo">
						<?php
							$attachment_id = get_field('featured_image_what_about');
							$size = "crop-image"; // (thumbnail, medium, large, full or custom size)
							$image = wp_get_attachment_image_src( $attachment_id, $size );
							?> 

							<img class="img-responsive" alt="" src="<?php echo $image[0]; ?>" />  
						</div>
						<!-- /.about-photo -->
					</div>
					<!-- /.col-lg-5 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /.about-item -->
		<section id="why-us" style="background-image: url(<?php the_field('background_image_why_about_page'); ?>);">
			<div class="container">
				<div class="row">
					<div class="offset-md-1 col-md-10">
						<h2><?php the_field('main_title_why_about'); ?></h2>
						<?php the_field('content_block_why_about'); ?>
					</div>
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#why-us -->
		<section id="services-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="services-list">
							<div class="row">

								<?php
									$post_objects = get_field('list_of_services_about');

									if( $post_objects ): ?>
										<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
											<?php setup_postdata($post); ?>

											<div class="col-md-6 col-xl-3">
												<div class="service-item">
													<div class="service-ico">
														<a href="<?php echo get_permalink(); ?>"><img src="<?php the_field('featured_icon_services'); ?>" alt=""></a>
													</div>
													<!-- /.service-ico -->
													<h3><a href="<?php echo get_permalink(); ?>	"><?php the_title(); ?></a></h3>
													<?php the_field('intro_text_services_listing'); ?>
													<a class="read-more" href="<?php echo get_permalink(); ?>">Read More</a>
												</div>
												<!-- /.service-item -->
											</div>
											<!-- /.col-md-6 col-xl-3 -->

										<?php endforeach; ?>
									<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
								<?php endif; ?>

							</div>
							<!-- /.row -->
						</div>
						<!-- /.services-list -->
					</div>
					<!-- /.col-md-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</section>
		<!-- /#services-area -->
	</div>
	<!-- /#about-page -->
	
<?php get_footer(); ?>

