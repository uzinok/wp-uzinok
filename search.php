<?php get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1 class="page-title__text">
			Результыты поиска по: "
			<?php echo $_GET['s'];?>"
		</h1>
	</div>
</div>


<main class="page-main page-main--aside search">


	<div class="container-content">
		<section class="container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h2 class="section-header"><a href="<?php the_permalink();?>">
				<?php the_title(); ?></a></h2>

			<!-- <?php the_content(''); ?> -->
			<?php the_excerpt(); ?>

			<?php endwhile; else: ?>
			<h2 class="section-header">Поиск не дал результатов.</h2>
			<?php endif;?>

		</section>

	</div>

	<aside class="container container-aside">
		<?php get_sidebar(); ?>
	</aside>

	<?php get_footer(); ?>