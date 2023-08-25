<?php
/**
 * WP Blueprint Theme Classic Extension: AJAX Handler Extension
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Extensions;

/**
 * This class handles AJAX requests for the theme.
 */
class AJAX {

	/**
	 * AJAX constructor.
	 */
	public function __construct() {
		add_action( 'wp_ajax_fetch_service_posts', [ $this, 'fetch_service_posts' ] );
		add_action( 'wp_ajax_nopriv_fetch_service_posts', [ $this, 'fetch_service_posts' ] );
	}

	/**
	 * Handles the "fetch_service_posts" AJAX request.
	 */
	public function fetch_service_posts() {
		// Verify the nonce. If it isn't there, or we can't verify it, bail.
		if ( ! isset( $_POST['nonce_field'] ) || ! wp_verify_nonce( $_POST['nonce_field'], 'my_nonce' ) ) {
			wp_send_json_error();
		}

		// Get the service category slug from the AJAX request. If it isn't there, bail.
		if ( ! isset( $_POST['slug'] ) ) {
			wp_send_json_error();
		}

		$slug = sanitize_text_field( $_POST['slug'] );

		$args = array(
			'post_type'      => 'service',
			'posts_per_page' => -1,
			'tax_query'      => array(
				array(
					'taxonomy' => 'services',
					'field'    => 'slug',
					'terms'    => $slug,
				),
			),
		);

		// Query for service posts in the specified category.
		$query = new \WP_Query( $args );

		if ( $query->have_posts() ) {
			// Start buffering the output.
			ob_start();

			while ( $query->have_posts() ) {
				$query->the_post();

				// Get the template for each post.
				$post_id = get_the_ID();
				$post    = get_post( $post_id );
				setup_postdata( $post );

				// Get the template for each post.
				get_template_part( 'template-parts/components/result', get_post_type() );
			}

			// Get the buffered content.
			$content = ob_get_clean();

			// Always remember to reset the global post data after a custom query.
			wp_reset_postdata();

			wp_send_json_success( $content );
		} else {
			wp_send_json_error( 'No posts found for this category.' );
		}
	}
}
