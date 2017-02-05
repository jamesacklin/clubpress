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

			<!-- Homepage header via custom fields -->
      <?php if ( have_rows( 'carousel_items' ) ) : ?>
  			<div class="homepage-header">
          <div class="slider">
            <ul>
              <?php while ( have_rows( 'carousel_items' ) ) : the_row(); ?>
                <li>
                  <div class="slide">
                    <div class="column">
                      <?php if ( get_sub_field( 'slide_illustration') ) { ?>
                  			<img src="<?php the_sub_field( 'slide_illustration' ); ?>" />
                  		<?php } ?>
                    </div>
                    <div class="column">
                      <h2><?php the_sub_field( 'slide_header' ); ?></h2>
                      <p><?php the_sub_field( 'slide_text' ); ?></p>
                      <a href="<?php the_sub_field( 'button_link' ); ?>" class="button button-inverted"><?php the_sub_field( 'button_text' ); ?></a>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
  			</div>
      <?php else : ?>
        <?php // no rows found ?>
      <?php endif; ?>

      <!-- Homepage lede, hard-coded for now -->
      <div class="homepage-lede">
        <div class="content">
          <h2>The preferred solution for club-to-member communications.</h2>
          <p>Build member loyalty and grow membership with a tailor-made app customized to fit your organization. Whether you manage a small group or a huge club, Apps4Clubz streamlines your club’s member operations and treats your members to superior service.</p>
          <a href="/contact-us/" class="button">Contact Us</a>
        </div>
      </div>

			<!-- Homepage features via custom field -->
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

      <!-- Homepage testimonals via Jetpack -->
			<?php get_template_part('components/features/testimonials/testimonials'); ?>

      <!-- Leaving the contact form in "content" for now, eventually its own custom field -->
			<article>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		</main>
	</div>

<?php get_footer(); ?>

<?php endif; ?>

<script>
  $('document').ready(function(){
    $('.slider').unslider({
      autoplay: true,
      speed: 750,
      delay: 7000,
      nav: true,
      arrows: true,
      // animateHeight: true,
    });
    $('.slider').hover(function(){
      $(this).unslider('stop');
    }, function(){
      $(this).unslider('start');
    });
  });
</script>
