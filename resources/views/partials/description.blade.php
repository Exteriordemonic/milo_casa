@php
  $content = get_field('description');
  $bg = get_field('description_bg')['ID'];
  $link = get_field('description_link');
@endphp

<section class="description section">
  <div class="container">
    {!! image($bg, 'full',' description__bg') !!}
    <div class="description__wrapper">
      <div class="description__content">
          <p>
            {!! $content !!}
          </p>
      </div>
      <footer class="description__footer">
        <a href="{{ $link['url'] }}" class="button" target="{{ $link['target'] }}">
          {{ $link['title'] }}
        </a>
      </footer>
    </div>
  </div>
</section>
