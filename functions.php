<?php

add_action("wp_enqueue_scripts", "style_theme");
add_action("wp_footer", "scripts_theme");
add_action("after_setup_theme", "theme_register_nav_menu");
add_action("widgets_init", "register_my_widgets");

function style_theme() {
    wp_enqueue_style("style", get_stylesheet_uri());
    wp_enqueue_style("theme_style", get_template_directory_uri() . "/assets/css/style.css");
}

function scripts_theme() {
    wp_enqueue_script("theme_scripts", get_template_directory_uri() . "/assets/js/main.js");
}

function theme_register_nav_menu() {
    register_nav_menu("top", "Меню в шапке");
	register_nav_menu("footer", "Меню в подвале сайта");
	add_theme_support("title-tag");
	add_theme_support("post-thumbnails", array("post"));
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	function new_excerpt_more( $more ){
		global $post;
		return '<a href="'. get_permalink($post) . '">Читать дальше...</a>';
	}
	// удаляет H2 из шаблона пагинации
	add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
	function my_navigation_template( $template, $class ){
		/*
		Вид базового шаблона:
		<nav class="navigation %1$s" role="navigation">
			<h2 class="screen-reader-text">%2$s</h2>
			<div class="nav-links">%3$s</div>
		</nav>
		*/

		return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
		</nav>    
		';
	}

	// выводим пагинацию
	the_posts_pagination( array(
		'end_size' => 2,
	) ); 
}

function register_my_widgets(){
	register_sidebar( array(
		'name' => "Right sidebar",
		'id' => "right_sidebar",
		'description' => 'sidebar for post',
		'class' => '',
		'before_widget' => "<div>",
		'after_widget' => "</div>",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n",
	) );
}