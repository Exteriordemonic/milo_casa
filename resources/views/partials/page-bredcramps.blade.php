@php
  $queried_object = get_queried_object();

  $name = $queried_object->name != '' ? $queried_object->name : $queried_object-> post_title;
@endphp

<nav aria-label="breadcrumb" class="breadcrumb">
  <ol class="breadcrumb__list breadcrumb__list--noborder">
    <li class="breadcrumb__item">
      <a href="{{ get_home_url() }}">
        ACCUEIL
      </a>
    </li>
    @if ($queried_object->parent != 0 && $queried_object->taxonomy == "product_cat")
      <li class="breadcrumb__item">
        <a href="{{ get_home_url()}}/collection">
          COLLECTION
        </a>
      </li>
    @endif
    <li class="breadcrumb__item">
      {{ $name }}
    </li>
  </ol>
</nav>


