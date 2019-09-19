@php
  $content = get_field('description');
  $img = get_field('description_bg')['ID'];
  $link = get_field('description_link');
@endphp

<section class="description section">
  <div class="container">
    <div class="description__wrapper">
      <p class="description__content">
        {!! $content !!}
      </p>
      <div class="description__img-box">
        {!! image($img, full, 'description__image') !!}
      </div>
    </div>
  </div>
</section>
