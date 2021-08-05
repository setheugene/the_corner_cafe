@php $section_fields = App::getGiftCardsFields();

  $gift_cards = [];
    while(have_rows('gift_card_action_cards')) {
      the_row();
      $gift_cards[] = [
        'card_title' => get_sub_field('card_title'),
        'card_link' => get_sub_field('card_link')
    ];
  }
@endphp

<div class="section-gift-cards">
    <h2 class="oleo">{{ $section_fields['heading']}}</h2>
    <div class="card-container">
        @foreach ($gift_cards as $card)
        @php $link = $card['card_link'];
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        @endphp
            <div class="action-card">
                <h3 class="heading">{{ $card['card_title']}}</h3>
                <div class="button-primary">
                    <a href="{{ esc_url( $link_url )}}" target="{{esc_attr( $link_target )}}">{{esc_html( $link_title )}}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>