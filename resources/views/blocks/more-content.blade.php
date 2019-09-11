@php
  $arrayDSC = explode("<!--more-->", $description);
  $show = $arrayDSC[0];
  $hide = $arrayDSC[1];
  $id = rand();
@endphp

<div class="more-content">
  {!! $show !!}
  <div class="more-content__more" data-show-more={{ $id }}>
    {!! $hide !!}
  </div>
  <button
    class="more-content__button"
    data-text="{{ _e('see more', 'MiloCasa') }}"
    data-text-show="{{ _e('hide', 'MiloCasa') }}"
    data-show-more-button={{ $id }}
    data-is-show="false"
    >
    {{ _e('see more', 'MiloCasa') }}
  </button>
</div>
