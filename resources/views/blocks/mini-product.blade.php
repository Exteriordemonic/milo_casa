@php
  $_product = wc_get_product( $product['data']->parent_id);
  $_variation = wc_get_product( $product['data']->get_id());

  // Get product category
  $cats = get_field('main_cat', $product['data']->parent_id) ? get_field('main_cat', $product['data']->parent_id) : $_product -> get_category_ids();

  foreach ($cats as $cat) {
    $curCat = get_term_by('id', $cat, 'product_cat');

    if($curCat->parent == 0) {
      $cat_id = $cat;
      break;
    }
  }

  $mainCat = get_term_by('id', $cat_id, 'product_cat');
  $catName = $mainCat->name;

  // Get product familly
  $cats = $_product -> get_category_ids();

  foreach ($cats as $cat) {
    $curCat = get_term_by('id', $cat, 'product_cat');

    if($curCat->parent != 0) {
      $cat_id = $cat;
      break;
    }
  }

  $mainCat = get_term_by('id', $cat_id, 'product_cat');
  $familly = $mainCat->name;

  //get name
  $name =  substr(strstr($_variation -> get_name()," "), 1);

@endphp

<div class="mini-product">
  <a href="{{ get_permalink($_product->get_id()) }}">
    {!! image($_product->get_image_id(), 'full', 'mini-product__image') !!}
  </a>
  <a href="{{ get_permalink($_product->get_id()) }}" class="mini-product__desciption">
    <h3 class="mini-product__title text bold">
      <div class="mini-product__cat-wrapper">
        <span class="mini-product__familly">
          {{ $familly }}
        </span>
        -
        <span class="mini-product__cat">
          {{ $catName }}
        </span>
      </div>
      <span class="mini-product__name">
          {{ $name }}
      </span>
    </h3>
    <p class="mini-product__price text">
      {{ $product['quantity'] }} x <span data-price>{{ $_product->get_price() }}</span>
    </p>
  </a>
  <a href="{{ wc_get_cart_remove_url( $product['key'] ) }}" class="mini-product__remove" remove-from-cart>

  </a>
</div>
