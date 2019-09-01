@php
  $logo = option('logo')['id'];
  $footer_link =  option('footer_link');
@endphp

<footer class="footer" data-rev-nav>
  <div class="container">
    <div class="footer__wrapper">
      <a href="/" class="footer__brand-wrapper">
        {!! image($logo, 'full', 'footer__brand') !!}
      </a>
      <a href="#main" class="footer__link" data-smooth-scroll>
        {{ $footer_link ?? 'Back to top' }}
      </a>
    </div>
  </div>
</footer>
