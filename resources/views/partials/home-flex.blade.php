@php
  $flex = get_field('flex');
@endphp

@if ($flex)
<section class="flex flex--home ">
<div class="container">
    <div class="flex__wrapper">
      @foreach ($flex as $item)
        @include('blocks.block-flex', ['data'=>$item])
      @endforeach
    </div>
  </div>
</section>
@endif
