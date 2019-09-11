@php
  $_product = wc_get_product( get_the_ID() );
  $permalink = $_product -> get_permalink();
  $description = $_product -> get_description();
  $name = $_product -> get_name();
  $price = $_product -> get_price_html();
  $add = $_product -> add_to_cart_url();

  $available_variations = $_product->get_available_variations();
@endphp

<div class="product-dsc">
  <h1 class="product-dsc__title">
    Canapé d’angle {{ $name }}
  </h1>
  <div class="product-dsc__price" data-variation-price>
    {!! $price !!}
  </div>
  <a href="{{ $add }}" class="product-dsc__add" data-add-to-cart data-add-to-cart-variations>
    {{ _e('Add to card', 'MiloCasa') }}
  </a>

  @include('blocks.more-content' , ['description'=>$description])
</div>
