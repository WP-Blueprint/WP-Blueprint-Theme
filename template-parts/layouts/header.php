<?php
/**
 * Template part layout for displaying the header
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<div class="header containers layouts content-wrapper">
	<div class="alignwide">
		<div class="logo"><a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( mix( 'global/logo.svg' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> Logo"></a></div>
		<div class="widget">
			<div class="kebab">Kebab Icon</div>
			<?php get_template_part( 'template-parts/widgets/widget', 'header' ); ?>
		</div>
	</div>
</div> <!-- .header containers layouts  -->
