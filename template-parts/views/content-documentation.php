<?php
/**
 * Template part for displaying posts
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

?>

<div class="content-grid alignwide"> 
	<aside>
		<?php echo esc_html( generate_package_navigation() ); ?>
	</aside>
	<div class="content-container">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php echo do_shortcode( '[breadcrumb]' ); ?>
				<?php
				the_title( '<h1 class="entry-title">', '</h1>' );


				if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						wpbp_posted_on();
						wpbp_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<?php wpbp_post_thumbnail(); ?>

			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wpblueprint' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpblueprint' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php wpbp_entry_footer(); ?>
				<?php generate_documentation_child_navigation( get_the_id() ); ?>
		</footer><!-- .entry-footer -->
		</article><!-- #post-<?php the_ID(); ?> -->
	</div>
</div>
