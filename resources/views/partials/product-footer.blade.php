@php
  $flex = option('flex');
@endphp

@if ($flex)
<section class="flex">
  <div class="container">
    <div class="flex__wrapper">
      @foreach ($flex as $item)
        @include('blocks.block-flex', ['data'=>$item])
      @endforeach
    </div>
  </div>
</section>
@endif
