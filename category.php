<?php get_header(); ?>

    <header id="blog-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                        <h1 class="text-center"><?php single_cat_title('Category: '); ?></h1>
                        <p><p><?php the_field('subtitle_blog_page' , get_option('page_for_posts')); ?></p></p>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>
    <div id="blogs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-filter">
                        <ul>
                            <?php echo get_the_category_list(', '); ?>
                        </ul>
                    </div>
                    <!-- /.blog-filter -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="blog-items">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <?php while ( have_posts() ) : the_post(); ?>
                                                
                                <div class="blog-item">
                                    <div class="row">
                                        <div class="col-md-4">
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
                                        </div>
                                        <!-- /.col-md-4 -->
                                        <div class="col-md-8">
                                            <div class="blog-content">
                                                <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <?php the_field('excerpt_text'); ?>
                                                <a href="<?php echo get_permalink(); ?>" class="read-more">Read More</a>
                                                <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                            </div>
                                            <!-- /.blog-content -->
                                        </div>
                                        <!-- /.col-md-8 -->
                                    </div>
                                    <!-- /.row -->
                                </div>           
                            
                            <?php endwhile; ?> 

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
    </div>
    <!-- /#blogs -->
   

<?php get_footer(); ?>
