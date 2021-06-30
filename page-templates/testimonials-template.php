<?php
/**
 * Template Name: Testimonials Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header id="masheader" style="background-image: url(<?php the_field('background_image_test_header'); ?>);" class="testimonials-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="header-caption">
                        <span class="title"><?php the_field('small_title_header_test'); ?></span>
                        <h1><?php the_field('main_title_heder_test'); ?></h1>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col -->
                <div class="col-xl-4">
                    <div class="quote-form">
                        <?php the_field('form_code_head_test'); ?>
                    </div>
                    <!-- /.quote-form -->
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <section id="services-area" class="free-quote-services testimonials-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="service-more">
                        <?php the_field('intro_text_test_page'); ?>
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

    <div id="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro">
                        <img src="<?php bloginfo('template_directory'); ?>/img/ico/testimonials-icon.png" alt="">
                        <h2><?php the_field('main_title_test_page_intro'); ?></h2>
                    </div>
                    <!-- /.intro -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <?php
                $loop = new WP_Query( array( 'post_type' => 'reviews', 'posts_per_page' => 1115) ); ?>  
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-md-4">
                        <div class="testimonial-item">
                            <div class="testimonial-text">
                                <?php the_field('client_review_test'); ?>
                            </div>
                            <!-- /.testimonial-text -->
                            <div class="testimonial-icon"><i class="fas fa-quote-right"></i></div>
                        </div>
                        <!-- /.testimonial-item -->
                    </div>
                    <!-- /.col-md-4 -->

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>      

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#our-testimonials -->
	
<?php get_footer(); ?>

