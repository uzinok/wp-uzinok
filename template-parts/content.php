<div class="container container--two-column">
	<h2 class="section-header">
		<?php
		if ( is_singular() ) :
			the_title( '', '' );
		else :
			the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</h2>
	<?php wp_uzinok_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_excerpt();
		?>
	</div><!-- .entry-content -->

</div>
