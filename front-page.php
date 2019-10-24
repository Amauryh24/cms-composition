<?php 
/*
Template Name: PAGE-ACCUEIL
*/

?>
<?php get_header() ?>


<section id="accueil">

    <div id="bandeau" class="row">
        <div class="col s12 m6 l6">
            <img class="image" src="<?php echo get_field('bandeau_image_g')['sizes']['fullsize']; ?>">

            <div class="content content-left1">
                <a class="content-link" href="<?php the_field('introduction_link') ?>">
                    <div>
                        <h3 class="title"><?php the_field('bandeau_titre_g') ?></h3>
                        <h3 class="title_hover"><?php the_field('bandeau_survol_g_titre') ?></h3>
                        <p class="texte_hover"><?php the_field('bandeau_survol_g_texte_g') ?></p>
                        <p class="lien_hover" href="<?php the_field('introduction_link') ?>"> Le magasin
                            <img class="svg_hover" src='<?php bloginfo('template_directory'); ?>/svg/Group 1300.svg'
                                alt='' />
                        </p>
                        <img class="svg svg-left" src='<?php bloginfo('template_directory'); ?>/svg/fleche-droite.svg'
                            alt='' />
                    </div>
                </a>
            </div>

        </div>
        <div class="col s12 m6 l6">
            <img class="image" src="<?php echo get_field('bandeau_image_d')['sizes']['fullsize']; ?>">

            <div class="content content-right1">
                <a class="content-link" href="<?php the_field('centre_link') ?>">
                    <div>
                        <h3 class="title"><?php the_field('bandeau_titre_d') ?></h3>
                        <h3 class="title_hover"><?php the_field('bandeau_survol_d_titre') ?></h3>
                        <p class="texte_hover"><?php the_field('bandeau_survol_d_texte_d') ?></p>
                        <p class="lien_hover" href="<?php the_field('centre_link') ?>"> Découvrir le service d'archi
                            <img class="svg_hover" src='<?php bloginfo('template_directory'); ?>/svg/Group 1300.svg'
                                alt='' />
                        </p>
                        <img class="svg svg-right" src='<?php bloginfo('template_directory'); ?>/svg/fleche-droite.svg'
                            alt='' />
                    </div>
                </a>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
    
	<div class="bandeau-img-right">
		<img src="<?php echo get_field('bandeau_image_d')['sizes']['home_top']; ?>">
		<h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>
	</div>
</div>
>>>>>>> jf

    <div id="introduction" class="row">
        <div class="col-left1 col s12 m6 l5">
            <p class="texte"><?php the_field('introduction_texte') ?></p>
            <div class="content-left">
                <h2 class="title"><?php the_field('introduction_titre') ?></h2>
                <p class="wysiywyg"><?php the_field('introduction_wysiywyg') ?></p>

                <a class="lien" href="<?php the_field('introduction_link') ?>"> Le magasin
                    <img class="svg" src='<?php bloginfo('template_directory'); ?>/svg/Group 1300.svg' alt='' />
                </a>
            </div>
        </div>
        <div class="col-right1 col s12 m6 l4 offset-l2">
            <img class="image" src="<?php echo get_field('introduction_image')['sizes']['fullsize']; ?>">

        </div>
    </div>

    <div id="centre">
        <div class="row">
            <div class="col s12 m12 l6 offset-l2 ">
                <img class="svg" src='<?php bloginfo('template_directory'); ?>/svg/logo-small.svg' alt='' />
                <p class="wysiywyg"><?php the_field('centre_texte') ?>

                </p>
                <a class="lien" href="<?php the_field('centre_link') ?>"> Service d'archi d'intérieur
                    <img class="svg" src='<?php bloginfo('template_directory'); ?>/svg/Group 1300.svg' alt='' /></a>
            </div>
        </div>

    </div>

    <div id="inferieur">
        <div class="row">
            <div class="col-left col s12 m12 l6">
                <img class="image" src="<?php echo get_field('inferieur_image')['sizes']['fullsize']; ?>">
            </div>

            <div class="col-right col s12 m12 l6">
                <h2 class="title"><?php the_field('inferieur_titre') ?></h2>
                <p class="wysiywyg"><?php the_field('inferieur_wysiywyg') ?></p>
                <a class="lien" href="<?php the_field('inferieur_link') ?>"> Tapisserie d'ameublement
                    <img class="svg" src='<?php bloginfo('template_directory'); ?>/svg/Group 1300.svg' alt='' /></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>