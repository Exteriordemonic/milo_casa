@php
  // Get all categories ID
  $_product = wc_get_product( get_the_ID() );
  $cats = $_product -> get_category_ids();
  $cat_id;
  // Check if this id is in familly category
  foreach ($cats as $cat) {
    $curCat = get_term_by('id', $cat, 'product_cat');

    if($curCat->parent != 0) {
      $cat_id =  $cat;
      break;
    }
  }
  // Get all posts in this category

  $args = array(
    'post_type'             => 'product',
    'post_status'           => 'publish',
    'ignore_sticky_posts'   => 1,
    'posts_per_page'        => '99',
    'tax_query'             => array(
        array(
            'taxonomy'      => 'product_cat',
            'field' => 'term_id', //This is optional, as it defaults to 'term_id'
            'terms'         => $cat_id,
            'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
        ),
    )
  );

  $famille = get_posts($args);

@endphp

@if($famille)
<div class="famille">
  <h2 class="famille__title">
    {{ __('De la même famille', 'MiloCasa') }}
  </h2>
  <ul class="famille__list">
    @foreach ($famille as $item)
      <li class="famille__elem">
        @php
          $_product = wc_get_product( $item->ID );
          $img = $_product->get_image_id();
          $permalink = $_product -> get_permalink();

          $cats = $_product -> get_category_ids();

          foreach ($cats as $cat) {
            $curCat = get_term_by('id', $cat, 'product_cat');

            if($curCat->parent == 0) {
              $main_cat_id = $cat;
              break;
            }
          }


          $mainCat = get_term_by('id', $main_cat_id, 'product_cat');
          $title = $mainCat -> name;

        @endphp
        <a href="{{ $permalink }}">
          {!! image($img, 'full', 'famille__img') !!}
          <h3 class="famille__subtitle">
            {{ $title }}
          </h3>
        </a>
      </li>
    @endforeach
  </ul>
</div>
@endif
