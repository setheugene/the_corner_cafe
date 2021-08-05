@extends('layouts.app')

@section('content')

{{-- hero common --}}
  @include('partials.component-block-hero-common')

{{-- locations section --}}
@include('partials.component-block-locations')

{{-- contact form section --}}
@include('partials.component-block-contact-form')

{{-- headquarters section --}}
@include('partials.component-block-headquarters')

@endsection