<?php 

get_header();


if(have_posts()) :
while(have_posts()) : the_post(); ?>
    <!-- ICI TES ARTICLES PAR ARTICLES. IL FAUT SEULEMENT FAIRE UN CODE, ET CELUI-CI VA SE REPÉTER PAR ARTICLE SI ARTICLE IL Y A. -->

<div class="article-par-article">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p><?php the_content() ; ?></p>
    <?php 

$images = get_field('galerie');
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo esc_url($image['url']); ?>">
                     <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
                <p><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?></div>

<?php endwhile; ?>
<?php else: ?>
<p>Aucun article a été trouvé.</p>

<?php endif;

wp_reset_query(); //resetting the page query


get_footer();
?>