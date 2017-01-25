		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				if ( has_custom_logo() ) {
				    echo '<img src="'. esc_url( $logo[0] ) .'">';
				} else {
				    echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1>';
				} ?>
			</a>
		</div><!-- .site-branding -->
