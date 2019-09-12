@php
  $additionLinks = option('links');
@endphp

@if ($additionLinks)

<form class="search" action="{{ get_home_url() }}" method="GET" data-search-form>
  <input class="search__input" type="text" name="s" placeholder="SEARCH">
  <input type="hidden" name="post_type" value="product">
</form>

<ul class="additional-links {{ $class }}">
  @foreach ($additionLinks as $item)
  <li>
    <a href="{{ $item['link'] }}" {{ $item['data'] }}>
      {!! image($item['icon']['ID'],'full','additional-links__icon') !!}
    </a>
  </li>
  @endforeach
</ul>

@endif
