<?php
/**
 * The template for displaying a page query
 *
 * This template is used to display a custom query for pages.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

$args = array(
	'post_type' => 'page',
);

$the_query = new WP_Query( $args );
?>

<div class="query page">
	<?php
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		get_template_part( 'template-parts/components/result', 'page' );
	endwhile;
	?>
</div>
