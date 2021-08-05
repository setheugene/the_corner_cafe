@php $section_fields = App::getOrderOnlineFields();

  $order_cards = [];
    while(have_rows('order_cards')) {
      the_row();
      $order_cards[] = [
        'location' => get_sub_field('location'),
        'link' => get_sub_field('link')
    ];
  }
@endphp

<div class="section-order-online">
    <h2 class="oleo">{{ $section_fields['heading']}}</h2>
    <div class="card-container">
        @foreach ($order_cards as $card)
        @php $link = $card['link'];
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        @endphp
        <div class="gingham-bg">
            <div class="location-card">
                <h3 class="heading">{{ $card['location']}}</h3>
                <div class="button-primary no-shadow">
                    <a href="{{ esc_url( $link_url )}}" target="{{esc_attr( $link_target )}}">{{esc_html( $link_title )}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>