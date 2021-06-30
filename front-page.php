<?php 
/**
 * Homepage / Front Page
**/
get_header(); ?>

    <header id="masheader" style="background-image: url(<?php the_field('background_image_hero_home'); ?>);" class="homeheader">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="<?php the_field('mobile_cover_hero_home'); ?>" alt="" class="mobile-cover">
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col">
                    <div class="header-caption">
                        <span class="title"><?php the_field('small_title_hero_home'); ?></span>
                        <h1><?php the_field('main_title_hero_home'); ?></h1>
                        <div class="header-cta">
                            <a href="tel:<?php the_field('phone_number_hero_home'); ?>"><i class="twf twf-ln-phone-handset"></i> <?php the_field('phone_number_hero_home'); ?></a>
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
    </header>

    <section id="services-area" class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2><?php the_field('main_title_services_home'); ?></h2>
                    <div class="services-list">
                        <div class="row">

                            <?php
                                $post_objects = get_field('list_of_services');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>

                                        <div class="col-md-6 col-xl-6">
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

    <section id="whoweare" class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="whoweare-content">
                        <h2><?php the_field('main_title_about_home'); ?></h2>
                        <?php the_field('content_block_about_home'); ?>
                    </div>
                    <!-- /.whoweare-content -->
                </div>
                <!-- /.col-xl-6 -->
                <div class="col-xl-6">
                    <div class="whoweare-photo">
                        <img src="<?php the_field('featured_image_about_home'); ?>" alt="">
                    </div>
                    <!-- /.whoweare-photo -->
                </div>
                <!-- /.col-xl-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonials">
                        <h2><?php the_field('main_title_test_home'); ?></h2>
                        <div id="testimonials-slider">

                            <?php
                                $post_objects = get_field('list_of_testimonials_home');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>

                                        <div>
                                            <div class="testimonial-text">
                                                <?php the_field('client_review_test'); ?>
                                            </div>
                                            <!-- /.testimonial-text -->
                                            <div class="testimonial-author">
                                                <span class="author"><?php the_title(); ?></span>
                                                <span class="title">via Google</span>
                                            </div>
                                            <!-- /.testimonial-author -->
                                        </div>

                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>

                        </div>
                        <!-- /#testimonials-slider -->
                    </div>
                    <!-- /#testimonials -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#whoweare -->

    <section id="features" class="section-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="features-in">
                        <div class="row">

                            <?php if( have_rows('why_us_list_repe') ): ?>
                                <?php while( have_rows('why_us_list_repe') ): the_row(); ?>

                                    <div class="col-md-6">
                                        <div class="feature-item">
                                            <img src="<?php the_sub_field('featured_image'); ?>" alt="">
                                        </div>
                                        <!-- /.feature-item -->
                                    </div>
                                    <!-- /.col-md-6 -->

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.features-in -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#features -->

<?php get_footer(); ?>
