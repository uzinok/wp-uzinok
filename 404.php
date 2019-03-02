<?php get_header(); ?>

<div class="page-title">
	<div class="container">
		<h1 class="page-title__text">Error - 404!</h1>
		<p class="page-title__subtitle">
			<?php esc_html_e( 'Ошибка!!! нет такой страницы. проверьте URL или воспользуйтесь поиском.', 'wp_uzinok' ); ?>
		</p>
	</div>
</div>

<main class="page-main">
	<div class="container-content">
		<section class="container section">
			<h2 class="section-header">Поиск</h2>
			<?php
					get_search_form();
					?>

					<h2 class="section-header">Свежие рубрики</h2>

					<ul>
							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>
						</ul>

						<h2 class="section-header">Страницы</h2>

			<?php wp_nav_menu(array(
                "theme_location" => "404",
                "container" => null,
                "menu_id" => "404",
                "menu_class" => "",
                "depth" => 2,
            )); ?>
		</section>
	</div>
</main>

<?php
get_footer();