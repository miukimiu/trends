<div class="row">
    <?php while (have_posts()) : the_post(); ?>

        <article class="col-sm-4 col-xs-6">
            <header>
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>

            <div class="entry-thubmbnail">  
                 <?php the_post_thumbnail('featured'); ?>
            </div>
            
            <div class="entry-summary">
                <?php the_excerpt(); ?>
            </div>
        </article>

    <?php endwhile; ?>
</div>

