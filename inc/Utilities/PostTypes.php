<?php
/**
 * WP Blueprint Theme Classic Utility: Post Types
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the PosttypeHandler in order to register Posttypes.
 */
class PostTypes extends \WPBlueprint\Theme\Core\Handlers\PostType {

	/**
	 * Constructor: Registering posttypes
	 */
	public function __construct() {
		$posttypes = array(
			array(
				'service',
				array(
					'labels'              => array(
						'name'               => __( 'Service', 'default' ),
						'singular_name'      => __( 'Service', 'default' ),
						'menu_name'          => __( 'Services', 'default' ),
						'parent_item_colon'  => __( 'Parent: Services', 'default' ),
						'all_items'          => __( 'All Services', 'default' ),
						'view_item'          => __( 'View Services', 'default' ),
						'add_new_item'       => __( 'Add New Service', 'default' ),
						'add_new'            => __( 'Add New', 'default' ),
						'edit_item'          => __( 'Edit Service', 'default' ),
						'update_item'        => __( 'Update Service', 'default' ),
						'search_items'       => __( 'Search Services', 'default' ),
						'not_found'          => __( 'Not Found', 'default' ),
						'not_found_in_trash' => __( 'Not found in Trash', 'default' ),
					),
					'label'               => 'service',
					'description'         => __( ' The "Services" custom post type allows you to present and describe the various services your business offers in a structured format.', 'default' ),
					'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
					'taxonomies'          => array( 'services' ),
					'hierarchical'        => false,
					'public'              => true,
					'show_ui'             => true,
					'show_in_menu'        => true,
					'show_in_nav_menus'   => true,
					'show_in_admin_bar'   => true,
					'menu_position'       => 5,
					'can_export'          => true,
					'has_archive'         => true,
					'exclude_from_search' => false,
					'publicly_queryable'  => true,
					'capability_type'     => 'post',
					'show_in_rest'        => true,
					'menu_icon'           => 'dashicons-admin-tools',
				),
			),
			array(
				'documentation',
				array(
					'labels'              => array(
						'name'               => __( 'Documentation', 'default' ),
						'singular_name'      => __( 'Documentation', 'default' ),
						'menu_name'          => __( 'Documentation', 'default' ),
						'parent_item_colon'  => __( 'Parent Documentation', 'default' ),
						'all_items'          => __( 'All Documentation Pages', 'default' ),
						'view_item'          => __( 'View Documentation Page', 'default' ),
						'add_new_item'       => __( 'Add New Documentation Page', 'default' ),
						'add_new'            => __( 'Add New', 'default' ),
						'edit_item'          => __( 'Edit Documentation Page', 'default' ),
						'update_item'        => __( 'Update Documentation Page', 'default' ),
						'search_items'       => __( 'Search Documentation Pages', 'default' ),
						'not_found'          => __( 'No Documentation Pages found', 'default' ),
						'not_found_in_trash' => __( 'No Documentation Pages found in Trash', 'default' ),
					),
					'label'               => 'documentation',
					'description'         => __( 'The "Documentation" custom post type allows you to create and organize documentation pages with structured information.', 'default' ),
					'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
					'taxonomies'          => array( 'category', 'documentation_type' ),
					'hierarchical'        => true,
					'public'              => true,
					'show_ui'             => true,
					'show_in_menu'        => true,
					'show_in_nav_menus'   => true,
					'show_in_admin_bar'   => true,
					'menu_position'       => 6,
					'can_export'          => true,
					'has_archive'         => true,
					'exclude_from_search' => false,
					'publicly_queryable'  => true,
					'capability_type'     => 'post',
					'show_in_rest'        => true,
					'menu_icon'           => 'dashicons-book',
				),
			),
		);

		parent::set_posttypes( $posttypes );

	}
}
