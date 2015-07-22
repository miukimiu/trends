<section class="featured clearfix">
    <div class="featured__item col-sm-7">
      <?php
        $counter = 1;
        $max = 1;
        // The Loop
        while ( have_posts() ) : the_post();

        //queremos apenas um artigo de destaque. Logo limitamos o loop para apenas o último artigo.
        if ($counter == $max) {

          ?>


          <?php the_post_thumbnail('featured'); ?>

          <article class="featured__item__info">
            <a href="<?php the_permalink(); ?>">
              <header>
                <div class="info">

                  <h2 class="entry-title"><?php the_title(); ?></h2>
                  <?php get_template_part('templates/entry-time'); ?>
                  <span class="btn btn-flat">Read more</span>
                </div>
              </header>
            </a>
          </article>


        <?php
        }

        $counter++;
        endwhile;

        // Reset Query
        wp_reset_query();
      ?>
    </div>

         <?php
          if ( get_query_var('paged') ) $paged = get_query_var('paged');
          if ( get_query_var('page') ) $paged = get_query_var('page');

          $query = new WP_Query( array( 'post_type' => 'videos', 'paged' => $paged, 'showposts' => 1 ) );

          if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

              <div class="featured__item--video col-sm-5">
                <a href="<?php echo types_render_field("youtube-link", array("output"=>"raw")); ?>" target="blank">

                  <div class="featured--overlay">
                    <?php the_post_thumbnail('featured-small'); ?>
                    <div class="featured--overlay__inner">

                      <div class="info-outer">
                        <div class="info">

                        <h2 class="entry-title"><?php the_title(); ?></h2>
                        <span class="is-btn-circle"><i class="glyphicon glyphicon-play"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

            <?php endwhile; wp_reset_postdata(); ?>
            <!-- show pagination here -->
          <?php else : ?>
            <!-- show 404 error here -->
          <?php endif; ?>

        <?php
          if ( get_query_var('paged') ) $paged = get_query_var('paged');
          if ( get_query_var('page') ) $paged = get_query_var('page');

          $query = new WP_Query( array( 'post_type' => 'portfolio', 'paged' => $paged, 'showposts' => 1 ) );

          if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

              <div class="featured__item--portfolio col-sm-5">
                <a href="<?php the_permalink(); ?>">
                  <div class="featured--overlay">
                    <?php the_post_thumbnail('featured-small'); ?>
                    <div class="featured--overlay__inner">

                      <div class="info-outer">
                        <div class="info">

                        <h2 class="entry-title"><?php the_title(); ?></h2>
                        <?php get_template_part('templates/entry-time'); ?>
                        <span class="btn btn-flat">See Portfolio</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

            <?php endwhile; wp_reset_postdata(); ?>
            <!-- show pagination here -->
          <?php else : ?>
            <!-- show 404 error here -->
          <?php endif; ?>

</section>
