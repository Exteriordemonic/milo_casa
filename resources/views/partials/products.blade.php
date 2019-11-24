@php
  $queried_object = get_queried_object();

  if($_GET['interiors']) $interiorsGallery = option('interiors_gallery');
@endphp

@if(have_posts())
<section class="shop">
  <header class="section__header">
    @if ($queried_object->parent != 0 && $queried_object->taxonomy == "product_cat")
    <h1 class="section__title">
      {{ $queried_object->name }}
    </h1>
    @endif
    @include('partials.page-bredcramps')
  </header>
  <div class="container">
    <ul class="products" id="products">
      @php
        $index = 0;
        $indexGallery = 0;
      @endphp
      @while(have_posts()) @php the_post() @endphp
        @php
          $product = wc_get_product( get_the_id() );
        @endphp
        {{-- Interiros Baner Start --}}
        @if ($interiorsGallery[$indexGallery] && $index % 9 == 0 || $index == 0 )
          @include('blocks.product-baner', ['data' => $interiorsGallery[$indexGallery]])
        @endif
        {{-- /Interiros Baner End --}}
        <li class="products__elem">
          @include('blocks.product', ['product' => $product, 'myID' => get_the_id()])
        </li>
        @php
          $index++;
          if($index % 9 == 0) $indexGallery++;
        @endphp
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


