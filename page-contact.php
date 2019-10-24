<?php 
/*
Template Name: PAGE-contact
*/
get_header();
?>
<h1><?php the_title(); ?>
</h1>

<iframe width="660px" height="350px" frameborder="0" allowfullscreen
    src="<?php the_field('openstreetmap_lien'); ?>#<?php the_field('openstreetmap_zoom'); ?>/<?php the_field('openstreetmap_latitude'); ?>/<?php the_field('openstreetmap_longitude'); ?>?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=false&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false"></iframe>
<div class="row">
    <div class="col s10 m10 l4 offset-s1 offset-m1 offset-l1">
        <h3>Une questions, une demande d'offre ?</h3>
        <p>Formulaire de contact</p>
    </div>
    <div class="col s10 m10 l4 offset-s1 offset-m1 offset-l1">
        <?php
$form = new WP_Query(array('page_id' => 44));
if($form->have_posts()) :
    while($form->have_posts()) : $form->the_post();
    the_content();
endwhile;
else:
    echo('quedal');
endif;?>

    </div>

</div>

<?php
get_footer();
?>