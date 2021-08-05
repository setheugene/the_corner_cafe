<article @php post_class() @endphp>
  <div class="card">
    @if (get_the_post_thumbnail())
    <div class="photo"><a href="{{ get_permalink() }}">{{the_post_thumbnail('large')}}</a></div>
    @else
    <div class="photo"><a href="{{ get_permalink() }}"><img src="/wp-content/uploads/2020/05/Corner-Cafe-Independence.jpg" /></a></div>
    @endif
    <div class="text">
      <div class="title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></div>
      <div class="summary"><a href="{{ get_permalink() }}">@php the_excerpt() @endphp</a></div>
      <div class="link"><a href="{{ get_permalink() }}">Read More</a></div>
    </div>
  </div>
</article>
