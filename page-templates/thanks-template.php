<?php
/**
 * Template Name: Thank You Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>
	<header id="inner-header" style="background-image: url(<?php the_field('background_image_thanks'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                        <h1><?php the_field('main_title_thanks_header'); ?></h1>
                    </div>
                    <!-- /.header-caption -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </header>

    <div id="regular-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fit-wrap">
                        <?php the_field('content_block_thanks'); ?>
                        <a href="<?php the_field('button_link_thanks'); ?>" class="back"><?php the_field('button_label_thanks'); ?></a>
                        <!-- /.back -->
                    </div>
                    <!-- /.fit-wrap -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#regular-page -->

<?php get_footer(); ?>

