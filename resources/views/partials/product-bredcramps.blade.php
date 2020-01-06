@php
  // Get all categories ID
  $_product = wc_get_product( get_the_ID() );
  $name = $_product -> get_name();
  $cats = $_product -> get_category_ids();
  $familly_id;
  // Check if this id is in familly category
  foreach ($cats as $cat) {
    $curCat = get_term_by('id', $cat, 'product_cat');

    if($curCat->parent != 0) {
      $familly_id =  $cat;
      break;
    }
  }

  $familly = get_term_by('id', $familly_id, 'product_cat');

  // Get product category
  $cats = get_field('main_cat', $item->ID) ? get_field('main_cat', $item->ID) : $_product -> get_category_ids();

  foreach ($cats as $cat) {
    $curCat = get_term_by('id', $cat, 'product_cat');

    if($curCat->parent == 0) {
      $cat_id = $cat;
      break;
    }
  }

  $mainCat = get_term_by('id', $cat_id, 'product_cat');
  $catName = $mainCat -> name;

@endphp


<nav aria-label="breadcrumb">
  <ol class="breadcrumb__list">
    <li class="breadcrumb__item">
      <a href="{{ get_home_url() }}">
        ACCUEIL
      </a>
    </li>
    <li class="breadcrumb__item">
      <a href="{{ get_home_url()}}/collection">
        COLLECTION
      </a>
    </li>
    @if ($familly)
    <li class="breadcrumb__item">
      <a href="{{ get_home_url()}}/categories/{{ $familly->slug }}">
        {{ $familly->name }}
      </a>
    </li>
    @endif
    <li class="breadcrumb__item">
      {{ $catName }} {{ $name }}
    </li>
  </ol>
</nav>
