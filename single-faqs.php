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


    <div id="faq-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="faq-nav">

                        <?php
                        $loop = new WP_Query( array( 'post_type' => 'faqs', 'posts_per_page' => 100) ); ?>  
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                           <h3><?php the_title(); ?></h3>
                           <ul>
                              <?php if( have_rows('qa_list_single') ): ?>
                                <?php $i=1; ?>
                                 <?php while( have_rows('qa_list_single') ): the_row(); ?>
                                    <li><a href="<?php echo get_permalink(); ?>#qa-<?php echo $i; ?>"><?php the_sub_field('question'); ?></a></li>
                                 <?php $i++; endwhile; ?>
                              <?php endif; ?>

                           </ul>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>      

                    </div>
                    <!-- /#faq-nav -->
                </div>
                <!-- /.col -->
                <div class="col">
                    <div id="faq-body">
                        <?php 
                        $values = get_field( 'custom_title_faq_single' );
                        if ( $values ) { ?>
                            <h2><?php the_field('custom_title_faq_single'); ?></h2>
                        <?php 
                        } else { ?>
                            <h2><?php the_title(); ?></h2>
                        <?php } ?>
                        
                        <div class="intro">
                            <?php the_field('intro_text_faq_single'); ?>
                        </div>
                        <!-- /.intro -->

                        <?php if( have_rows('qa_list_single') ): ?>
                            <?php $i=1; ?>
                            <?php while( have_rows('qa_list_single') ): the_row(); ?>

                                <h3 id="qa-<?php echo $i; ?>"><?php the_sub_field('question'); ?></h3>
                                <div class="content">
                                    <?php the_sub_field('answer'); ?>
                                </div>

                            <?php $i++; endwhile; ?>
                        <?php endif; ?>

                    </div>
                    <!-- /#faq-body -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#faq-page -->

<?php get_footer(); ?>
