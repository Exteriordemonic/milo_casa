@extends('layouts.app')

@section('content')
  @include('partials.extra-menu')
  @include('partials.categories-menu')
  @include('partials.mobile-search')
  @include('partials.products', ['cat_id' => $cat_id])
@endsection
