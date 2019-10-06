@php
  $flex = get_field('flex');
@endphp

@if ($flex)
<section class="flex">
  <header class="section__header">
    <h1 class="section__title">
      {{ the_title() }}
    </h1>
    @include('partials.page-bredcramps')
  </header>
  <div class="container">
    <div class="flex__wrapper">
      @foreach ($flex as $item)
        @include('blocks.block-flex', ['data'=>$item])
      @endforeach
    </div>
  </div>
</section>
@endif

