@extends('layouts.app')

@section('content')
  @include('partials.extra-menu')
  @include('partials.categories-menu')
  {{-- @include('partials.product-bredcramps') --}}
  @include('partials.product-details')
  @include('partials.product-footer')
@endsection
