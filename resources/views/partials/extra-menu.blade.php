<aside class="extra-menu">
  <div class="container">
    <nav class="extra-menu__nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'extra-menu__menu']) !!}
      @endif
    </nav>
  </div>
</aside>
