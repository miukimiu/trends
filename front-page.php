
<?php

$counter = 1;

// The Loop
while ( have_posts() ) : the_post();

//começa a contar a partir do primeiro artigo pois o primeiro já foi impresso em cima. 
if($counter>2 || $paged>1)
{
?>
    <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php
} // endif
$counter++; 
endwhile;
?>

<?php the_posts_navigation(); ?>
