<div class="menu-search">
    <form method="get" action="<?= esc_url(home_url('/')); ?>">
      <div class="menu-search__inner">
        <input placeholder="search" type="text" class="menu-search-input" value="<?= get_search_query(); ?>" name="s"/>
      </div>
      <input type="submit" class="menu-search-submit"/><span class="ion-search"></span>
    </form>
</div>
