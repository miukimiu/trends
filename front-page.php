<p>Aqui slider </p>
<?php while (have_posts()) : the_post(); ?>
    <div class="row">
        <div class="col-md-6">ok</div>
         <div class="col-md-6">
            <div>A</div>
            <div>B</div>
         </div>
      </div>

  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
