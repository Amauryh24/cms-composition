<?php
/*
Template Name: PAGE-Des-Produits
*/
get_header();
echo ('ici tout la liste des produits');
get_footer();
?>
<h1><?php the_title(); ?></h1>
<?php
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>
<br><br><p>ARCHIVE-PRODUCTS.PHP</p><br><br>
