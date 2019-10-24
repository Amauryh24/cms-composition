<?php 
/*
Template Name: PAGE-contact
*/
get_header();
?>
<h1><?php the_title(); ?></h1>
<?php
$form = new WP_Query(array('page_id' => 29));
if($form->have_posts()) :
    while($form->have_posts()) : $form->the_post();
    the_content();
endwhile;
else:
    echo('quedal');
endif;
get_footer();
?>

