{{--
  Template Name: Content
--}}

@extends('layouts.app')

@section('content')
  @include('partials.extra-menu')
  <section class="mypage-content">
    <div class="container">
      @while(have_posts()) @php the_post() @endphp
        @php the_content() @endphp
      @endwhile
    </div>
  </section>
@endsection
