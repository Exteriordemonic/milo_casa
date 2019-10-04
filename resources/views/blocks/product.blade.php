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
$id = $product->ID ? $product->ID : $myID;
$_product = wc_get_product( $id );
if ($_product) {
  $permalink = $_product -> get_permalink();
  $img = $_product -> get_image_id();
  $name = $_product -> get_name();
  $price = $_product -> get_price_html();
  $add = $_product -> add_to_cart_url();
}

$userID = get_current_user_id();

if($userID) {
  // get  current wishlist
  $wishlistProducts = get_field('product-list', 'user_' . $userID);
  $wishlistArray = explode(",",$wishlistProducts);
  if(in_array( $id ,$wishlistArray)) {
    $inWishlist = true;
  }

  else {
    $inWishlist = false;
  }
}

@endphp

@if ($_product)
<div class="product -is-hover">

  <a href="{{ $permalink ? $permalink : '/' }}" class="product__img-wrapper">
    {!! image($img, 'full', 'product__img') !!}
  </a>
  <div class="product__footer">
    <a  href="{{ $permalink ? $permalink : '/' }}" class="product__content">
      <h3 class="product__title">
        {{ $name }}
      </h3>
      <p class="product__price">
        {!! $price !!}
      </p>
    </a>
    <a href="{{ $add }}" class="product__add">
      {{ _e('AJOUTER AU PANIER', 'MiloCasa') }}
    </a>
  </div>
  <a href="?wish_id={{ $id }}" class="product__wishlist @if($inWishlist) -is-active @endif" data-wishlist-trigger>
    <span class="far fa-heart"></span>
    <span class="fas fa-heart"></span>
  </a>
</div>
@endif
