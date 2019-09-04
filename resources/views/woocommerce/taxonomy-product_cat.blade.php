@extends('layouts.app')

@section('content')
@php
  $cat = get_queried_object();

  if($cat -> parent) $parent_id = $cat -> parent;
  $cat_id = $cat -> term_id;
@endphp

@include('partials.extra-menu')
@include('partials.categories-menu')
@include('partials.products', ['cat_id' => $cat_id])
@endsection
