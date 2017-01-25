<?php
/**
 * The template used for displaying testimonials
 *
 * @package Apps4Clubz
 */
?>
<div <?php post_class(); ?>>

	<blockquote>
		<?php the_content(); ?>
		<?php the_title( '<cite>&mdash;', '</cite>' ); ?>
	</blockquote>

</div>
