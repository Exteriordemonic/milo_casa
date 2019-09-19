
@if(have_posts())
<section class="shop">
  <div class="container">
    <ul class="products" id="products">
      @while(have_posts()) @php the_post() @endphp
        @php
          $product = wc_get_product( get_the_id() );
        @endphp
        <li class="products__elem">
          @include('blocks.product', ['product' => $product, 'myID' => get_the_id()])
        </li>
      @endwhile
    </ul>
  </div>
</section>
@else
<section class="shop">
    <div class="container">
      <p class="shop__empty">
        {{ __('Aucun résultat...', 'MiloCasa') }}
      </p>
    </div>
  </section>
@endif


