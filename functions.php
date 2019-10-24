<?php
define('CDN_MATERIALIZE_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'); ////DISABLE MATERIALIZE
define('CDN_MATERIALIZE_JS', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
function project_scripts()
{
	// Chargement des styles
	wp_enqueue_style('project_materialize_css', CDN_MATERIALIZE_CSS, array(), PROJECT_VERSION, 'all'); ////DISABLE MATERIALIZE
	wp_enqueue_style('project_custom_css', get_template_directory_uri() . '/css/main.css', PROJECT_VERSION, 'all');

	// Chargement des scripts
	// > pour le dernier paramètre : false = dans <head> ou true = avant </body>
	wp_enqueue_script('project_materialize_js', CDN_MATERIALIZE_JS, array(), PROJECT_VERSION, true);
	wp_enqueue_script('project_custom_js', get_template_directory_uri() . '/js/main.js', array('project_materialize_js'), PROJECT_VERSION, true); // false = dans <head> ou true = avant </body>
}
add_action('wp_enqueue_scripts', 'project_scripts');

add_image_size('home_top',1500,1250,false);
add_image_size( 'fullsize', 1500, 1250 );

// RETIRER GUTENBERG
// for posts
add_filter('use_block_editor_for_post', '__return_false', 10);
// for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// ACF REST API - OPTIONS
//Enable the option show in rest
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );
// Enable the option edit in rest
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );


// UTILITAIRES
function project_setup() {

	// Support des vignettes
	add_theme_support('post-thumbnails');

	// Support du titre de page
	add_theme_support('title-tag');


	// Enlève générateur de version WP
	remove_action('wp_head', 'wp_generator');

	// Enlève les guillemets << à la française >>
	remove_filter('the_content', 'wptexturize');
}
add_action('after_setup_theme', 'project_setup');

register_nav_menu( 'primary', 'Primary Menu' );
?>