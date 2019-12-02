@php
  $_product = wc_get_product( get_the_ID() );
  $pa_colors = get_field('product-colors');
  $colors = $_product->get_available_variations();
  $colorsNames = [];
@endphp

@if($colors)
<h3 class="attributes__title">
  Couleur
</h3>
<ul class="attributes">
  @foreach ($colors as $color)

  @if (!in_array($color['attributes']['attribute_pa_color'], $colorsNames))
  <li class="attributes__elem">
    @php
      $pa_color = get_term_by( 'slug', $color['attributes']['attribute_pa_color'], 'pa_color');
      $colorImg = get_field('color_image', 'pa_color_'.$pa_color->term_id)[ID];
      $colorHex = get_field('color_hex', 'pa_color_'.$pa_color->term_id);
      $dsc = $color['variation_description'] ? $color['variation_description'] : $_product -> get_description();
    @endphp
    <a
      class="attribute"
      data-variation-id={{ $color['variation_id'] }}
      title={{ $color['attributes']['attribute_pa_color'] }}
      data-color={{ $color['attributes']['attribute_pa_color'] }}
      data-price='{{ $color['price_html'] ? $color['price_html'] : $_product->get_price_html() }}'
      data-dsc="{{ $dsc }}"
      @if ($color['attributes']['attribute_pa_size'])
      data-variation-size="{{ $color['attributes']['attribute_pa_size'] }}"
      @else
      data-smooth-scroll
      href="#main"
      @endif
      data-variation-toggle
      data-color-hex={{ $colorHex }}
      style="background-color:{{ $colorHex  }}"
    >
      @if (!$colorHex)
      {!! image($colorImg, 'full', 'attribute__image') !!}
      @endif
    </a>
  </li>
  @php
    array_push($colorsNames, $color['attributes']['attribute_pa_color']);
  @endphp

  @endif
  @endforeach
  </ul>

  <div class="attributes__wrapper" data-attr-wrapper>
    <h3 class="attributes__title">
      Size
    </h3>
    <ul class="attributes">
      @foreach ($colors as $color)
      @if ($color['attributes']['attribute_pa_size'])
      @php
        $dsc = $color['variation_description'] ? $color['variation_description'] : $_product -> get_description();
      @endphp
      <li class="attributes__elem attributes__elem--size">
        <a
          class="attribute attribute--size"
          data-variation-id={{ $color['variation_id'] }}
          title={{ $color['attributes']['attribute_pa_color'] }}
          data-color={{ $color['attributes']['attribute_pa_color'] }}
          data-price='{{ $color['price_html'] ? $color['price_html'] : $_product->get_price_html() }}'
          data-dsc="{{ $dsc }}"
          @if ($color['attributes']['attribute_pa_size'])
          data-size="{{ $color['attributes']['attribute_pa_size'] }}"
          @endif
          data-variation-toggle
          href="#main"
          data-smooth-scroll
          data-color-hex={{ $colorHex }}
          style="background-color:{{ $colorHex  }}"
        >
          {{ $color['attributes']['attribute_pa_size'] }}
        </a>
      </li>
      @endif
      @endforeach
    </ul>
  </div>
@endif
