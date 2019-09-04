<aside class="extra-menu">
  <div class="container">
    <nav class="extra-menu__nav">
      @if (has_nav_menu('categories_navigation'))
        {!! wp_nav_menu(['theme_location' => 'categories_navigation', 'menu_class' => 'extra-menu__menu']) !!}
      @endif
    </nav>
  </div>
</aside>
