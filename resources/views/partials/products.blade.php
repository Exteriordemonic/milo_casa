@php
  if($cat_id):
    $args = array(
      'post_type' => 'product',
      'numberposts' => 999,
      'tax_query'             => array(
          array(
              'taxonomy'      => 'product_cat',
              'field' => 'term_id', //This is optional, as it defaults to 'term_id'
              'terms'         => $cat_id,
              'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
          ),
      )
    );
  else :
    $args = array(
      'post_type' => 'product',
      'numberposts' => 999,
    );
  endif;

  $products = get_posts($args);
@endphp

@if($products)
<section class="shop">
  <div class="container">
    <ul class="products" id="products">
      @foreach ($products as $product)
      <li class="products__elem">
        @include('blocks.product', ['product' => $product])
      </li>
      @endforeach
    </ul>
  </div>
</section>
@endif
