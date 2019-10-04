<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp style="overflow-x: hidden">
    @php do_action('get_header') @endphp

    @include('partials.header')
    @include('partials.sidebar')
    @include('partials.wishlist')
    @include('partials.mini-cart')
    @include('partials.popup')

    <div class="wrap" role="document">
      <div class="slide-text">
        <marquee class="slide-text__text" behavior="scroll"  direction="right">
          {!! option('sideText') !!}
        </marquee>
      </div>
      <div class="content">
        <main id="main" class="main" data-main>
          @yield('content')
        </main>
      </div>
    </div>
    @php do_action('get_footer') @endphp

    @include('partials.contact')
    @include('partials.footer')

    @php wp_footer() @endphp
  </body>
</html>
