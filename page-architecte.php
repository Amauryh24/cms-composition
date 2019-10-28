<?php
/*
Template Name: Page_Architecte
*/
?>

<?php get_header() ?>


<section id="get_projets_archi">
    <h1><?php the_field('diaporama_posts_projets_titre') ?></h1>
    <div class="row">
        <div class="col s12 m12 l8 offset-l1">

            <?php $query = new WP_Query(array(
                    'post_type' => 'projets',
                    'order' =>'ASC'));?>
            <div class="carousel carousel_slider">
                <ul>
                    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                    <li class="carousel-item">

                        <?php  while ( have_rows('contenu') ) : the_row();?>

                        <?php    if( get_row_layout() == 'image' ):?>
                        <img class="image" src="<?php the_sub_field('image'); ?>">

                        <?php    elseif( get_row_layout() == 'titre' ):?>
                        <a href=" <?php the_permalink(); ?>">
                            <p> <?php the_sub_field('titre') ?> </p>
                            <p>voir projet</p>
                        </a>


                        <?php endif; endwhile;?>
                    </li>
                    <?php endwhile;
                endif; ?>
                    <?php wp_reset_postdata();?>

                </ul>
            </div> <!-- fin du caarousel-->


        </div>
    </div>
</section>



<section id="archidinterieur">

    <div class="row content">
        <div class="col-left1 col s12 m10 l5  offset-m1  ">
            <h2 class="title"><?php the_field('etude_darchi_titre') ?></h2>
            <p class="sous-title"><?php the_field('etude_darchi_sous-titre') ?></p>
            <?php the_field('etude_darchi_wysiwyg') ?>
        </div> <!-- 150€-->
        <div class="col-right1 col s12 m10 l7 offset-m1 black">
            <ul>
                <?php                   
                        if( have_rows('etude_darchi_repeater') ):                       
                            while ( have_rows('etude_darchi_repeater') ) : the_row(); ?>

                <li> <?php   the_sub_field('texte'); ?></li>
                <?php  endwhile;
                        else :
                        endif;
                        ?>
            </ul>
        </div> <!-- liste-->
        <div class="col-left2 col s12 m10 l5 offset-m1 ">
            <img class="image" src="<?php echo get_field('nghi_&_stephan_image')['sizes']['fullsize']; ?>">
        </div> <!-- img de nghi & Stephan-->
        <div class="col-right2 col s12 m10 l7 offset-m1">
            <div>
                <h2 class="title"><?php the_field('nghi_&_stephan_titre') ?></h2>
                <p class="sous-title"><?php the_field('nghi_&_stephan_sous-titre') ?></p>
                <p class="wysiwyg"> <?php the_field('nghi_&_stephan_wysiwyg') ?></p>
            </div>
        </div> <!-- about nghi & Stephan-->
    </div> <!-- fin du row-->

    <div class="row tissus">
        <div class="col s12 m10 l9 offset-l2 offset-m1">
            <div class="carousel carousel_slider">
                <ul>
                    <?php           
                        if( have_rows('tissus_et_artisanat_repeteurimage') ):
                            while ( have_rows('tissus_et_artisanat_repeteurimage') ) : the_row(); ?>

                    <li class="carousel-item"> <img class="image" src="<?php the_sub_field('image'); ?>"></li>

                    <?php  endwhile;
                        else :
                        endif;
                        ?>

                </ul>
            </div>


            <h2 class="title"><?php the_field('tissus_et_artisanat_titre') ?></h2>
            <p class="sous-title"><?php the_field('tissus_et_artisanat_sous-titre') ?></p>
            <div class="col-left3 col s12 m10 l6">
                <p class="wysiwyg"> <?php the_field('tissus_et_artisanat_wysiwyg') ?></p>
            </div> <!-- about tissus -->

            <div class="col-right3 col s12 m10 l6">

                <ul>
                    <?php                       
                        if( have_rows('tissus_et_artisanat_repeteur_texte') ):                         
                            while ( have_rows('tissus_et_artisanat_repeteur_texte') ) : the_row(); ?>
                    <li> <?php   the_sub_field('texte'); ?></li>
                    <?php  endwhile;
                        else :
                        endif;
                        ?>
                </ul>

            </div><!-- liste-->
        </div>


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

<?php get_footer() ?>