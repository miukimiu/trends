<div class="row">
    <?php while (have_posts()) : the_post(); ?>

        <article class="item col-sm-4">
            <div class="item--overlay">
              <?php the_post_thumbnail('featured'); ?>
              <div class="item--overlay__inner">

                <div class="info-outer">
                  <div class="info">

                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  
                    <?php get_template_part('templates/entry-time'); ?>
                  
                    <span class="is-btn-circle"><i class="ion-camera"></i></span>
                  </div>
                </div>
              </div>
            </div>
        </article>

    <?php endwhile; ?>
</div>
