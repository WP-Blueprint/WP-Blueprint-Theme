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
	<div class="content-container">

		<header class="entry-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		?>
		</header><!-- .page-header -->

		<div class="entry-content">
		<?php
		if ( have_posts() ) :
			echo generate_documentation_child_navigation();
		endif;


		?>
		</div><!-- .entry-content -->
		</div>
	</div>
</div>

<?php
get_footer();
