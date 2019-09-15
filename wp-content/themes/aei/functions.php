<?php 

function load_stylesheets(){
	wp_register_style('app_style', get_template_directory_uri() . '/dist/app.css', array(), false, 'all');
	wp_enqueue_style(['app_style']);

	wp_register_style('main_style', get_template_directory_uri() . '/dist/style.css?cb=123', array(), false, 'all');
	wp_enqueue_style(['main_style']);
} 

function load_javascript(){
	wp_enqueue_script( 'appJS', get_template_directory_uri() . '/dist/app.min.js', array(), 1, true );
	add_action('wp_enqueue_scripts', 'appJS');

	wp_enqueue_script( 'customJS', get_template_directory_uri() . '/dist/app.custom.js?cb=123', array(), 1, true );
	add_action('wp_enqueue_scripts', 'customJS');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'load_javascript');

add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'top-center-menu' => __('Top Center Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),
	)
);

function nav_class($classes, $item, $args){
	if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'nav_class' , 10 , 3);

function nav_anchor_class($classes, $item, $args){
	if($args->add_a_class) {
        $classes[] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'nav_anchor_class' , 10 , 3);

?>