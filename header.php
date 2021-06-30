<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="google-site-verification" content="JrGPofQ2t4gXA_RXDY0jR1D89mBiTQS2_e2DmCtPU8o" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png"  href="<?php echo get_template_directory_uri(); ?>/img/ico/favicon.png">
	<?php if( get_field('head_code_snippet', 'options') ): ?>
		<?php the_field('head_code_snippet', 'options'); ?>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

	<?php if( get_field('body_code_snippet', 'options') ): ?>
		<?php the_field('body_code_snippet', 'options'); ?>
	<?php endif; ?>

    <div class="menu-overlay"></div>
        <div class="main-menu-sidebar">
            <header class="visible-xs visible-sm visible-md">
                <a href="javascript:;" class="close-menu-btn"><img src="<?php bloginfo('template_directory'); ?>/img/ico/close.svg" alt="Close Menu"></a>
            </header>
            <!-- // header  -->        
            <div id="mobile__brand">
                <img src="<?php the_field('mobile_logo_general', 'options'); ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <!-- // brand  -->
            <div id="menu">
                <ul>
                    <?php if( have_rows('menu_items_mobile', 'options') ): ?>
                        <?php while( have_rows('menu_items_mobile', 'options') ): the_row(); ?>

                            <?php if (get_sub_field('item_type') == 'Single Item') { ?>
                                <li><a href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label'); ?></a></li>
                            <?php } elseif (get_sub_field('item_type') == 'Dropdown') { ?>
                                <li>
                                    <a href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label'); ?></a>
                                    <ul>
                                        <?php if( have_rows('dropdown_items') ): ?>
                                            <?php while( have_rows('dropdown_items') ): the_row(); ?>
                                                <li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('label_dropdown'); ?></a></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php } ?>   

                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <!-- // menu  -->
        </div>
        <!-- // mobile menu  -->

        <div id="cor-notice">
            <?php the_field('top_notice_text', 'options'); ?>
        </div>

        <nav id="sidebar">
            <div id="sidebar-in">
                <div class="sidenav-brand">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('website_logo_general', 'options'); ?>" alt="<?php bloginfo('name'); ?>"></a>
                </div>
                <!-- /.sidenav-brand -->
                <ul>

                    <?php if( have_rows('menu_items_desktop', 'options') ): ?>
                        <?php while( have_rows('menu_items_desktop', 'options') ): the_row(); ?>

                            <?php if (get_sub_field('item_type') == 'Single Item') { ?>
                                <li class="nav-item"><a class="nav-link" href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label'); ?></a></li>
                            <?php } elseif (get_sub_field('item_type') == 'Dropdown') { ?>
                                <li class="has-menu">
                                    <a href="<?php the_sub_field('item_link'); ?>"><?php the_sub_field('item_label'); ?></a>
                                    <ul>
                                        <?php if( have_rows('dropdown_items') ): ?>
                                            <?php while( have_rows('dropdown_items') ): the_row(); ?>
                                                <li><a href="<?php the_sub_field('link_to_page'); ?>"><?php the_sub_field('label_dropdown'); ?></a></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php } ?>   

                        <?php endwhile; ?>
                    <?php endif; ?>

                </ul>
                <div class="sticky-phone">
                    <a href="tel:<?php the_field('phone_number_comp_info', 'options'); ?>"> <?php the_field('phone_number_comp_info', 'options'); ?></a>
                </div>
            </div>
            <!-- /#sidebar-in -->
        </nav>
        <!-- /#sidebar -->

        <div id="mobile-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div id="mobile-logo">
                            <a href="index.php"><img src="<?php the_field('mobile_logo_general', 'options'); ?>" alt="<?php bloginfo('name'); ?>"></a>
                        </div>
                        <!-- /#mobile-logo -->
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div id="mobile-phone">
                            <a href="tel:<?php the_field('phone_number_comp_info', 'options'); ?>">
                                <i class="fas fa-phone"></i>
                                <?php the_field('phone_number_comp_info', 'options'); ?>
                            </a>
                        </div>
                        <!-- /#mobile-phone -->
                    </div>
                    <!-- /.col -->
                    <div class="col">
                        <div id="top__mobile">
                            <a href="javascript:;" class="menu-btn">
                                <span></span>
                                <span></span>
                                <span class="last-span"></span>
                            </a>
                        </div>
                        <!-- /#top__mobile -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#mobile-header -->
        
        <div class="page-wrapper">

            <div id="top-license">
                <p><?php the_field('license_notice_header', 'options'); ?></p>
            </div>