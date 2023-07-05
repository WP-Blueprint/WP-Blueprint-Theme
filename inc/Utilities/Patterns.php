<?php
/**
 * WP Blueprint Theme Classic Utility: Patterns
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the PatternHandler in order to register Patterns.
 */
class Patterns extends \WPBlueprint\Theme\Core\Handlers\Pattern {

	/**
	 * Constructor: Registering patterns
	 */
	public function __construct() {
		$patterns = array(
			// Define the Patterns here.
		);

		$categories = array(
			// Define the Patterns Categories here.
		);

		parent::set_patterns( $patterns );
		parent::set_categories( $categories );
	}
}
