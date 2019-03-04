<?php get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1 class="page-title__text">
			<?php print get_the_title(); ?>
		</h1>
	</div>
</div>


<main class="page-main page-main--aside">


	<div class="container-content">
		<section class="container">
		<?php
		the_content();
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
		</section>

	</div>

	<aside class="container container-aside">
		<?php get_sidebar(); ?>
	</aside>

	<?php get_footer(); ?>