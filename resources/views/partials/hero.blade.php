@php
    $img = get_field('hero')['ID'];
    $sygnet = get_field('sygnet')['ID'];
@endphp

<section class="hero">
  {!! image($img, 'full', 'hero__img') !!}
  {!! image($sygnet, 'full', 'hero__sygnet') !!}
</section>
