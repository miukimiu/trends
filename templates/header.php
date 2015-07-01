<header class="desktop-header" role="banner">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

    <nav role="navigation" class="nav">
      <a class="menu-trigger">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
      </a>
      <a href="" class="brand-small">logo</a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'main-menu']);
      endif;
      ?>
    </nav>
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
    </nav>
     <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'left-menu']);
      endif;
      ?>
</header>