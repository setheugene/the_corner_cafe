@extends('layouts.app')

@section('content')

{{-- hero common --}}
  @include('partials.component-block-hero-common')

{{-- order online main section --}}
@include('partials.component-section-order-online')

@endsection