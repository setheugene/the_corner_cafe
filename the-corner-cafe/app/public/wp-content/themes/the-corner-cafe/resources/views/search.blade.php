@extends('layouts.app')

@section('content')
<style>
  .hero-common-bg {
    background-image: url('/wp-content/themes/the-corner-cafe/resources/assets/images/Corner-Cafe-Riverside.jpg');
    background-position-y: bottom;
  }
</style>

<div class="hero-common">
    <div class="hero-common-bg"></div>
    <h1>Search Results for:<span style="display: block;">{{ the_search_query() }}</span></h1>
</div>
<div class="search-body">
  @if (!have_posts())

    <h3 class="noResults">Sorry, no results were found.</h3>

  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
</div>

@endsection
