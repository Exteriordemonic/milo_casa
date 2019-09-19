@php
  $slider = get_field('product-colors');
@endphp

@foreach ($slider as $slide)

@php
  $images = $slide['images'];
  $colorID = $slide['color'][0];
  $pa_color = get_term_by( 'id', $colorID, 'pa_color');
@endphp
<div class="slider @if($loop->first) -is-active @endif" data-variation-slide={{ $pa_color->slug }}>
  <!-- Flickity HTML init -->
  <div class="slider__wrapper flickity-main-slider">
    @foreach ($images as $img)
      <a class="slider__cell" href="{{ image_url($img['ID'], 'full') }}" data-fancybox="gallery{{ $loop->parent->index }}">
        {!! image($img['ID'], 'full', 'slider__image') !!}
      </a>
    @endforeach
  </div>
  <!-- NAV -->
  <div class="slider__wrapper slider__wrapper--nav @if(count($images) < 4) slider__wrapper--dont-transform @endif flickity-slider-nav">
    @foreach ($images as $img)
      <div class="slider__cell">
        {!! image($img['ID'], 'slider_thumbnail', 'slider__image') !!}
      </div>
    @endforeach
  </div>
</div>
@endforeach
