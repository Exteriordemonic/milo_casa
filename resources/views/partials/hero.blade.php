@php
    $gallery = get_field('hero');
    $sygnet = get_field('sygnet')['ID'];
@endphp

<section class="hero">
  {!! image($sygnet, 'full', 'hero__sygnet') !!}
  @if ($gallery)
  <div class="hero__carousel">
    @foreach ($gallery as $img)
    <div class="hero__cell">
      {!! image($img['ID'], 'full', 'hero__image') !!}
    </div>
    @endforeach
  </div>
  @endif
</section>
