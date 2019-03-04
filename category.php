<?php get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1 class="page-title__text">
			<?php single_cat_title();?>
		</h1>
		<?php echo category_description( get_category_by_slug('category-slug')->term_id ); ?>
	</div>
</div>


<main class="page-main page-main--aside">


	<div class="container-content">
		<section class="container container--column">
			<?php 
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            ?>
			<div class="container container--two-column">
				<h2 class="section-header"><a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a></h2>
				<p>
					<?php the_excerpt(); ?>
				</p>
				<p class="section-tags">
					<?php the_tags("", " / "); ?>
				</p>
			</div>
			<?php
				}
				the_posts_pagination();
    }
?>
		</section>

	</div>

	<aside class="container container-aside">
		<?php get_sidebar(); ?>
	</aside>

	<?php get_footer(); ?>