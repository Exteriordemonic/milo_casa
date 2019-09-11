@php
  $userID = get_current_user_id();

  if($userID) {
    $wishlistProducts = get_field('product-list', 'user_' . $userID);
    if ($wishlistProducts != '') {
      $wishlistArray = explode(",",$wishlistProducts);

      if(!in_array( get_the_ID() ,$wishlistArray) ) {

        if(count($wishlistArray) > 18) {
          array_shift($wishlistArray);
          $wishlistProducts = implode( ",", $wishlistArray );
        }
        $wishlistProducts .=  get_the_ID() .',';
      }
    }

    else {
      $wishlistProducts = get_the_ID() .',';
    }

    update_field('product-list', $wishlistProducts ,'user_' . $userID);
  }



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
