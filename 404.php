<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

    <header id="inner-header" style="background-image: url(<?php the_field('background_image_ermac', 'options'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-caption">
                        <h1><?php the_field('main_title_ermac_header', 'options'); ?></h1>
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
                        <?php the_field('content_block_ermac', 'options'); ?>
                        <a href="<?php the_field('button_link_ermac', 'options'); ?>" class="back"><?php the_field('button_label_ermac', 'options'); ?></a>
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

<?php
get_footer();
