<?php 
/*
Template Name:Page_À-propos 
*/
?>

<?php get_header(); ?>
<section id="get_projets_archi">
    <h1><?php the_field('premiere_section_title') ?></h1>
    <div class="row">
        <div class="col s12 m12 l8 offset-l1">


            <div class="carousel carousel_slider">
                <div class="carousel carousel_slider">
                    <ul>
                        <?php           
                        if( have_rows('premiere_section_repeater') ):
                            while ( have_rows('premiere_section_repeater') ) : the_row(); ?>

                        <li class="carousel-item"> <img class="image" src="<?php the_sub_field('image'); ?>"></li>

                        <?php  endwhile;
                        else :
                        endif;
                        ?>

                    </ul>
                </div>


            </div>
        </div>
</section>
<section id='a_propos'>

    <div class="row content">
        <div class="col-left1 col s12 m10 l5  offset-m1  ">
            <h2 class="title"><?php the_field('histoire_title') ?></h2>
            <p class="sous-title"><?php the_field('histoire_subtitle') ?></p>
            <?php the_field('histoire_wysiwyg') ?>
        </div> <!-- notre histoire-->

        <div class="col-right1 col s12 m10 l7 offset-m1 black">
            <ul>
                <?php                   
                        if( have_rows('histoire_repeater') ):                       
                            while ( have_rows('histoire_repeater') ) : the_row(); ?>

                <li>
                    <span><?php   the_sub_field('annee'); ?> </span>

                    <p> <?php   the_sub_field('resume'); ?></p>
                </li>
                <?php  endwhile;
                        else :
                        endif;
                        ?>
            </ul>
        </div> <!-- liste des projets par années-->

        <div class="col-left2 col s12 m10 l5 offset-m1 ">
            <img class="image" src="<?php echo get_field('caractere_image')['sizes']['fullsize']; ?>">
        </div> <!-- img pub-->

        <div class="col-right2 col s12 m10 l7 offset-m1">
            <div>
                <h2 class="title"><?php the_field('caractere_title') ?></h2>
                <p class="sous-title"><?php the_field('caractere_subtitle') ?></p>
                <p class="wysiwyg"> <?php the_field('caractere_wysiwyg') ?></p>
            </div>
        </div> <!-- Vous, nous et votre maison-->

    </div>
</section>

<section id="banner-content">
    <div class=" col s12 m10 l5  offset-m1  ">
        <img class="image" src="<?php echo get_field('contact_image-banner')['sizes']['fullsize']; ?>">

        <a href="http://localhost:8080/firstWordpress/contact/">
            <h2 class="texte-banner"><?php the_field('contact_texte-banner') ?></h2>
            <div>
                contact

            </div>

        </a>

    </div>

</section>
<?php get_footer(); ?>