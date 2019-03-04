<?php

add_action("wp_enqueue_scripts", "style_theme");
add_action("wp_enqueue_scripts", "scripts_theme");
add_action("after_setup_theme", "theme_register_nav_menu");
add_action("widgets_init", "register_my_widgets");
add_action('pre_get_posts', 'get_posts_search_filter');

function style_theme() {
    wp_enqueue_style("style", get_stylesheet_uri());
	wp_enqueue_style("theme_style", get_template_directory_uri() . "/assets/css/style.css");
	if (is_home()) {
		wp_enqueue_style("theme_style", get_template_directory_uri() . "/assets/css/home.css");
	}
}

function scripts_theme() {
	if(is_home()) {
		wp_enqueue_script("theme_scripts", get_template_directory_uri() . "/assets/js/home_js.js");
	} else {
		wp_enqueue_script("theme_scripts", get_template_directory_uri() . "/assets/js/main.js");
	}
}

function theme_register_nav_menu() {
	register_nav_menu("top", "Меню в шапке");
	register_nav_menu("footer", "Меню в подвале сайта");
	register_nav_menu("404_not_found", "Полное меню для 404 NOT FOUND");
	register_nav_menu("header_paralax", "Меню навигации по главной странице");
	add_theme_support("title-tag");
	add_theme_support("post-thumbnails", array("post"));
	add_filter( 'excerpt_more', 'new_excerpt_more' );

	function new_excerpt_more( $more ){
		global $post;
		return '... <a class="post-link" href="' . get_permalink($post) . '">далее</a>';
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
			%3$s
		</nav>    
		';
	}

	// выводим пагинацию
	the_posts_pagination( array(
		'end_size' => 10,
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

	register_sidebar( array(
		'name' => "Right sidebar single",
		'id' => "right_sidebar_single",
		'description' => 'sidebar for single',
		'class' => '',
		'before_widget' => "<div>",
		'after_widget' => "</div>",
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => "</h2>\n",
	) );
}

function get_posts_search_filter( $query ){
	if ( !is_admin() && $query->is_main_query() && $query->is_search ) {
		$query->set('post_type', array('post') );
	}
}