<?php
/**
 * Custom image sizes
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// general
add_image_size('preview-image', 300, 200, TRUE);
add_image_size('full-image', 1920, 9999, FALSE);
add_image_size('crop-image', 640, 9999, FALSE);
add_image_size('cropfull-image', 1280, 9999, FALSE);

// Ciy
add_image_size('gallery-image', 512, 384, TRUE);
add_image_size('city-image', 500, 500, TRUE);
add_image_size('client-image', 120, 120, TRUE);

