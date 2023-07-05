<?php
/**
 * WP Blueprint Theme Classic Utility: Enqueue
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the EnqueueHandler in order to EnqueueHandler new Script and Styles.
 */
class Enqueue extends \WPBlueprint\Theme\Core\Handlers\Enqueue {

	/**
	 * Constructor: Enqueueing styles and scripts.
	 */
	public function __construct() {

		$styles_and_scripts = [
			[
				'handle'  => 'main-style',
				'src'     => mix( 'css/style.css' ),
				'deps'    => [],
				'version' => '1.0.0',
				'media'   => 'all',
				'hook'    => 'wp_enqueue_scripts',
			],
			[
				'handle'    => 'main-script',
				'src'       => mix( 'js/app.js' ),
				'deps'      => [],
				'version'   => '1.0.0',
				'in_footer' => true,
				'hook'      => 'wp_enqueue_scripts',
			],
			[
				'handle'    => 'services-ajax-script',
				'src'       => mix( 'js/ajax/services.js' ),
				'deps'      => [],
				'version'   => '1.0.0',
				'in_footer' => true,
				'hook'      => 'wp_enqueue_scripts',
			],
			[
				'handle'    => 'website-carbon-badges',
				'src'       => 'https://unpkg.com/website-carbon-badges@1.1.3/b.min.js',
				'deps'      => [],
				'version'   => '1.1.3',
				'in_footer' => true,
				'hook'      => 'wp_enqueue_scripts',
			],
		];

		parent::set_styles_and_scripts( $styles_and_scripts );
	}

	/**
	 * Registers custom styles and scripts.
	 *
	 * @param array $item The item to enqueue.
	 * @return void
	 */
	protected function enqueue_item( array $item ): void {
		parent::enqueue_item( $item );

		// Localize the script with new data.
		if ( 'services-ajax-script' === $item['handle'] ) {
			$ajax_params = array(
				'ajax_url'    => admin_url( 'admin-ajax.php' ),
				'nonce_field' => wp_create_nonce( 'my_nonce' ),
			);
			wp_localize_script( 'services-ajax-script', 'ajax_params', $ajax_params );
		}
	}
}
