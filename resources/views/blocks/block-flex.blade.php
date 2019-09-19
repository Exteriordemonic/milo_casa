@php
  $option = $data['options'];
  $color = $data['color'];
  $title = $data['title'];
  $link = $data['link'];
  $img = $data['image'][ID];
@endphp

<div class="block-flex block-flex--{{ $option }} block-flex--{{ $color }}">
  @if ($link)
    <a href="{{ $link['url'] }}" class="block-flex__link">
  @endif
  @if ($title )
    @if($option == 'with-text')
    {{-- With text block --}}
    <div class="block-flex__wrapper">
      <h2 class="block-flex__title">
        {!! $link['title'] !!}
      </h2>
      <p class="block-flex__dsc">
        {!! $title !!}
      </p>
    </div>
    {{-- Default block --}}
    @else
    <div class="block-flex__wrapper">
      <h2 class="block-flex__title">
        {!! $title !!}
      </h2>
      @if ($option == 'cta')
        <div class="block-flex__button">
          {{ $link['title'] }}
        </div>
      @endif
    </div>
    @endif
  @endif
  {!! image($img, 'full', 'block-flex__image') !!}
  @if ($link)
    </a>
  @endif
</div>
