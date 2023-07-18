<?php
/**
 * WP Blueprint Theme Classic Utility: Widget Areas
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the WidgetAreaHandler in order to register WidgetAreas.
 */
class WidgetAreas extends \WPBlueprint\Theme\Core\Handlers\WidgetArea {

	/**
	 * Constructor: Registering widget areas
	 */
	public function __construct() {
		$widget_areas = array(
			array(
				'id'            => 'header-widget',
				'name'          => 'header-widget',
				'description'   => 'Widget area for the header',
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
			array(
				'id'            => 'footer-widget',
				'name'          => 'footer-widget',
				'description'   => 'Widget area for the footer',
				'before_widget' => '<div class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			),
		);

		parent::set_widget_areas( $widget_areas );
	}
}
