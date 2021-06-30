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

    <header id="inner-header" class="services-header" style="background-image: url(<?php the_field('background_image_serv_single'); ?>);">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="header-caption">

                        <?php 
                        $values = get_field( 'custom_title_serv_single_header' );
                        if ( $values ) { ?>
                            <h1><?php the_field('custom_title_serv_single_header'); ?></h1>
                        <?php 
                        } else { ?>
                            <h1><?php the_title();  ?></h1>
                        <?php } ?>
                        
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

    <div id="services-page">

        <?php if( have_rows('content_sections_layout_serv') ): ?>
            <?php while( have_rows('content_sections_layout_serv') ): the_row(); ?>
                <?php if( get_row_layout() == 'intro' ): ?>

                    <section id="services-intro">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 offset-xl-1 col-xl-5">
                                    <div class="about-content">
                                        <h2><?php the_sub_field('main_title'); ?></h2>
                                        <?php the_sub_field('content_block'); ?>
                                    </div>
                                    <!-- /.about-content -->
                                </div>
                                <!-- /.col -->
                                <div class="col-lg-6 col-xl-5">
                                    <div class="about-photo">
                                        <?php
                                        $imageID = get_sub_field('featured_image');
                                        $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                        ?> 

                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    </div>
                                    <!-- /.about-photo -->
                                </div>
                                <!-- /.col-lg-5 -->
                            </div>
                        </div>
                        <!-- /.container -->
                    </section>
                    <!-- /#services-intro -->                    

                <?php elseif( get_row_layout() == 'services' ): ?>

                    <div id="service-features">
                        <div class="container">
                            <div class="row">
                                <div class="offset-xl-1 col-xl-10">
                                    <div class="intro-text">
                                        <?php the_sub_field('intro_text_services'); ?>
                                    </div>
                                    <div class="row">

                                        <?php if( have_rows('list_of_services') ): ?>
                                            <?php while( have_rows('list_of_services') ): the_row(); ?>

                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="sf-box">
                                                        <span class="sf-ico"><?php the_sub_field('icon'); ?></span>
                                                        <h3><?php the_sub_field('title'); ?></h3>
                                                        <?php the_sub_field('content_block'); ?>
                                                    </div>
                                                    <!-- /.sf-box -->
                                                </div>
                                                <!-- /.col-xl-3 col-lg-6 col-md-6 -->

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>
                                    <!-- /.row -->
                                    <div class="blue-divider"></div>
                                    <!-- /.blue-divider -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /#service-features -->                    

                <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                    <div id="service-bottom-info">
                        <div class="container container-new">
                            <div class="row">
                                <div class="col">
                                    <div class="sbi-up">
                                        <?php the_sub_field('content_block_full'); ?>
                                    </div>
                                    <!-- /.sbi-up -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /#service-bottom-info -->       
                    
                <?php elseif( get_row_layout() == 'info_panel' ): ?>

                    <div id="service-bottom-info">
                        <div class="container  container-new">
                            <div class="row">
                                <div class="offset-xl-1 col-xl-5">
                                    <div class="sbi-left">
                                        <?php the_sub_field('intro_text'); ?>
                                    </div>
                                    <!-- /.sbi-left -->
                                </div>
                                <!-- /.offset-xl-1 col-xl-5 -->
                                <div class="col-xl-5">
                                    <div class="sbi-right">
                                    <?php if( have_rows('features_list') ): ?>
                                        <?php while( have_rows('features_list') ): the_row(); ?>

                                            <div class="sbir-item">
                                                <?php the_sub_field('icon'); ?>
                                                <?php the_sub_field('text'); ?>
                                            </div>
                                            <!-- /.sbir-item -->

                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                    </div>
                                    <!-- /.sbi-right -->
                                </div>
                                <!-- /.col-xl-5 -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="offset-xl-1 col-xl-10">
                                    <div class="blue-divider"></div>
                                    <!-- /.blue-divider -->
                                </div>
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <div class="offset-xl-1 col-xl-10">
                                    <div class="sbi-bottom">
                                        <?php the_sub_field('bottom_cta_text'); ?>
                                    </div>
                                    <!-- /.sbi-bottom -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /#service-bottom-info -->      

                    <?php elseif( get_row_layout() == 'side_list' ): ?>
                    
                        <div id="service-quote" class="packing-area">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-11">
                                        <!-- /.row -->
                                        <div class="row">
                                            <div class="col-xl-6 packing-photo">
                                                <?php
                                                $imageID = get_sub_field('featured_image_side');
                                                $image = wp_get_attachment_image_src( $imageID, 'cropfull-image' );
                                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                ?> 

                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            </div>
                                            <!-- /.col-xl-6 -->
                                            <div class="col-xl-6">
                                                <div class="at-services">
                                                    <div class="intro-new">
                                                        <?php the_sub_field('content_block_side'); ?>
                                                    </div>
                                                    <!-- /.intro -->

                                                    <?php if( have_rows('features_list_side') ): ?>
                                                    <?php while( have_rows('features_list_side') ): the_row(); ?>

                                                        <div class="at-item">
                                                            <p><strong><?php the_sub_field('title'); ?></strong>
                                                                <?php the_sub_field('text_feat'); ?>
                                                            </p>
                                                        </div>
                                                        <!-- /.at-item -->

                                                    <?php endwhile; ?>
                                                    <?php endif; ?>

                                                </div>
                                                <!-- /.at-services -->
                                            </div>
                                            <!-- /.col-xl-6 -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.col-lg-10 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container -->
                        </div>
                        <!-- /#service-quote -->                    

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>    

    </div>

    <!-- /#services-page -->

<?php
get_footer();
