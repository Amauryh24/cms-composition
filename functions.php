<?php
define('CDN_MATERIALIZE_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'); ////DISABLE MATERIALIZE
define('CDN_MATERIALIZE_JS', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');
function project_scripts()
{
	// Chargement des styles
	wp_enqueue_style('project_materialize_css', CDN_MATERIALIZE_CSS, array(),'1.0.0', 'all'); ////DISABLE MATERIALIZE
	wp_enqueue_style('project_custom_css', get_template_directory_uri() . '/css/main.css','1.0.0', 'all');

	// Chargement des scripts
	// > pour le dernier paramètre : false = dans <head> ou true = avant </body>
	wp_enqueue_script('project_materialize_js', CDN_MATERIALIZE_JS, array(),'1.0.0', true);
	wp_enqueue_script('project_custom_js', get_template_directory_uri() . '/js/main.js', array('project_materialize_js'),'1.0.0', true); // false = dans <head> ou true = avant </body>
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

if( function_exists('acf_add_options_page') ) {
	// Page principale
	acf_add_options_page(array(
		'page_title'    => 'Options',
		'menu_title'    => 'Options',
		'menu_slug'     => 'options-generales',
		'capability'    => 'edit_posts',
		'redirect'      => true
	));

  // Première sous-page
	acf_add_options_sub_page(array(
		'page_title'    => 'Options d\'Entête',
		'menu_title'    => 'Entête',
		'parent_slug'   => 'options-generales',
	));
  // Deuxième sous-page
	acf_add_options_sub_page(array(
		'page_title'    => 'Options de Pied de Page',
		'menu_title'    => 'Pied de page',
		'parent_slug'   => 'options-generales',
	));
}

?>
