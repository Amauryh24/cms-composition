<?php 
/*
Template Name: PAGE-ACCUEIL
*/
get_header();
?>

<div class="bandeau">
	<div class="bandeau-img-left">
        <img src="<?php echo get_field('bandeau_image_g')['sizes']['home_top']; ?>">

        <a href="#">
        <div class="container-content-g">    
                <div class="bandeau-titre-g">
                    <h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
                </div>
                <div class="bandeau-texte-g">
                    <p>Voyagez dans un espace découpé en zones thématiques, entre des marques mondialement renommées, des designers exclusifs et des créateurs belges.</p>
                </div>
        </div>
        </a>
    </div>
    
	<div class="bandeau-img-right">
		<img src="<?php echo get_field('bandeau_image_d')['sizes']['home_top']; ?>">
		<h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>
	</div>
</div>

<?php get_footer(); ?>



