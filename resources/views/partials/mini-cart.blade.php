@php
    global $woocommerce;

    if($_GET['remove_item']) {
      WC()->cart->remove_cart_item($_GET['remove_item']);
    }

    $items = $woocommerce->cart->get_cart();
@endphp

<div class="mini-cart" data-mini-card id="mini-card">
  <div class="mini-cart__close">
    @include('components.hamburger', ['type'=>'close-mini-cart'])
  </div>
  @if($items)
    <ul class="mini-cart__products">
      @foreach ($items as $item)
        <li class="mini-cart__product">
          @include('blocks.mini-product', ['product'=>$item])
        </li>
      @endforeach
    </ul>
  @else
  <p class="mini-cart__empty">
    {{ __('Votre panier est vide', 'MiloCasa') }}
  </p>
  @endif

  <div class="mini-cart__footer-wrapper">
    <footer class="mini-cart__footer">
      <div class="mini-cart__subtotal">
        <span class="text bold">
          {{ __('Total:', 'MiloCasa') }}
        </span>

        <span class="mini-cart__price text" data-price>
          € {{ WC()->cart->get_subtotal() }}
        </span>

      </div>
    </footer>
    <a class="mini-cart__to-card text" href="{{ $woocommerce->cart->get_checkout_url() }}">
      {{ __('Terminer ma commande', 'MiloCasa') }}
    </a>
    <a class="mini-cart__to-card text" href="{{ wc_get_cart_url() }}">
        {{ __('Voir mon panier', 'MiloCasa') }}
    </a>
    <button class="mini-cart__to-card mini-cart__to-card--last text" data-close-mini-cart>
      {{ __('Continuer mes achats', 'MiloCasa') }}
    </button>
  </div>
</div>


