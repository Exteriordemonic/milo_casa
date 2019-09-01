@php
  $instagram_title =  get_field('instagram_title');
  $instagram_link =  get_field('instagram_link');
  $instagram_img = get_field('instagram_img')[ID];
@endphp

<section id="instagram" class="instagram">
  <a href="#instagram" class="instagram__link" data-smooth-scroll>
    {{ $instagram_title }}
  </a>
  <div class="instagram__wrapper">
    <div class="container">
      <a class="instagram__img-wrapper" href="{{ $instagram_link }}" target="_blank">
        {!! image($instagram_img, 'full', 'instagram__img') !!}
      </a>
    </div>
  </div>
</section>
