@php
  $showPopup = option('show_popup');
  $imagePopup = option('popup')[ID];
  $imagePopupMobile = option('popup__mobile')[ID];
  $linkPopup = option('link');
@endphp

@if ($showPopup)
<section class="popup" data-popup>
  <div class="popup__wrapper">
    <a href="{{ $linkPopup }}">
      {!! image($imagePopup, 'full', 'popup__image') !!}
      {!! image($imagePopupMobile, 'full', 'popup__image popup__image--mobile') !!}
    </a>
    <button class="popup__close" data-popup-close></button>
  </div>
</section>
@endif
