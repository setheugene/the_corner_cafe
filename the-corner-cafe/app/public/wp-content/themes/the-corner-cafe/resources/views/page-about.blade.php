@extends('layouts.app')

@section('content')

{{-- hero common --}}
  @include('partials.component-block-hero-common')

{{-- about block --}}
@include('partials.component-section-about')

{{-- timeline block --}}
@include('partials.component-block-timeline')

{{-- primary cta --}}
@include('partials.component-block-primary-cta')

{{-- partnerships section --}}
@include('partials.component-block-partnerships')

{{-- questions / donations section --}}
@include('partials.component-block-wood-two-cards')

@endsection