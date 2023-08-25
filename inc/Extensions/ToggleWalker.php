<?php
/**
 * WP Blueprint Theme Classic Extension: Walker Page
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

namespace WPBlueprint\Theme\Classic\Extensions;

use Walker_Page;

/**
 * This class initializes a new Walker Page.
 */
class ToggleWalker extends Walker_Page {

	/**
	 * Start EL
	 *
	 * @param string  $output          The output buffer.
	 * @param WP_Post $page            The page object.
	 * @param int     $depth           The depth of the page.
	 * @param array   $args            The arguments.
	 * @param int     $current_page    The current page ID.
	 */
	public function start_el( &$output, $page, $depth = 0, $args = array(), $current_page = 0 ) {
		// Avoid using extract(). It is highly discouraged due to complexity and unintended issues it might cause.
		$indent = '';

		if ( $depth ) {
			$indent = str_repeat( "\t", $depth );
		}

		$output .= $indent . '<li class="page_item page-item-' . $page->ID;
		if ( ! empty( $current_page ) ) {
			$_current_page = get_post( $current_page );
			if ( $_current_page && in_array( $page->ID, $_current_page->ancestors, true ) ) {
				$output .= ' current_page_ancestor';
			}
			if ( $page->ID === $current_page ) {
				$output .= ' current_page_item';
			} elseif ( $_current_page && $page->ID === $_current_page->post_parent ) {
				$output .= ' current_page_parent';
			}
		} elseif ( get_option( 'page_for_posts' ) === $page->ID ) {
			$output .= ' current_page_parent';
		}

		$output .= '"><a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . esc_html( apply_filters( 'the_title', $page->post_title, $page->ID ) ) . '</a>';

		if ( $args['has_children'] ) {
			$output .= '<button class="toggle-children"></button>';
		}
	}
}
