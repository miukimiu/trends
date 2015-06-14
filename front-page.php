
<?php get_template_part('templates/page', 'header'); ?>

<?php

$counter = 1;

// The Loop
while ( have_posts() ) : the_post();                        
            
//começa a contar a partir do primeiro artigo pois o primeiro já foi impresso em cima. 
if($counter>2 || $paged>1)
{
?>
    <article <?php post_class(); ?>>
        <header>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php get_template_part('templates/entry-time'); ?>
        </header>

        <div class="entry-thubmbnail">  
             <?php the_post_thumbnail('featured'); ?>
        </div>
        
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    </article>
<?php
} // endif
$counter++; 
endwhile;
?>

<?php the_posts_navigation(); ?>
