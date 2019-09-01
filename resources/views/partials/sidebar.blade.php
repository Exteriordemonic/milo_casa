<aside class="sidebar" data-nav>
  <nav class="sidebar__nav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sidebar__menu']) !!}
    @endif
    @include('components.social-icons', ['class'=>'sidebar__social-icons'])
    @include('components.additional-links', ['class'=>'sidebar__additional-links'])
  </nav>
</aside>
