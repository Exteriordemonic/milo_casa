@php
    $contact__title = option('contact_title');
    $contact__top = option('contact_content_top');
    $contact__bottom = option('contact_content_bottom');
    $contact__img = option('contact_img')['ID'];
@endphp

<section class="contact">
  {!! image($contact__img, 'full', 'contact__bg') !!}
  <div class="container">
    <div class="contact__wrapper">
      <h2 class="contact__title">
        {!! $contact__title !!}
      </h2>
      <address class="contact__address">
        <div class="contact__address-wrapper">
          {!! $contact__top !!}
        </div>
        <div class="contact__address-wrapper">
          {!! $contact__bottom !!}
        </div>
      </address>
    </div>
  </div>
</section>
