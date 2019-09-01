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
            @endphp
            <a href="{{ $link }}">
              {!! image($img,'full', 'collection__img') !!}
            </a>
          </li>
          @endforeach
        </ul>
    </div>
  </div>
</section>
