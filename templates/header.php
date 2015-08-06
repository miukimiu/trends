<header class="desktop-header" role="banner">
    <div class="container">
      <nav class="header__icons">
          <?php get_template_part('templates/icons', 'inline'); ?>
      </nav>

      <a class="brand" href="<?= esc_url(home_url('')); ?>"><img src="<?php echo get_template_directory_uri('images/logo.png'); ?>/dist/images/logo.png"></a>
    
      <nav role="navigation" class="nav">

            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'main-menu']);
            endif;
            ?>

            <?php get_template_part('templates/menu', 'search'); ?>
          
      </nav>
    </div>

</header>

<header class="mobile-header" role="banner">
    <nav role="navigation" class="nav">

      <div class="menu-trigger-container">
        <a class="menu-trigger">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
        </a>
      </div>
      
      <div class="brand-container">
         <a href="" class="brand-small">
            <img src="<?php echo get_template_directory_uri('images/logo.png'); ?>/dist/images/logo-small.png">
         </a>
      </div>

      <?php get_template_part('templates/menu', 'search'); ?>
    </nav>
     <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'left-menu']);
      endif;
      ?>
</header>
