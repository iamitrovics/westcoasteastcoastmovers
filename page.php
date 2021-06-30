<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

    <section id="regular-page" class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_field('main_title_regular_page'); ?></h1>
                    <?php if( have_rows('sections_layout_regular') ): ?>
                        <?php while( have_rows('sections_layout_regular') ): the_row(); ?>
                            <?php if( get_row_layout() == 'full_width_content' ): ?>

                                <div class="full-content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                
                            <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                <div class="image-holder">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'cropfull-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 

                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                                 
                                </div>
                                <!-- // image holder  -->

                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>                    
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /#regular-page -->

<?php
get_footer();
