<div class="row">
    <?php while (have_posts()) : the_post(); ?>

        
        <article class="item col-sm-4">
          <a href="<?php the_permalink(); ?>">
            <div class="item--overlay">
              <?php the_post_thumbnail('portfolio'); ?>
              <div class="item--overlay__inner">

                <div class="info-outer">
                  <div class="info">

                    <h2 class="entry-title"><?php the_title(); ?></h2>
                  
                    <span class="is-btn-circle"><i class="ion-camera"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </article>

    <?php endwhile; ?>
</div>
