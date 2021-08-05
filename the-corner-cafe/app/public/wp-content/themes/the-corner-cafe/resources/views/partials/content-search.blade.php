<a href="{{ get_permalink() }}">
<article @php post_class() @endphp>
  <header>
    <h3 class="entry-title">{!! get_the_title() !!}</h3>
    @if (get_post_type() === 'post')
      <p>post</p>
    @endif
  </header>

</article>
</a>
