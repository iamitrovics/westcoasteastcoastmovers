<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="city-header">
        <?php
        $imageID = get_field('background_image_header_city');
        $image = wp_get_attachment_image_src( $imageID, 'full-image' );
        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
        ?> 

        <div class="background-header" style="background-image: url(<?php echo $image[0]; ?>);"></div>
        <!-- /.background-header -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-caption">
                        <img src="<?php bloginfo('template_directory'); ?>/img/ico/ecwce-box-white.png" alt="" width="100">
                        <h1><?php the_field('main_title_header_city'); ?></h1>
                        <span class="review-title"><?php the_field('subtitle_header_city'); ?></span>
                        <!-- /.review-title -->

                        <?php if( get_field('quote_header_city') ): ?>
                            <span class="rating-stars">★★★★★</span>
                            <!-- /.rating-stars -->
                            <?php the_field('quote_header_city'); ?>
                            <span class="author">— <?php the_field('quote_author'); ?></span>
                        <?php endif; ?>
                        <div class="header-cta">
                            <a href="tel:<?php the_field('phone_number_city_header'); ?>"><i class="twf twf-ln-phone-handset"></i> <?php the_field('phone_number_city_header'); ?></a>
                        </div>
                        <!-- /.header-cta -->
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col -->
                <div class="col">
                    <?php include(TEMPLATEPATH . '/inc/inc-quote-header.php'); ?>
                    <div class="socials-reviews">
                        <span class="sr-title">Read What Our Customers Say</span>
                        <!-- /.sr-title -->
                        <ul class="social-badges">
                        
                            <?php if( get_field('google_reviews_link_city') ): ?>
                            <li><a href="<?php the_field('google_reviews_link_city'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ico/google.png" alt="google" width="90" height="160"></a>
                            </li>
                            <?php endif; ?>

                            <?php if( get_field('yelp_reviews_link') ): ?>
                            <li><a href="<?php the_field('yelp_reviews_link'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ico/yelp.png" alt="" width="130" height="160"></a>
                            </li>
                            <?php endif; ?>

                        </ul>
                    </div>
                    <!-- /.socials-reviews --> 
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>

    <?php if( have_rows('content_sections_city') ): ?>
        <?php while( have_rows('content_sections_city') ): the_row(); ?>
            <?php if( get_row_layout() == 'intro' ): ?>

                <div id="city-intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="city-intro-in">
                                    <h2><?php the_sub_field('main_title_intro'); ?></h2>
                                    <?php the_sub_field('intro_content'); ?>
                                </div>
                                <!-- /#city-intro-in -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#city-intro --> 

            <?php elseif( get_row_layout() == 'services' ): ?>

                <section id="services-area" class="city-services">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <h2><img src="<?php bloginfo('template_directory'); ?>/img/ico/rocket.gif" alt="" width="100">Services</h2>
                                <div class="services-list">
                                    <div class="row">

                                        <?php
                                            $post_objects = get_sub_field('services_list_inner');

                                            if( $post_objects ): ?>
                                                <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                    <?php setup_postdata($post); ?>

                                                    <div class="col-md-6 col-xl-3">
                                                        <div class="service-item">
                                                            <div class="service-ico">
                                                                <a href="<?php echo get_permalink(); ?>"><img src="<?php the_field('featured_icon_services'); ?>" alt=""></a>
                                                            </div>
                                                            <!-- /.service-ico -->
                                                            <h3><?php the_title(); ?></h3>
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

            <?php elseif( get_row_layout() == 'reviews' ): ?>

                <div id="testimonials-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><img src="<?php bloginfo('template_directory'); ?>/img/ico/diamond.gif" alt="" width="100"><?php the_sub_field('main_title_reviews'); ?></h2>
                                <h3><?php the_sub_field('subtitle_reviews'); ?></h3>
                                <div id="city-testimonials">

                                    <?php
                                        $post_objects = get_sub_field('reviews_list_yelp');

                                        if( $post_objects ): ?>
                                            <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                                <?php setup_postdata($post); ?>

                                                <div>
                                                    <div class="ct-box">
                                                        <?php 
                                                        $values = get_field( 'reviwer_photo' );
                                                        if ( $values ) { ?>

                                                            <div class="user-avatar">
                                                                <?php
                                                                $imageID = get_field('reviwer_photo');
                                                                $image = wp_get_attachment_image_src( $imageID, 'client-image' );
                                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                                ?> 

                                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                                                             
                                                            </div>
                                                            <!-- /.user-avatar -->

                                                        <?php 
                                                        } else { ?>
                                                            <div class="user-avatar"><img src="<?php bloginfo('template_directory'); ?>/img/misc/user.png" alt=""></div>
                                                            <!-- /.user-avatar -->                                                            
                                                        <?php } ?>
                                                        <span class="author"><?php the_title(); ?></span>
                                                        <!-- /.author -->

                                                        <?php if (get_field('score_yelp') == '5') { ?>
                                                            <span class="stars"><img src="<?php bloginfo('template_directory'); ?>/img/ico/yelp_stars_5.png" alt=""></span>
                                                            <!-- /.stars -->
                                                        <?php } elseif (get_field('type_of_event') == '4') { ?>

                                                        <?php } ?>   

                                                        <div class="content-less" style="display:inline;color:#fff;">
                                                            <?php the_field('review_text_yelp'); ?>
                                                        </div>
                                                        <div class="content-more" style="display:none;">
                                                            <?php the_field('review_text_hidden'); ?>
                                                        </div> <a class="show_hide">read more</a>

                                                        <span class="date"><?php the_field('date_of_review'); ?></span>
                                                        <!-- /.date -->
                                                        <div class="review-logo"><a href="<?php the_field('yelp_link'); ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/ico/yelp_outline.png" alt=""></a></div>
                                                        <!-- /.review-logo -->
                                                    </div>
                                                    <!-- /.ct-box -->
                                                </div>

                                            <?php endforeach; ?>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php endif; ?>

                                </div>
                                <!-- /#city-testimonials -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#testimonials-section -->

            <?php elseif( get_row_layout() == 'portfolio' ): ?>

                <div id="city-portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><img src="<?php bloginfo('template_directory'); ?>/img/ico/image.gif" alt="" width="100"> <?php the_sub_field('main_title_portfolio'); ?></h2>
                                <?php the_sub_field('subtitle_port'); ?>
                                <div id="portfolio-slider">

                                    <?php 
                                    $values = get_sub_field( 'gallery' );
                                    if ( $values ) { ?>

                                        <?php 
                                        $images = get_sub_field('gallery');
                                        if( $images ): ?>
                                            <?php foreach( $images as $image ): ?>
                                                <div>
                                                    <a href="<?php echo $image['sizes']['cropfull-image']; ?>" data-fancybox="gallery">
                                                        <img src="<?php echo $image['sizes']['gallery-image']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" />  
                                                    </a>
                                                </div>      
                                            <?php endforeach; ?>
                                        <?php endif; ?>   

                                    <?php 
                                    } else { ?>


                                        <?php 
                                        $images = get_field('photo_gallery_city_spec', 'options');
                                        if( $images ): ?>
                                            <?php foreach( $images as $image ): ?>
                                                <div>
                                                    <a href="<?php echo $image['sizes']['cropfull-image']; ?>" data-fancybox="gallery">
                                                        <img src="<?php echo $image['sizes']['gallery-image']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>" />  
                                                    </a>
                                                </div>      
                                            <?php endforeach; ?>
                                        <?php endif; ?>                                       
                                        
                                    <?php } ?>

                                </div>
                                <!-- /#portfolio-slider --> 
      
                                <!-- /.featured-item -->
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#city-portfolio -->

            <?php elseif( get_row_layout() == 'about_city' ): ?>

                <div id="city-features">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="cf-photo">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                </div>
                                <!-- /.cf-photo -->
                            </div>
                            <!-- /.col-md-5 -->
                            <div class="col-md-7">
                                <div class="cf-content">
                                    <h2><?php the_sub_field('main_title_about'); ?></h2>
                                    <?php the_sub_field('content_block_about'); ?>
                                </div>
                                <!-- /.cf-content -->
                            </div>
                            <!-- /.col-md-7 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="city-more-info">
                                    <?php the_sub_field('content_block_main'); ?>
                                </div>
                            </div>
                            <!-- /.col-md-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /#city-features -->

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>    

    <div id="city-contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cc-content">
                        <img src="<?php bloginfo('template_directory'); ?>/img/ico/ecwce-box-white.png" alt="" width="100">
                        <h2><?php the_field('main_title_bottom_cta_city'); ?></h2>
                        <h3><?php the_field('subtitle_bottom_cta_city'); ?></h3>
                        <div class="header-cta">
                            <a href="tel:<?php the_field('phone_number_city_header'); ?>"><i class="twf twf-ln-phone-handset"></i> <?php the_field('phone_number_city_header'); ?></a>
                        </div>
                        <!-- /.header-cta -->
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col -->
                <div class="col">
                    <?php include(TEMPLATEPATH . '/inc/inc-quote.php'); ?>
                </div>
                <!-- /.col-->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#city-contact -->
   
<?php
get_footer();
