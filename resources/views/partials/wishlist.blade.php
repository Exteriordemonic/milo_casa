@php
  $title = option('wishlsit_title') ? option('wishlsit_title') : 'Wishlist';
  $empty = option('wishlsit_empty') ? option('wishlsit_empty') : 'Votre wishlist est vide';
  $login = option('wishlsit_login') ? option('wishlsit_login') : 'Veuillez vous connecter à votre compte pour ajouter le produit à votre wishlist';
  $userID = get_current_user_id();
  $wishlistProducts = get_field('product-list', 'user_' . $userID);
  if ($wishlistProducts != '') {
    $wishlistArray = explode(",",$wishlistProducts);
  }

@endphp

<section class="wishlist" data-wishlist id="wishlist">
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

      @if (!is_user_logged_in())
      <p class="wishlist__dsc wishlist__dsc--login">
        {{ $login }}
        <a href="{{ get_permalink( get_option('woocommerce_myaccount_page_id') ) }}" class="button wishlist__login">
          {{ __('Me connecter', 'MiloCasa') }}
        </a>
      </p>
      @endif

    @endif

  </div>
</section>
