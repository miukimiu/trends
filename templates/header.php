<header class="desktop-header" role="banner">
    <div class="container">
      <nav class="header__icons">
          <ul class="icons-inline">
              <li><a target="_blank" href="https://twitter.com/Helenacesarmua"><i class="ion-social-twitter"></i> </a></li>
              <li><a target="_blank" href="https://www.facebook.com/helenacesarmakeup"><i class="ion-social-facebook"></i> </a></li>
              <li><a target="_blank" href="http://uk.pinterest.com/helenacesar/"><i class="ion-social-pinterest"></i> </a></li>
              <li><a target="_blank" href="https://www.youtube.com/channel/UCKnq1PELZ46txIm5U0o3AIQ"><i class="ion-social-youtube"></i> </a></li>
              <li><a target="_blank" href="http://instagram.com/helenacesarmakeup/"><i class="ion-social-instagram"></i></a></li>
          </ul>
          
          <?php get_template_part('templates/menu', 'search'); ?>
      </nav>

      <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    
      <nav role="navigation" class="nav">

            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => '', 'menu_class' => 'main-menu']);
            endif;
            ?>
          
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
         <a href="" class="brand-small">logo</a>
      </div>

      <?php get_template_part('templates/menu', 'search'); ?>
    </nav>
     <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'left-menu']);
      endif;
      ?>
</header>