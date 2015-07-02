<section class="featured">
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

          <article>
            <header>
              <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <?php get_template_part('templates/entry-time'); ?>
              <a href="<?php the_permalink(); ?>" class="btn btn-default">Read more</a>
            </header>
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
               

                <div class="featured--overlay">
                  <?php the_post_thumbnail('featured-small'); ?>
                  <div class="featured--overlay__inner">



                    
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php get_template_part('templates/entry-time'); ?>
                    <span class="is-circle"><i class="glyphicon glyphicon-play"></i></span>
                  </div>
                </div>
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
                
                <div class="featured--overlay">
                  <?php the_post_thumbnail('featured-small'); ?>
                  <div class="featured--overlay__inner">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php get_template_part('templates/entry-time'); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-default">Read more</a>
                  </div>
                </div>
              </div>
            
            <?php endwhile; wp_reset_postdata(); ?>
            <!-- show pagination here -->
          <?php else : ?>
            <!-- show 404 error here -->
          <?php endif; ?>
    
</section>
        