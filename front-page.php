<?php
/**
 * The static front page template
 *
 * @package Apps4Clubz
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'components/features/hero-image/content', 'hero' ); ?>
			<?php endwhile; ?>

			<?php if ( have_rows( 'homepage_features' ) ) : ?>
				<div class="homepage-features">
					<?php while ( have_rows( 'homepage_features' ) ) : the_row(); ?>
						<div class="homepage-feature">
							<?php if ( get_sub_field( 'feature_illustration') ) { ?>
								<img src="<?php the_sub_field( 'feature_illustration' ); ?>" />
							<?php } ?>
							<h2><?php the_sub_field( 'feature_name' ); ?></h2>
							<h3><?php the_sub_field( 'feature_subhead' ); ?></h3>
							<p><?php the_sub_field( 'feature_text' ); ?></p>
						</div>
					<?php endwhile; ?>
				</div>
			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>

			<?php get_template_part( 'components/features/testimonials/testimonials' ); ?>
		</main>
	</div>
<?php get_footer(); ?>

<?php endif; ?>
