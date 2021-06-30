<?php
/**
 * Template Name: Contact Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

    <header id="inner-header" class="services-header" style="background-image: url(<?php the_field('background_image_contact_header'); ?>);">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-caption">
                        <h1><?php the_field('main_title_header_contact'); ?></h1>
                        <div class="header-cta">
                            <a href="<?php the_field('button_link_heder_contact'); ?>"><i class="twf twf-et-clipboard"></i> <?php the_field('button_label_header_contact'); ?></a>
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

    <div id="contact-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contact-info">
                        <?php the_field('contact_info_page'); ?>
                    </div>
                    <!-- /.contact-info -->
                </div>
                <!-- /.col -->
                <div class="col">
                    <div class="contact-form">
                        <?php the_field('form_code_contact_page'); ?>
                    </div>
                    <!-- /.contact-form -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#contact-page -->

    <section id="services-area" class="free-quote-services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-list">
                        <div class="row">

                            <?php
                                $post_objects = get_field('list_of_services_contact_page');

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
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#services-area -->
	
<?php get_footer(); ?>

