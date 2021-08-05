@extends('layouts.app')
@section('content')

  {{-- START HERO COMMON --}}
<style>
  .hero-common-bg {
    background-image: url( {{ get_field('common_hero_background_image', 56) }} );
    background-position-y:{{ get_field('hero_image_position', 56) }} ;
  }
</style>
<div class="hero-common">
    <div class="hero-common-bg"></div>
    <h1>{{ get_field('common_hero_title', 56) }}</h1>
</div>
{{-- END HERO COMMON --}}
{{-- START BLOG LISTING --}}
@php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
 
$args = array(
    'post_type' => 'post',
    'post_status'=>'publish',
    'posts_per_page' => 6,
    'paged' => $paged,
);
 
$the_query = new WP_Query($args);
@endphp
@if ( $the_query->have_posts() )
     <div class="section-blog-posts">
  <div class="blog-listing">
    @while (have_posts()) @php the_post() @endphp
        @include('partials.content-'.get_post_type())
    @endwhile
 </div>
    <div class="pagination">
        <?php
        echo paginate_links( array(
            'format'    => 'page/%#%',
            'current'   => $paged,
            'total'     => $the_query->max_num_pages,
            'mid_size'  => 2,
            'prev_text' => __(''),
            'next_text' => __('')
        ) );
        ?>
    </div>
  </div>
@endif
{{-- END BLOG LISTING --}}
{{-- START WOOD SECTION --}}
@php 
$leftLink = get_field('left_card_button', 56);
if( $leftLink ): 
    $leftLink_url = $leftLink['url'];
    $leftLink_title = $leftLink['title'];
    $leftLink_target = $leftLink['target'] ? $leftLink['target'] : '_self';
endif;

$rightLink = get_field('right_card_button', 56);
if( $rightLink ): 
    $rightLink_url = $rightLink['url'];
    $rightLink_title = $rightLink['title'];
    $rightLink_target = $rightLink['target'] ? $rightLink['target'] : '_self';
endif;
@endphp

<div class="section-wood">
    <div class="two-cards-container">
        <div class="card-container left-card">
            <h3 class="heading">{{ get_field('left_card_heading', 56) }}</h3>
            <div class="paragraph">{{ get_field('left_card_paragraph', 56) }}</div>
            <div class="button-primary">
              @if (get_field('left_card_choice', 56) == "link")
                <a href="{{ esc_url( $leftLink_url )}}" target="{{esc_attr( $leftLink_target )}}">{{esc_html( $leftLink_title )}}</a>
              @elseif (get_field('left_card_choice', 56) == "download")
                <a download href="{{ esc_url(get_field('left_card_download', 56)['url']) }}">{{ get_field('left_card_download_text', 56) }}</a>
              @endif
            </div>
        </div>
        <div class="card-container right-card">
            <h3 class="heading">{{ get_field('right_card_heading', 56) }}</h3>
            <div class="paragraph">{{ get_field('right_card_paragraph', 56) }}</div>
            <div class="button-primary">
              @if (get_field('right_card_choice', 56) == "link")
                <a href="{{ esc_url( $rightLink_url )}}" target="{{esc_attr( $rightLink_target )}}">{{esc_html( $rightLink_title )}}</a>
              @elseif (get_field('right_card_choice', 56) == "donation")
                <a href="#" id="donation-popup-trigger">{{ get_field('right_card_donation_popup_button_text', 56) }}</a>
              @endif
            </div>
        </div>
    </div>
</div>
{{-- END WOOD SECTION --}}
@endsection
