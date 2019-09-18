<aside class="category-menu ">
  <div class="container">
    <nav class="category-menu__nav">
      @if (has_nav_menu('categories_navigation'))
        {!! wp_nav_menu(['theme_location' => 'categories_navigation', 'menu_class' => 'category-menu__menu']) !!}
      @endif
    </nav>
  </div>
</aside>
