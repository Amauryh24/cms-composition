<?php
define('PROJECT_VERSION', '1.0.1');
define('CDN_MATERIALIZE_CSS', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css');
define('CDN_MATERIALIZE_JS', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js');

// TAILLES IMAGES PERSONNALISEES
function add_custom_image_size() {
	add_image_size( 'bandeau-accueil', 1500, 1250 );
}
add_action( 'init', 'add_custom_image_size' );


// CHARGMENT DANS LE FRONT-END
function project_scripts()
{
	// Chargement des styles
	wp_enqueue_style('composition_materialize', CDN_MATERIALIZE_CSS, array(), PROJECT_VERSION, 'all');
	wp_enqueue_style('composition_custom', get_template_directory_uri() . '/css/main.css', array('composition_materialize'), PROJECT_VERSION, 'all');

	// Chargement des scripts
	// > pour le dernier paramètre : false = dans <head> ou true = avant </body>
	wp_enqueue_script('composition_materialize', CDN_MATERIALIZE_JS, array(), PROJECT_VERSION, true);
	wp_enqueue_script('composition_custom', get_template_directory_uri() . '/js/main.js', array('composition_materialize'), PROJECT_VERSION, true); // false = dans <head> ou true = avant </body>
}
add_action('wp_enqueue_scripts', 'project_scripts');

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
	// add_theme_support('title-tag');

	// Register Custom Navigation Walker
	//require_once('includes/wp_bootstrap_navwalker.php')

	// Active la gestion des menus
	register_nav_menus( array('primary' => 'principal', 'secondary' => 'secondaire') );

	// Enlève générateur de version WP
	remove_action('wp_head', 'wp_generator');

	// Enlève les guillemets << à la française >>
	remove_filter('the_content', 'wptexturize');
}
add_action('after_setup_theme', 'project_setup');

// fonction d'affichage de la date et catégorie d'un 'post'
// Exemple :
// <time class="entry-date" datetime="date-au-format-iso">date du calendrier</time> dans la catégorie xyz

function project_give_me_meta_01($date1, $date2, $cat) {

	$chaine = 'publié le <time class="entry-date" datetime=';
	$chaine .= $date1;
	$chaine .= '">';
	$chaine .= $date2;
	$chaine .= '</time> dans la categorie ';
	$chaine .= $cat;

	return $chaine;

}

?>
