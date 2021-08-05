<article @php post_class() @endphp>
@php 
$link = get_field('post_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif; 

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

@endphp

{{-- START HERO COMMON --}}
  <style>
    .hero-common-bg {
      @if ( has_post_thumbnail( $post->ID ) )
      background-image: url( @php echo $image[0]; @endphp );
      @else 
      background-image: url('/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg');
      @endif
      background-position: center center;
    }
  </style>

  <div class="hero-common">
      <div class="hero-common-bg"></div>
      <h1>{!! get_the_title() !!}</h1>
  </div>
{{-- END HERO COMMON --}}
  <div class="single-post-main">
    <div class="entry-content">
      @php the_content() @endphp
      @if (get_field('post_link'))
      <div class="button-primary">
        <a href="{{ esc_url( $link_url )}}" target="{{esc_attr( $link_target )}}">{{esc_html( $link_title )}}</a>
      </div>
      @endif
    </div>
    <div class="related-posts">
      <h4 class="oleo">you might also be interested in:</h4>
{{-- IF USER SELECTS RELATED ARICLES IN CUSTOM FIELD --}}
@php $post_objects = get_field('related_articles'); @endphp
@if( $post_objects )
   @foreach( $post_objects as $post)
        @php setup_postdata($post) @endphp
        <div class="post">
          @if (get_the_post_thumbnail($post->ID))
          <div class="photo"><img src="{{ get_the_post_thumbnail_url($post->ID, 'large') }}" alt="featured image"></div>
          @else
          <div class="photo"><img src="/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg" /></div>
          @endif
          <h6>{!! get_the_title($post->ID) !!}</h6>
          <div class="link"><a href="{{ the_permalink($post->ID) }}">Read More</a></div>
      </div>
    @endforeach
    @php wp_reset_postdata() @endphp
{{-- ELSE TWO MOST RECENT POSTS WILL POPULATE --}}
@else
@php
$recentPosts = wp_get_recent_posts( array(
	'numberposts'      => 2,
	'orderby'          => 'publish_date',
	'order'            => 'DESC',
  'post_status'      => 'publish',
  'post__not_in' => array( get_the_ID() ),
) );
@endphp
@foreach( $recentPosts as $post )
      <div class="post">
        @if (get_the_post_thumbnail($post["ID"]))
        <div class="photo"><img src="{{ get_the_post_thumbnail_url($post["ID"],'large') }}" alt="featured image"></div>
        @else
        <div class="photo"><img src="/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg" /></div>
        @endif
        <h6>{{ esc_attr($post["post_title"]) }}</h6>
        <div class="link"><a href="{{ get_permalink($post["ID"]) }}">Read More</a></div>
      </div>
@endforeach
@php wp_reset_postdata(); @endphp
@endif
    </div>
  </div>
</article>
