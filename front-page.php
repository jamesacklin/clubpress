<?php
/**
 * The static front page template
 *
 * @package Apps4Clubz
 */

if ('posts' == get_option('show_on_front')) :

    get_template_part('index');

else :

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('components/features/hero-image/content', 'hero'); ?>
			<?php endwhile; ?>

			<!-- Homepage header -->
			<div class="homepage-header">
				<div class="homepage-banner">
					<div class="content">
						<img src="<?php echo get_template_directory_uri() ?>/assets/logo-placeholder.svg">
					</div>
					<div class="demo">
						<div class="phone-slideshow">
							<img src="http://apps4clubz.com/images/mockup-events.jpg">
						</div>
					</div>
				</div>
				<div class="homepage-lede">
					<div class="content">
						<p>Build member loyalty and grow membership with a tailor-made app customized to fit your organization. Whether you manage a small group or a huge club, Apps4Clubz streamlines your club’s member operations and treats your members to superior service.</p>
						<a href="#" class="button">Contact Us</a>
					</div>
				</div>
			</div>


			<!-- Homepage features-->
			<?php if (have_rows('homepage_features')) : ?>
				<div class="homepage-features">
					<?php while (have_rows('homepage_features')) : the_row(); ?>
						<div class="homepage-feature">
							<?php if (get_sub_field('feature_illustration')) { ?>
								<img src="<?php the_sub_field('feature_illustration'); ?>" />
							<?php } ?>
							<h2><?php the_sub_field('feature_name'); ?></h2>
							<h3><?php the_sub_field('feature_subhead'); ?></h3>
							<p><?php the_sub_field('feature_text'); ?></p>
						</div>
					<?php endwhile; ?>
				</div>
			<?php else : ?>
				<?php // no rows found?>
			<?php endif; ?>

			<?php get_template_part('components/features/testimonials/testimonials'); ?>

			<article>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		</main>
	</div>
<?php get_footer(); ?>

<?php endif; ?>
