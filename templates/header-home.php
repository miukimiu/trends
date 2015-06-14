<section>

<div class="container">
  <div class="row">
          <div class="col-md-6">
            <?php
              $counter = 1;
              $max = 1;
              // The Loop
              while ( have_posts() ) : the_post();  

              //queremos apenas um artigo de destaque. Logo limitamos o loop para apenas o último artigo.
              if ($counter == $max) {

                ?>
                
              ****************  Aqui fica o destaque **************
               
              <?php   
              }

              $counter++;
              endwhile;

              // Reset Query
              wp_reset_query();
            ?>   
          </div>
           <div class="col-md-6">
              <div>A</div>
              <div>B</div>
           </div>
        </div>
  </div>
</section>
        