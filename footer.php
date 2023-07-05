<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of #main and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<?php get_sidebar(); ?>

</main><!-- #main -->

<footer role="contentinfo">
	<?php get_template_part( 'template-parts/layouts/footer' ); ?>
</footer>

<?php wp_footer(); ?>

</body>

</html>
