<form role="search" method="get" class="search-form" action="{{ esc_url( home_url( '/' ) ) }}">
  <label class="search-label">
    <span class="screen-reader-text">{{ _x( 'Search for:', 'label' ) }}</span>
    <input type="search" class="search-field" placeholder="{!! esc_attr_x( 'Search &hellip;', 'placeholder' ) !!}" onfocus="this.value=''" value="{{ get_search_query() }}" name="s" />
  </label>
  <button type="submit" class="search-button hide" value="{{ esc_attr_x( 'Search', 'submit button' ) }}"><i class="button-icon far fa-search"></i></button>
</form>