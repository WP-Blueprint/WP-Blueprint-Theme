<?php
/**
 * WP Blueprint Theme Classic Utility: Navigations
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the NavigationHandler in order to register Navigations.
 */
class Navigations extends \WPBlueprint\Theme\Core\Handlers\Navigation {

	/**
	 * Constructor: Registering navigations
	 */
	public function __construct() {
		$navigations = array(
			'header' => __( 'Header Menu', 'default' ),
		);

		parent::set_navigations( $navigations );
	}
}
