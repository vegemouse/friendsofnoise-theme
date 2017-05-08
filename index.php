<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Friends_of_Noise
 */

get_header(); ?>

	<script>
	<?php
		$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_for_posts' ) : $post->ID );
		$bg_img = get_post_meta($page_id, 'bg-img', true);
		$font_color = get_post_meta($page_id, 'font-color', true);
		$link_color = get_post_meta($page_id, 'link-color', true);
	?>

		$("body")
			.css("background-color", "##ff033a")
			.css("background-image", "url(<?php echo $bg_img ?>)")
			.css("color", "<?php echo $font_color ?>");
		$("body a")
			.css("color", "<?php echo $link_color ?>");
	</script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
