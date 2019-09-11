@php
  $famille = get_field('famille')
@endphp

@if($famille)
<div class="famille">
  <h2 class="famille__title">
    {{ __('De la même famille', 'MiloCasa') }}
  </h2>
  <ul class="famille__list">
    @foreach ($famille as $item)
      <li class="famille__elem">
        @php
          $title =  $item['title'];
          $_product = wc_get_product( $item['product'][0]->ID );
          $img = $_product->get_image_id();
          $permalink = $_product -> get_permalink();
        @endphp
        <a href="{{ $permalink }}">
          {!! image($img, 'full', 'famille__img') !!}
          <h3 class="famille__subtitle">
            {{ $title }}
          </h3>
        </a>
      </li>
    @endforeach
  </ul>
</div>
@endif
