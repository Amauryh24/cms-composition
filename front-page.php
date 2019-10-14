<?php 
/*
Template Name: PAGE-ACCUEIL
*/
get_header();
?>

<div class="bandeau">
	<div class="bandeau-img-left">
		<img src="<?php echo get_field('bandeau_image_g')['sizes']['home_top']; ?>">
		<div class="bandeau-titre-g">
			<h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
		</div>
	</div>
	<div class="bandeau-img-right">
		<img src="<?php echo get_field('bandeau_image_d')['sizes']['home_top']; ?>">
		<h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>
	</div>
</div>

<?php get_footer(); ?>



