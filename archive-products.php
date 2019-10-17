<?php
/*
Template Name: MAGASIN
*/
get_header();
?>
<h1><?php the_title(); ?></h1>

<?php

$title_page = get_the_title();

$my_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '5', 'category_name' => $title_page));

	if($my_posts->have_posts()) :
    while($my_posts->have_posts()) : $my_posts->the_post(); ?>
		<!-- ICI TES ARTICLES PAR ARTICLES. IL FAUT SEULEMENT FAIRE UN CODE, ET CELUI-CI VA SE REPÉTER PAR ARTICLE SI ARTICLE IL Y A. -->

	<div class="article-par-article">
		<?php
			echo the_title(), ' (id: ';
     	echo get_the_ID(), ') (category: ';
			// get category slug in wordpress
	      $cats =  get_the_category();
	      $cat = $cats[0];
	    	$cat_slug = $cat->slug;
	    	echo $cat_slug, ')';
			// echo get_cat_name( the_category_ID($echo = false) );
		?>
	</div>

	<?php endwhile; ?>
<?php else: ?>
	<p>Aucune article a été trouvé.</p>
	<br><br><p>ARCHIVE-PRODUCTS.PHP</p><br><br>
<?php endif;

wp_reset_query(); //resetting the page query
get_footer();
?>
