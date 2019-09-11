@php
  $_product = wc_get_product( get_the_ID() );
  $pa_leg = get_field('legs');
  $pa_legs_products = get_field('product_legs');
@endphp

@if($pa_leg)
<ul class="attributes">
  <li class="attributes__elem">
    @php
        $pa_leg = get_term_by( 'id', $pa_leg[0], 'pa_legs');
        $legImg = get_field('legs_image', 'pa_legs_'.$pa_leg->term_id)[ID];
    @endphp
    <a
      href="./"
      class="attribute -is-active"
      title="{{ $pa_leg->name }}"
    >
      {!! image($legImg, 'full', 'attribute__image') !!}
    </a>
  </li>

  @foreach ($pa_legs_products as $item)
    <li class="attributes__elem">
        @php
          $_product = wc_get_product( $item->ID );
          $permalink = $_product -> get_permalink();
          $pa_leg_id = get_field('legs', $item->ID )[0];
          $pa_leg = get_term_by( 'term_id', $pa_leg_id, 'pa_legs');
          $legImg = get_field('legs_image', 'pa_legs_'.$pa_leg->term_id)[ID];
        @endphp
        <a
          href="{{ $permalink }}"
          class="attribute"
          title={{ $item->post_title }}
        >
          {!! image($legImg, 'full', 'attribute__image') !!}
        </a>
    </li>
  @endforeach
</ul>
@endif
