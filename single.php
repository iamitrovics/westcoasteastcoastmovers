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

    <div id="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-body">
                        <div class="blog-headline">
                            <div class="blog-meta">
                                <span><a href="#">Blog</a></span> 
                                <span><?php echo get_the_date( 'F j, Y' ); ?></span>
                            </div>
                            <!-- /.blog-meta -->
                            <h1><?php the_title(); ?></h1>
                            <span class="blog-author">
                            By <a href="#">moderator</a>
                            </span>
                            <!-- /.blog-author -->
                        </div>
                        <!-- /.blog-headline -->
                        <div class="blog-content">
                            <div class="featured-photo">
                            <?php
                                $imageID = get_field('featured_image_blog');
                                $image = wp_get_attachment_image_src( $imageID, 'cropfull-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                            </div>
                            <!-- /.featured-photo -->

                            <?php if( have_rows('content_layout_blog') ): ?>
                                <?php while( have_rows('content_layout_blog') ): the_row(); ?>
                                    <?php if( get_row_layout() == 'intro_text' ): ?>

                                        <div class="intro-text">
                                            <?php the_sub_field('intro_content'); ?>
                                        </div>
                                        <!-- // intro text  -->

                                    <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                        <div class="content">
                                            <?php the_sub_field('content_block'); ?>
                                        </div>
                                        <!-- // contnet  -->

                                    <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                        <div class="image-holder">
                                            <?php
                                            $imageID = get_sub_field('featured_image');
                                            $image = wp_get_attachment_image_src( $imageID, 'cropfull-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                            <small><?php the_sub_field('image_caption'); ?></small>
                                        </div>
                                        <!-- // image holder  -->

                                    <?php elseif( get_row_layout() == 'video' ): ?>

                                        <div class="video-holder">
                                            <?php the_sub_field('embedded_code'); ?>
                                        </div>
                                        <!-- // video  -->

                                    <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                                        <div class="quote-cta--single">
                                            <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                            <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                        </div>
                                        <!-- // single  -->                                        

                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <!-- /.blog-content -->

                        <div class="blog-share" id="bottom-form">
                            
                            <?php include(TEMPLATEPATH . '/inc/inc-quote.php'); ?>

                        </div>
                        <!-- /.blog-share -->

                        <div class="blog-navigation">
                            <?php $previous = get_previous_post();
                            $next = get_next_post(); ?>
                            <div class="previous blog-nav-item">
                                    <small>
                                    <div class="blog-nav-content">
                                        <?php if (strlen(get_previous_post()->post_title) > 0) { ?>
                                        <span class="direction">Previous</span>
                                        <?php } ?>
                                        <span class="title"><?php previous_post_link('%link'); ?></span>
                                    </div>
                                    <!-- /.blog-nav-content -->
                                </small>
                            </div>
                            <!-- /.previous blog-nav-item -->  
                            <div class="next blog-nav-item">
                                <small>
                                    <div class="blog-nav-content">
                                        <?php if (strlen(get_next_post()->post_title) > 0) { ?>
                                        <span class="direction">Next</span>
                                        <?php } ?>
                                        <span class="title"><?php next_post_link('%link'); ?></span>
                                    </div>
                                    <!-- /.blog-nav-content -->
                                </small>
                            </div>
                            <!-- /.next blog-nav-item -->  
                        </div>
                        <!-- /.blog-navigation -->
                        <div class="related-posts">
                            <div class="row">


                                <?php $orig_post = $post;
                                global $post;
                                $categories = get_the_category($post->ID);
                                if ($categories) {
                                $category_ids = array();
                                foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                                $args=array(
                                'category__in' => $category_ids,
                                'post__not_in' => array($post->ID),
                                'posts_per_page'=> 4, // Number of related posts that will be shown.
                                'ignore_sticky_posts'=>1
                                );

                                $my_query = new wp_query( $args );
                                if( $my_query->have_posts() ) {
                                while( $my_query->have_posts() ) {
                                $my_query->the_post();?>

                                    <div class="col-md-3">
                                        <div class="related-box">
                                            <a href="<?php echo get_permalink(); ?>">
                                                <h4><?php the_title(); ?></h4>
                                                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                                <!-- /.date -->
                                            </a>
                                        </div>
                                        <!-- /.related-box -->
                                    </div>
                                    <!-- /.col-md-3 -->

                                <?
                                }
                                echo '</ul></div>';
                                }
                                }
                                $post = $orig_post;
                                wp_reset_query(); ?>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.related-posts -->
                    </div>
                    <!-- /.blog-body -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-page -->
   
<?php
get_footer();
