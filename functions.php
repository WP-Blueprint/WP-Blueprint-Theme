<?php
/**
 * WP Blueprint Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit();

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'WPBlueprint\\Theme\Core\Initializer' ) ) :
	WPBlueprint\Theme\Core\Initializer::register_services();
endif;

if ( class_exists( 'WPBlueprint\\Theme\Classic\Initializer' ) ) {
	WPBlueprint\Theme\Classic\Initializer::register_services();
}

