@php $hero_fields = App::getCommonHeroFields(); @endphp

<style>
  .hero-common-bg {
    background-image: url( {{ $hero_fields['hero_image'] }} );
    background-position-y:{{ $hero_fields['hero_image_position'] }} ;
  }
</style>

<div class="hero-common">
    <div class="hero-common-bg"></div>
    <h1>{{ $hero_fields['hero_title'] }}</h1>
</div>