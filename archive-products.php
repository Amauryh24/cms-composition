<?php
/*
Template Name: PAGE-Des-Produits
*/
get_header();
echo ('ici tout la liste des produits');
get_footer();
?>
<h1><?php the_title(); ?></h1>

<?php

$title_page = get_the_title();

$my_posts = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '5', 'category_name' => $title_page));

	if($my_posts->have_posts()) :
    while($my_posts->have_posts()) : $my_posts->the_post(); ?>
		<!-- ICI TES ARTICLES PAR ARTICLES. IL FAUT SEULEMENT FAIRE UN CODE, ET CELUI-CI VA SE REPÉTER PAR ARTICLE SI ARTICLE IL Y A. -->

	<div class="article-par-article">
		<?php the_title(); ?>
	</div>
    <?php echo get_the_ID(); ?>

	<?php endwhile; ?>
<?php else: ?>
	<p>Aucune article a été trouvé.</p>
<?php endif;

wp_reset_query(); //resetting the page query
?>
<br><br><p>ARCHIVE-PRODUCTS.PHP</p><br><br>
