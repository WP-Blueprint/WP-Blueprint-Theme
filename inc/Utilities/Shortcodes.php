<?php
/**
 * WP Blueprint Theme Classic Utility: Shortcodes
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://wp-blueprint.dev/documentation/themes/core/handlers/shortcodes/
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Utilities;

/**
 * This class extends the ShortcodeHandler in order to register Shortcodes.
 */
class Shortcodes extends \WPBlueprint\Theme\Core\Handlers\Shortcode {

	/**
	 * Constructor: Registering Shortcodes.
	 */
	public function __construct() {
		$shortcodes = array(
			array(
				'copyright',
				array( $this, 'copyright_callback' ),
			),
			array(
				'services',
				 array( $this, 'services_callback' ),
			),
			array(
				'footprint',
				 array( $this, 'footprint_callback' ),
			),
			array(
				'breadcrumb',
				 array( $this, 'breadcrumb_callback' ),
			),
		);

		parent::set_shortcodes( $shortcodes );

	}

	/**
	 * Fetches the earliest and latest post date, and constructs a copyright string.
	 *
	 * The copyright string includes the blog name, a link to WP Blueprint, and the year range
	 * from the earliest post date to the latest post date.
	 *
	 * @global wpdb $wpdb WordPress database abstraction object.
	 * @param array  $atts Shortcode attributes.
	 * @param string $content Shortcode content.
	 * @return string The constructed copyright string.
	 */
	public function copyright_callback( $atts, $content = null ): string {
		global $wpdb;

		// Fetch earliest and latest post date.
		$post_dates = $wpdb->get_row(
			"SELECT MIN(post_date) as first, MAX(post_date) as last FROM $wpdb->posts WHERE post_status = 'publish'"
		);

		// Get years from post dates.
		$creation_year     = ! empty( $post_dates->first ) ? gmdate( 'Y', strtotime( $post_dates->first ) ) : gmdate( 'Y' );
		$last_updated_year = ! empty( $post_dates->last ) ? gmdate( 'Y', strtotime( $post_dates->last ) ) : gmdate( 'Y' );

		// Construct year string.
		$year = ( $creation_year !== $last_updated_year ) ? "$creation_year - $last_updated_year" : $creation_year;

		// Construct copyright string.
		$copyright  = '<p><span class="copyright">&copy; ' . $year . ' ' . get_bloginfo( 'name' ) . '</span> | ';
		$copyright .= '<span class="produced">' . __( 'Produced by', 'wpblueprint' ) . ' ';
		$copyright .= '<a href="https://wp-blueprint.dev" target="_blank" rel="noopener noreferrer" aria-label="' . __( 'WP Blueprint (opens in a new window)', 'wpblueprint' ) . '">';
		$copyright .= 'WP Blueprint</a></span></p>';

		return $copyright;
	}

	/**
	 * Outputs the Service Query
	 *
	 * @return string The constructed services string.
	 */
	public function services_callback(): string {
		// Fetch service categories.
		$terms = get_terms(
			array(
				'taxonomy'   => 'services',
				'hide_empty' => false,
				'orderby'    => 'name',
				'order'      => 'DESC',
			)
		);

		$output = '<div class="query service">';

		// If there are any terms.
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			$output .= '<div class="service-categories">';

			// Loop through each term.
			foreach ( $terms as $term ) {
				$output .= '<h2 class="has-xxl-font-size"><a href="#" class="service-category" data-slug="' . $term->slug . '">' . $term->name . '</a></h2>';
			}

			$output .= '</div>';
			$output .= '<div class="services-content"></div>';
		}

		$output .= '</div>';

		return $output;
	}

	/**
	 * Outputs the Carbon Footprint Badge
	 *
	 * @return string The constructed footprint string.
	 */
	public function footprint_callback(): string {
		$footprint = '<div id="wcb" class="carbonbadge"></div>';
		return $footprint;
	}

	/**
	 * Outputs the Breadcrumb
	 *
	 * @return string The HTML markup for the breadcrumbs.
	 */
	public function breadcrumb_callback() {
		$post_type = 'documentation';
		$delimiter = '<span class="breadcrumb-delimiter"> / </span>';
		$home_text = 'Documentation';
		$before    = '<span class="breadcrumb-item">';
		$after     = '</span>';

		$output = '';

		if ( ! is_front_page() ) {
			$output .= '<div class="breadcrumb">';
			$output .= $before . '<a href="' . get_post_type_archive_link( $post_type ) . '">' . $home_text . '</a>' . $after;

			if ( is_singular( $post_type ) ) {
				global $post;

				// Get the parent pages.
				$parents = array_reverse( get_post_ancestors( $post->ID ) );

				foreach ( $parents as $parent ) {
					$output .= $delimiter . $before . '<a href="' . get_permalink( $parent ) . '">' . get_the_title( $parent ) . '</a>' . $after;
				}

				// Add the current page.
				$output .= $delimiter . $before . get_the_title( $post->ID ) . $after;
			}

			$output .= '</div>';
		}

		return $output;
	}
}
