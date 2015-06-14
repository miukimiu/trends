<section>
  <div class="container">
    <div class="row">
          <div class="col-sm-8">
            <?php
              $counter = 1;
              $max = 1;
              // The Loop
              while ( have_posts() ) : the_post();  

              //queremos apenas um artigo de destaque. Logo limitamos o loop para apenas o último artigo.
              if ($counter == $max) {

                ?>
                
              <?php the_post_thumbnail('featured'); ?>
               
              <?php   
              }

              $counter++;
              endwhile;

              // Reset Query
              wp_reset_query();
            ?>   
          </div>
           <div class="col-sm-4">
              <?php
                $counter = 1;
                $max = 2;
                // The Loop
                while ( have_posts() ) : the_post();  

                //queremos apenas um artigo de destaque. Logo limitamos o loop para apenas o último artigo.
                if ($counter == $max) {

                  ?>
                  
                <div class="featured-portfolio">
                  <?php the_post_thumbnail('featured-small'); ?>
                </div>
                 
                <?php   
                }

                $counter++;
                endwhile;

                // Reset Query
                wp_reset_query();
              ?>  

              <?php
                if ( get_query_var('paged') ) $paged = get_query_var('paged');  
                if ( get_query_var('page') ) $paged = get_query_var('page');
                 
                $query = new WP_Query( array( 'post_type' => 'portfolio', 'paged' => $paged, 'showposts' => 1 ) );
                 
                if ( $query->have_posts() ) : ?>
                  <?php while ( $query->have_posts() ) : $query->the_post(); ?> 

                    <div class="featured-portfolio">
                      <?php the_post_thumbnail('featured-small'); ?>
                    </div>
                  
                  <?php endwhile; wp_reset_postdata(); ?>
                  <!-- show pagination here -->
                <?php else : ?>
                  <!-- show 404 error here -->
                <?php endif; ?>
           </div>
        </div>
  </div>
</section>
        