<?php
/**
 * The template used for displaying hero content
 *
 * @package Apps4Clubz
 */
?>

<?php if ( has_post_thumbnail() ) : ?>
	<div class="clubpress-hero">
		<?php the_post_thumbnail( 'clubpress-hero' ); ?>
	</div>
<?php endif; ?>
