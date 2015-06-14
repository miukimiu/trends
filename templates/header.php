<header class="main-header" role="banner">
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
