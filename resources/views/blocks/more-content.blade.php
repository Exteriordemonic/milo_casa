@php
  $arrayDSC = explode("<!--more-->", $description);
  $show = $arrayDSC[0];
  $hide = $arrayDSC[1];
  $id = rand();
@endphp

<div class="more-content">
  <div data-more>
    {!! $show !!}
  </div>
  <div class="more-content__more" data-show-more={{ $id }}>
    {!! $hide !!}
  </div>
  <button
    class="more-content__button"
    data-text="{{ _e('AFFICHER PLUS', 'MiloCasa') }}"
    data-text-show="{{ _e('AFFICHER PLUS', 'MiloCasa') }}"
    data-show-more-button={{ $id }}
    data-is-show="false"
    >
    {{ _e('AFFICHER PLUS', 'MiloCasa') }}
    <img src="@asset("images/right-arrow.png")" alt="toggle content" class="more-content__toggle-img">
  </button>
</div>
