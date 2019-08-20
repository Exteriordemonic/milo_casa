<footer class="footer" data-rev-nav>
  <div class="footer__header">
    <p class="headline bold">
      JOIN OUR
      <br>
      NEWSLETTER
    </p>
  </div>
  <div class="footer__content">
    @include('blocks.newssletter')
  </div>
  <div class="footer__bottom">
    @if (has_nav_menu('footer_navigation'))
      {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer__nav']) !!}
    @endif
  </div>
</footer>
