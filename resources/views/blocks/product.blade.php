@php
/**
* Name:
* Product Block
*
* Description:
* Product block displayed in shop
*
* Data:
* Title
* Price
* Image
* Permalink
* Add to basket - Link
*
* Styles: /blocks/product
* */
$_product = wc_get_product( $product->ID );
$permalink = $_product -> get_permalink();
$img = $_product -> get_image_id();
$name = $_product -> get_name();
$price = $_product -> get_price_html();
$add = $_product -> add_to_cart_url();

@endphp

<div class="product -is-hover">
  <a href="{{ $permalink ? $permalink : '/' }}" class="product__img-wrapper">
    {!! image($img, 'full', 'product__img') !!}
  </a>
  <a  href="{{ $permalink ? $permalink : '/' }}" class="product__content">
    <h3 class="product__title">
      {{ $name }}
    </h3>
    <p class="product__price">
      {!! $price !!}
    </p>
  </a>
  <a href="{{ $add }}" class="product__add">
    {{ _e('Add to card', 'MiloCasa') }}
  </a>
</div>
