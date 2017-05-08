<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Friends_of_Noise
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<script>
		$("body")
			.css("background-image", "url(<?php echo get_post_meta($post->ID, 'bg-img', true); ?>)")
			.css("color", "<?php echo get_post_meta($post->ID, 'font-color', true); ?>");
		$("body a")
			.css("color", "<?php echo get_post_meta($post->ID, 'link-color', true); ?>")

	</script>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'friendsofnoise' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!-- <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'friendsofnoise' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
