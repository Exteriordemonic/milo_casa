@php
  $additionLinks = option('links');
@endphp

@if ($additionLinks)

<ul class="additional-links {{ $class }}">
  @foreach ($additionLinks as $item)
  <li>
    <a href="{{ $item['link'] }}">
      {!! image($item['icon']['ID'],'full','additional-links__icon') !!}
    </a>
  </li>
  @endforeach
</ul>

@endif
