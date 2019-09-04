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
              $_product = get_product($item->ID);
              $link = $_product->get_permalink();
              $img = $_product->get_image_id();
              $bg = get_field('product-list', $_product->get_id())[ID];
              $title = $_product->get_name();
              $dsc = $_product->get_short_description();
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
