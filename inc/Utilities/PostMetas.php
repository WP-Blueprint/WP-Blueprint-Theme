<?php
/**
 * WP Blueprint Theme Classic Utility: Post Metas
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/WPBlueprint-Classic-Classes
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class handles custom post meta fields for the theme.
 */
class PostMetas extends \WPBlueprint\Theme\Core\Handlers\PostMeta {

	/**
	 * Registers the custom post meta fields.
	 *
	 * @return void
	 */
	public function __construct() {
		$post_meta_fields = array(
			array(
				'id'          => 'service_github',
				'title'       => 'Service GitHub URL',
				'post_type'   => 'service',
				'context'     => 'normal',
				'priority'    => 'high',
				'field_type'  => 'url',
				'field_props' => '',
			),
			array(
				'id'          => 'service_packagist',
				'title'       => 'Service Packagist URL',
				'post_type'   => 'service',
				'context'     => 'normal',
				'priority'    => 'high',
				'field_type'  => 'url',
				'field_props' => '',
			),
		);

		parent::set_post_meta_fields( $post_meta_fields );
	}
}
