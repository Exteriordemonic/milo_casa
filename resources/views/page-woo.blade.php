{{--
  Template Name: WOO
--}}

@extends('layouts.app')

@section('content')
  <section class="woo">
    <div class="container">
      @while(have_posts()) @php the_post() @endphp
        @php the_content() @endphp
      @endwhile
    </div>
  </section>
@endsection
