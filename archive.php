<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since   1.0
 * @package wp-blueprint/theme-classic
 * @link    https://github.com/WP-Blueprint/wp-blueprint-theme-core
 * @license https://www.gnu.org/licenses/gpl-3.0 GPL-3.0
 */

get_header();
?>
<div class="content-grid alignwide"> 
	<div class="content-container is-layout-constrained">

			<header class="entry-header alignwide">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="entry-content alignwide">
				<div class="query <?php echo esc_attr( get_post_type() ); ?>">
				<?php
				if ( have_posts() ) :

					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/components/result', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :
					get_template_part( 'template-parts/components/result', 'none' );

				endif;


				?>
			</div><!-- .entry-content -->
		</div>
	</div>
</div>

<?php
get_footer();
