@extends('layouts.app')

@section('content')

{{-- hero common --}}
@include('partials.component-block-hero-common')

{{-- gift cards main section --}}
@include('partials.component-section-gift-cards')

@endsection