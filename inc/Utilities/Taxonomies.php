<?php
/**
 * WP Blueprint Theme Classic Utility: Taxonomies
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/taxonomies/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the Taxonomy Handler in order to register Taxonomies.
 */
class Taxonomies extends \WPBlueprint\Theme\Core\Handlers\Taxonomy {

	/**
	 * Constructor: Registering Taxonomies.
	 */
	public function __construct() {
		$taxonomies = array(
			array(
				'services',
				'service',
				array(
					'labels'       => array(
						'name'              => 'Service Types',
						'singular_name'     => 'Service Type',
						'search_items'      => 'Search Service Types',
						'all_items'         => 'All Service Types',
						'parent_item'       => 'Parent Service Types',
						'parent_item_colon' => 'Parent Service Types:',
						'edit_item'         => 'Edit Service Type',
						'update_item'       => 'Update Service Type',
						'add_new_item'      => 'Add New Service Type',
						'new_item_name'     => 'New Service Type',
						'menu_name'         => 'Service Types',
					),
					'hierarchical' => true,
					'rewrite'      => array(
						'slug'       => 'services',
						'with_front' => true,
					),
					'show_ui'      => true,
					'show_in_rest' => true,
				),
			),
		);

		parent::set_taxonomies( $taxonomies );
	}
}
