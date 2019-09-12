@extends('layouts.app')

@section('content')
  <section class="search" style="margin-top: 200px;">
    <div class="container">
      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(true) !!}
      @endif

      @while(have_posts()) @php the_post() @endphp

      @endwhile
      {!! get_product_search_form( ); !!}
    </div>
  </section>
@endsection
