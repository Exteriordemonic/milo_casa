@php
  $title = 'Wishlist';
  $empty = 'Your wishlist is empty';
  $wishlistProducts = '191,191,191,191,191,191,192';
  $wishlistArray = explode(",",$wishlistProducts);

@endphp

<section class="wishlist" data-wishlist>
  <div class="container">
    <h2 class="wishlist__title">
      {{ $title }}
    </h2>
    <div class="wishlist__close">
      @include('components.hamburger', ['type'=>'close-wishlist'])
    </div>
    @if ($wishlistArray)
    <ul class="wishlist__list">
      @foreach ($wishlistArray as $item)

      @php
        $_product = wc_get_product( $item );
      @endphp
      @if ($_product)
      <li class="wishlist__elem">
        @include('blocks.product', ['myID'=> $item])
      </li>
      @endif
      @endforeach
    </ul>
    @else
    <p class="wishlist__dsc">
      {{ $empty }}
    </p>
    @endif

  </div>
</section>
