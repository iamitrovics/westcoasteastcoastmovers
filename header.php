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

    <meta name="google-site-verification" content="As2INbptQBQifqI5OBv6ZnwETzvTF9zYbmXm4PqBarM" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MWPZPG7');</script>
    <!-- End Google Tag Manager -->


	<?php if( get_field('head_code_snippet', 'options') ): ?>
		<?php the_field('head_code_snippet', 'options'); ?>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWPZPG7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<?php if( get_field('body_code_snippet', 'options') ): ?>
		<?php the_field('body_code_snippet', 'options'); ?>
	<?php endif; ?>

	<div class="menu-overlay"></div>
	<div class="main-menu-sidebar visible-xs visible-sm visible-md" id="menu">

		<header>
			<a href="javascript:;" class="close-menu-btn"><img src="<?php bloginfo('template_directory'); ?>/img/ico/close-x.svg" alt=""></a>
		</header>
		<!-- // header  -->


		<nav id="sidebar-menu-wrapper">
			<img src="<?php the_field('website_logo_general', 'options'); ?>" alt="" class="mobile-logo">
			<div id="menu">    
				<ul class="nav-links">
					<?php
					wp_nav_menu( array(
						'menu'              => 'mobile',
						'theme_location'    => 'mobile',
						'depth'             => 2,
						'container'         => false,
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => false,
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'items_wrap' => '%3$s',
						'walker'            => new wp_bootstrap_navwalkermobile())
					);
					?>  
				</ul>
			</div>
			<!-- // menu  -->

		</nav> 
		<!-- // sidebar menu wrapper  -->

	</div>
	<!-- // main menu sidebar  -->	

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

                        <div id="mobile-menu--btn" class="d-lg-none">
                            <a href="javascript:;">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                        <!-- // mobile  -->	

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