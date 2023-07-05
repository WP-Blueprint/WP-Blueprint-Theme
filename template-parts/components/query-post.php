<?php
/**
 * The template for displaying a post query
 *
 * This template is used to display a custom query for posts.
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

$args = array(
	'post_type' => 'post',
);

$the_query = new WP_Query( $args );
?>

<div class="query post">
	<?php
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		get_template_part( 'template-parts/components/result', 'post' );
	endwhile;
	?>
</div>
