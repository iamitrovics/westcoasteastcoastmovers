<?php
/**
 * Template Name: Free Quote Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
   
    <header id="masheader" style="background-image: url(<?php the_field('background_image_header_quote'); ?>);" class="quote-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="header-caption">
                        <h1><?php the_field('main_title_header_quote'); ?></h1>
                        <div class="header-cta">
                            <a href="tel:<?php the_field('phone_number_header_quote'); ?>"><i class="twf twf-ln-phone-handset"></i> <?php the_field('phone_number_header_quote'); ?></a>
                        </div>
                        <!-- /.header-cta -->
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col -->
                <div class="col-lg-6 col-xl-5">
                    <?php include(TEMPLATEPATH . '/inc/inc-quote.php'); ?>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <section id="services-area" class="free-quote-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-list">
                        <div class="row">

                            <?php
                                $post_objects = get_field('list_of_services_quote');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>

                                        <div class="col-md-6 col-xl-3">
                                            <div class="service-item">
                                                <div class="service-ico">
                                                    <a href="<?php echo get_permalink(); ?>"><img src="<?php the_field('featured_icon_services'); ?>" alt=""></a>
                                                </div>
                                                <!-- /.service-ico -->
                                                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
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
                    <div class="service-more">
                        <?php the_field('services_content_quote'); ?>
                    </div>
                    <!-- /.service-more -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#services-area -->

<?php get_footer(); ?>

