@php
  $arrayDSC = explode("<!--more-->", $description);
  $show = $arrayDSC[0];
  $hide = $arrayDSC[1];
@endphp

<div class="more-content">
  {!! $show !!}
  <div class="more-content__more">
    {!! $hide !!}
  </div>
  <button class="more-content__button" data-show-more>
    {{ _e('see more', 'MiloCasa') }}
  </button>
</div>
