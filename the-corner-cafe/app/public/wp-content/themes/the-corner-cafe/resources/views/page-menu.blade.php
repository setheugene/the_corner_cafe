@extends('layouts.app')

@section('content')

{{-- hero common --}}
  @include('partials.component-block-hero-common')

{{-- menu section --}}
  @include('partials.component-section-menu')
  
{{-- primary cta --}}
  @include('partials.component-block-primary-cta')

@endsection