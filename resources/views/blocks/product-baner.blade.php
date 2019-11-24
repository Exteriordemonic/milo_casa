@if ($data)
<li class="products__elem products__elem--baner">
  <ul class="product-baner product-baner--{{ $data['style'] }}">
    @foreach ($data['gallery'] as $item)
      <li class="product-baner__elem">
        @if ($item['description'])
          <a href="{{ $item['description'] }}"  class="product-baner__link">
        @endif
          {!! image($item['ID'], 'full', 'product-baner__image') !!}
        @if ($item['description'])
          </a>
        @endif
      </li>
    @endforeach
  </ul>
</li>
@endif
