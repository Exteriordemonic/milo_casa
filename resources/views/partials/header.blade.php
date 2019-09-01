@php
  $logo = option('logo')['id'];
@endphp

<header class="header" header>
  <nav class="header__wrapper container">
    <div class="header__cell">
      @include('components.hamburger')
      @include('components.social-icons', ['class'=>'header__social-media'])
    </div>
    <a href="/" class="header__brand-wrapper">
      {!! image($logo, 'full', 'header__brand') !!}
    </a>
    <div class="header__cell header__cell--right">
      @include('components.additional-links', ['class'=>'header__additional-links'])
    </div>
  </nav>
</header>
