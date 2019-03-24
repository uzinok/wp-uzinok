<?php
get_header();
?>

		<?php if ( have_posts() ) : ?>

<div class="page-title">
	<div class="container">
			<?php the_archive_title( '<h1 class="page-title__text">', '</h1>' );
		
		the_archive_description( '', '' ); ?>
	</div>
</div>

<main class="page-main page-main--aside">


	<div class="container-content">
		<section class="container container--column">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</section>

	</div>

	<aside class="container container-aside">
		<?php get_sidebar(); ?>
	</aside>

	<?php get_footer(); ?>
