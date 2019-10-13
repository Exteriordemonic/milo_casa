{{--
  Template Name: About
--}}

@extends('layouts.app')

@section('content')
  @include('partials.extra-menu')
  <section class="section section--about">
    <header class="section__header">
      <h1 class="section__title">
        {{ the_title() }}
      </h1>
      @include('partials.page-bredcramps')
    </header>
    <div class="container">
      <div class="section__content">
        {!! get_post_field('post_content', $post->ID)  !!}
      </div>
    </div>
  </section>
@endsection
