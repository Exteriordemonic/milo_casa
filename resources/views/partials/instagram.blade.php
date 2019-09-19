@php
  $flex = get_field('flex');
@endphp

@if ($flex)
<section class="flex flex--instagram">
<div class="container">
    <div class="flex__wrapper">
        @include('blocks.block-flex', ['data'=>$instagram])
    </div>
  </div>
</section>
@endif
