@php
  $_product = wc_get_product( get_the_ID() );
  $pa_colors = get_field('product-colors');
  $colors = $_product->get_available_variations();
@endphp

@if($colors)
<ul class="attributes">
  @foreach ($colors as $color)
  <li class="attributes__elem">
    @php
      $pa_color = get_term_by( 'slug', $color['attributes']['attribute_pa_color'], 'pa_color');
      $colorImg = get_field('color_image', 'pa_color_'.$pa_color->term_id)[ID];
    @endphp
    <a
      class="attribute"
      data-variation-id={{ $color['variation_id'] }}
      title={{ $color['attributes']['attribute_pa_color'] }}
      data-price='{{ $color['price_html'] ? $color['price_html'] : $_product->get_price_html() }}'
      data-variation-toggle
      href="#main"
      data-smooth-scroll
    >
      {!! image($colorImg, 'full', 'attribute__image') !!}
    </a>
  </li>
  @endforeach
</ul>
@endif
