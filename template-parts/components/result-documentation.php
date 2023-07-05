<?php
/**
 * Result: Documentation
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<article id="<?php echo esc_attr( get_post_type() ); ?>-<?php the_ID(); ?>" class="result documentation">
	<a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'service_github', true ) ); ?>" target="_blank"></a>
	<header class="entry header">
		<?php the_title( '<h4 class="entry-title has-m-font-size">', '</h4>' ); ?>
	</header><!-- .entry.header -->
	<div class="entry excerpt">
		<?php the_excerpt(); ?>
	</div><!-- .entry content -->

</article>
