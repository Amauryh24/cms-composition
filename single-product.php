<?php
/*
Template Name: PAGE-d'un-produit
*/
get_header();
echo ('un produit');
get_footer();
?>
<h1><?php the_title(); ?></h1>
<?php

$title_page = get_the_title();
echo  get_the_ID();

	$id = get_the_ID();
	$billet = get_post($id);
	$title = $billet->post_title;
	$date = $billet->post_date;
	$contenu = $billet->post_content;
	$contenu = apply_filters('the_content', $contenu);
	$contenu = str_replace(']]>', ']]>', $contenu);
?>

<div id="billet">
	<?php echo "<h1>$title</h1><p>$contenu</p><strong>$date</strong>"; ?>
</div>
<?php
wp_reset_query(); //resetting the page query
?>
<br><br><p>SINGLE-PRODUCT.PHP</p><br><br>
