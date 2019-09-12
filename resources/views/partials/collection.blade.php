@php
    $collection_bg = get_field('collection_bg')[ID];
    $collection = get_field('products');
@endphp

<section class="collection">
  <div class="container">
    <div class="collection__wrapper">
      {!! image($collection_bg, 'full', 'collection__bg') !!}

      <ul class="collection__list">
          @foreach ($collection as $item)
          <li class="collection__elem">
            @php
              $cat = get_term_by('id', $item, 'product_cat');
              // $_product = get_product($item->ID);
              $link = get_term_link($cat);
              $img = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
              // $img = $_product->get_image_id();
               $bg = get_field('bg_image',  'product_cat_' . $item)[ID];
               $title = $cat->name;
               $dsc = $cat->description;
            @endphp
            <a href="{{ $link }}">
              {!! image($img,'full', 'collection__img') !!}

              <div class="collection__content">
                {!! image($bg,'full', 'collection__img collection__img--bg') !!}
                <h2 class="collection__title">
                  {{ $title }}
                </h2>
                <p class="collection__dsc">
                  {{ $dsc }}
                </p>
              </div>
            </a>
          </li>
          @endforeach
        </ul>
    </div>
  </div>
</section>
