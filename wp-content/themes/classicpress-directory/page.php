<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the ClassicPress construct of pages
 * and that other 'pages' on your ClassicPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

	<div id="primary">
		<main id="main">
		<?php if( is_page(9) ){
			echo "<h2>Featured Plugins</h2>";
			get_random_plugin_posts();
			echo "<hr>";
			echo "<h2>Featured Themes</h2>";
			get_random_theme_posts();
		}

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
