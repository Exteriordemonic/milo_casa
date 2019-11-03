@php
  $_product = wc_get_product( get_the_ID() );
  $permalink = $_product -> get_permalink();
  $description = $_product -> get_description();
  $name = $_product -> get_name();
  $price = $_product -> get_price_html();
  $add = $_product -> add_to_cart_url();
  $available_variations = $_product->get_available_variations();
  $pdf = get_field('pdf');


  // Get product category
  $cats = get_field('main_cat', $item->ID) ? get_field('main_cat', $item->ID) : $_product -> get_category_ids();

  foreach ($cats as $cat) {
    $curCat = get_term_by('id', $cat, 'product_cat');

    if($curCat->parent == 0) {
      $cat_id = $cat;
      break;
    }
  }

  $mainCat = get_term_by('id', $cat_id, 'product_cat');
  $catName = $mainCat -> name;


@endphp

<div class="product-dsc">
  <h1 class="product-dsc__title">
    {{ $catName }} {{ $name }}
  </h1>
  <div class="product-dsc__price" data-variation-price>
    {!! $price !!}
  </div>
  <a href="{{ $add }}" class="product-dsc__add" data-add-to-cart data-add-to-cart-variations>
    {{ _e('AJOUTER AU PANIER', 'MiloCasa') }}
  </a>

  @include('blocks.more-content' , ['description'=>$description])
  @if ($pdf)
  <a href="{{ $pdf['url'] }}" class="product-dsc__pdf" data-fancybox="files">
    {!! _e('TÉLÉCHARGER <br>LA NOTICE DE MONTAGE', 'MiloCasa') !!}
  </a>
  @endif
</div>
