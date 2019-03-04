<?php get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1 class="page-title__text">
			Поиск по: "
			<?php echo $_GET['s'];?>"
		</h1>
	</div>
</div>


<main class="page-main page-main--aside">


	<div class="container-content">
		<section class="container">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<a href="<?php the_permalink();?>">
				<?php the_title(); ?></a>

			<?php the_content(''); ?>

			<?php endwhile; else: ?>
			<p>Поиск не дал результатов.</p>
			<?php endif;?>

		</section>

	</div>

	<aside class="container container-aside">
		<?php get_sidebar(); ?>
	</aside>

	<?php get_footer(); ?>