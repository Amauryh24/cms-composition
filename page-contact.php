<?php
/*
Template Name: PAGE-contact
*/
get_header();
?>
<h1><?php the_title(); ?></h1>

<iframe width="660px" height="350px" frameborder="0" allowfullscreen src="<?php the_field('openstreetmap_lien'); ?>#<?php the_field('openstreetmap_zoom'); ?>/<?php the_field('openstreetmap_latitude'); ?>/<?php the_field('openstreetmap_longitude'); ?>?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=false&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false"></iframe>

<?php
// https://umap.openstreetmap.fr/fr/map/meubles-composition_379823
// https://umap.openstreetmap.fr/fr/map/meubles-composition_379823#13/50.5104/5.2763
get_footer();
?>
