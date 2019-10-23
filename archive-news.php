<?php
/*
Template Name: PAGE-INSPIRATION
*/
get_header();
echo ('toutes mes inspirations');
get_footer();
?>
<?php
// TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
          <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
          <p>contenu à récupérer depuis ACF</p>
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query

wp_pagenavi();
?>
