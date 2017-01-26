<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Apps4Clubz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'clubpress' ),
				'after'  => '</div>',
			) );
		?>



		<?php if ( have_rows( 'feature_grid' ) ) : ?>
			<div class="feature-grid" columns=<?php echo the_field( 'feature_columns' ); ?>>
				<?php while ( have_rows( 'feature_grid' ) ) : the_row(); ?>
					<?php if ( get_sub_field( 'feature_illustration') ) { ?>
						<div class="feature double">
							<div class="image">
								<img src="<?php the_sub_field( 'feature_illustration' ); ?>" />
							</div>
						<?php } else { ?>
							<div class="feature">
						<?php }?>
						<div class="text">
							<?php if (get_sub_field ('feature_name')) { ?>
								<h3><?php the_sub_field( 'feature_name' ); ?></h3>
							<?php } ?>
							<?php the_sub_field( 'feature_text' ); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

	</div>
	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'clubpress' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer>
</article><!-- #post-## -->
