<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Friends_of_Noise
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<script>
			<?php
				$page_id = ( 'page' == get_option( 'show_on_front' ) ? get_option( 'page_for_posts' ) : $post->ID );
				$bg_img = get_post_meta($page_id, 'bg-img', true);
				$font_color = get_post_meta($page_id, 'font-color', true);
				$link_color = get_post_meta($page_id, 'link-color', true);
			?>

				$("body")
					.css("background-color", "#241F20")
					.css("background-image", "url(<?php echo $bg_img ?>)")
					.css("color", "<?php echo $font_color ?>");
				$("body a")
					.css("color", "<?php echo $link_color ?>");
			</script>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
