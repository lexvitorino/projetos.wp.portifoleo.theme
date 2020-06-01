<?php
function ap_theme_styles() {
	wp_enqueue_style('google-lato_fonts', "https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic");
	wp_enqueue_style('google-montserrat_fonts', "https://fonts.googleapis.com/css?family=Montserrat:400,700");
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/assets/plugins/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/styles.css');
	wp_enqueue_script('google-all_js', get_template_directory_uri().'/assets/fontawesome/js/all.js', null, true);

	wp_enqueue_script('jquery-rss_js', get_template_directory_uri().'/assets/plugins/jquery-rss/dist/jquery.rss.min.js', array('jquery'), false, true);
	wp_enqueue_script('popper_js', get_template_directory_uri().'/assets/plugins/popper.min.js', array('jquery', 'jquery-rss_js'), false, true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery', 'popper_js'), false, true);
	wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/main.js', array('jquery', 'popper_js', 'jquery-rss_js', 'bootstrap_js'), false, true);
}

function ap_after_setup() {
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
	add_theme_support("custom-logo");

	register_nav_menu("primary", "Header Menu");
}











