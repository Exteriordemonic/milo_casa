@php
  $title = $data['title'];
  $link = $data['link'];
@endphp
<div class="block-flex">
  @if ($link)
    <a href="{{ $link['url'] }}" class="block-flex__link">
  @endif
  @if ($title )
    <h2 class="block-flex__title">
      {!! $title !!}
    </h2>
  @endif
  {!! image('272', 'full', 'block-flex__image') !!}
  @if ($link)
    </a>
  @endif
</div>
