@extends('layouts.app')

@section('content')
  {{-- large hero --}}
  @include('partials.component-block-hero-large')

  {{-- section light --}}
  @include('partials.component-block-light-gingham')

  {{-- section half overlay --}}
  @include('partials.component-block-half-overlay')

  {{-- section testimonial --}}
  @include('partials.component-block-testimonial')

  {{-- section menu cta --}}
  @include('partials.component-block-image-right')

@endsection