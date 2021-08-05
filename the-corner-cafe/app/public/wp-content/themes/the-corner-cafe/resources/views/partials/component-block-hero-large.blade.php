@php $hero_fields = App::getLargeHeroFields(); @endphp

<style>
  .hero-bg {
    background-image: url( {{ $hero_fields['hero_image'] }} );
  }
</style>

<div class="big-hero">
  <div class="hero-bg"></div>
  <div class="hero-left">
    <div class="hero-pre-title">{{ $hero_fields['hero_pre_title'] }}</div>
    <h1 class="hero-main-title">{{ $hero_fields['hero_main_title_one'] }}<span>{{ $hero_fields['hero_main_title_two'] }}</span></h1>
    <div class="hero-subtitle">
      <div class="short-line left"></div>
      <div class="text">{{ $hero_fields['hero_subtitle'] }}</div>
      <div class="short-line right"></div>
    </div>
  </div>
  <div id="featured-dish" class="hero-right">
    <img src="{{ $hero_fields['hero_featured_dish'] }}" alt="featured dish">
  </div>
</div>