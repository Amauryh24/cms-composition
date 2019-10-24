<?php
/*
Template Name: BLOG
*/
get_header();

?>

    <h1>Architecte d'intérieur en action</h1>

    <?php



while(have_posts()) : the_post(); ?>
    <!-- ICI TES ARTICLES PAR ARTICLES. IL FAUT SEULEMENT FAIRE UN CODE, ET CELUI-CI VA SE REPÉTER PAR ARTICLE SI ARTICLE IL Y A. -->

<div class="article-par-article">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php echo(get_the_date()); ?></p>
    <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a></p>
</div>

<?php
$images = get_field('galerie');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image_id ): ?>
            <li>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

<?php endwhile; ?>
<h2> On met du texte </h2>

<?php wp_pagenavi();?>







<?php
wp_reset_query(); //resetting the page query

?>

<?php
get_footer();
?>

