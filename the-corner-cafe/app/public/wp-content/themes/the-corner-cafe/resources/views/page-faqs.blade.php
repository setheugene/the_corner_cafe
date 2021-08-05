@extends('layouts.app')

@section('content')

{{-- hero common --}}
  @include('partials.component-block-hero-common')

{{-- faq accordions block --}}
@include('partials.component-section-faq-accordions')

{{-- Primary CTA --}}
@include('partials.component-block-primary-cta')

@endsection