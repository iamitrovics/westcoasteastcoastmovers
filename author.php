<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<header id="categories-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="categories-breadcrub">
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li><?php the_author(); ?></li>
                    </ul>
                </div>
                <!-- /.categories-breadcrub -->
                <div class="header-caption">
                    <h1>All Posts Of <?php the_author(); ?></h1>
                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>

<div id="categories">
    <div class="container">
        <div class="row">
            <?php
                            
            while(have_posts()): the_post(); ?>

            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="blog-item">
                    <div class="blog-photo">
                        <a href="<?php echo get_permalink(); ?>">
                            <?php 
                            $values = get_field( 'featured_image_blog' );
                            if ( $values ) { ?>
                                <?php
                                $imageID = get_field('featured_image_blog');
                                $image = wp_get_attachment_image_src( $imageID, 'city-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                                                     
                            <?php 
                            } else { ?>
                                <img src="<?php bloginfo('template_directory'); ?>/img/misc/placeholder.jpg" alt="">
                            <?php } ?>

                        </a>
                    </div>
                    <!-- /.blog-photo-->
                    <div class="blog-content">
                        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_field('excerpt_text'); ?>
                        <a href="<?php echo get_permalink(); ?>" class="read-more">Read More</a>
                        <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                    </div>
                    <!-- /.blog-content -->
                </div>
            </div>
            <!-- /.col-xl-4 col-lg-6 col-md-6 -->
            
            <?php endwhile; ?> 
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="custom-pager">
                    <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                </div>
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.blog-items -->


<?php
get_footer(); ?>
