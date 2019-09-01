@php
  $socialMedia = option('icons');
@endphp

@if ($socialMedia)

<ul class="social-icons {{ $class }}">
  @foreach ($socialMedia as $item)
  <li>
    <a href="{{ $item['link'] }}">
      {!! image($item['icon']['ID'],'full','social-icons__icon') !!}
    </a>
  </li>
  @endforeach
</ul>

@endif
