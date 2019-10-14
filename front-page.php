<?php 
/*
Template Name: PAGE-ACCUEIL
*/
get_header();
?>

<div class="bandeau">
	<div class="bandeau-img-left">
        <img src="<?php echo get_field('bandeau_image_g')['sizes']['home_top']; ?>">
        <div class="container-content-g">
            <a href="#">
		    <div class="bandeau-titre-g">
                <h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
            </div>
            <div class="bandeau-texte-g">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, sapiente. Provident, maxime ea fugiat at temporibus iste ut magni unde officia soluta odio sequi sed, est possimus! Voluptatibus, corrupti architecto, impedit id repellendus doloribus quod natus beatae unde voluptas explicabo.</p>
            </div>
            </a>
        </div>
	</div>
	<div class="bandeau-img-right">
		<img src="<?php echo get_field('bandeau_image_d')['sizes']['home_top']; ?>">
		<h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>
	</div>
</div>

<?php get_footer(); ?>



