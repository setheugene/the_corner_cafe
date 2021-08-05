@php $section_fields = App::getWoodTwoCardsFields();

$leftLink = $section_fields['left_card_button'];
if( $leftLink ): 
    $leftLink_url = $leftLink['url'];
    $leftLink_title = $leftLink['title'];
    $leftLink_target = $leftLink['target'] ? $leftLink['target'] : '_self';
endif;

$leftDownload = $section_fields['left_card_download'];
$leftDownload_url = $leftDownload['url'];

$rightLink = $section_fields['right_card_button'];
if( $rightLink ): 
    $rightLink_url = $rightLink['url'];
    $rightLink_title = $rightLink['title'];
    $rightLink_target = $rightLink['target'] ? $rightLink['target'] : '_self';
endif;
@endphp

<div class="section-wood">
    <div class="two-cards-container">
        <div class="card-container left-card">
            <h3 class="heading">{{ $section_fields['left_card_heading']}}</h3>
            <div class="paragraph">{{ $section_fields['left_card_paragraph']}}</div>
            <div class="button-primary">
              @if ( $section_fields['left_card_choice'] == "link")
                <a href="{{ esc_url( $leftLink_url )}}" target="{{esc_attr( $leftLink_target )}}">{{esc_html( $leftLink_title )}}</a>
              @elseif ( $section_fields['left_card_choice'] == "download")
                <a download href="{{ esc_url( $leftDownload_url ) }}">{{ $section_fields['left_card_download_text'] }}</a>
              @endif
            </div>
        </div>
        <div class="card-container right-card">
            <h3 class="heading">{{ $section_fields['right_card_heading']}}</h3>
            <div class="paragraph">{{ $section_fields['right_card_paragraph']}}</div>
            <div class="button-primary">
              @if ( $section_fields['right_card_choice'] == "link")
                <a href="{{ esc_url( $rightLink_url )}}" target="{{esc_attr( $rightLink_target )}}">{{esc_html( $rightLink_title )}}</a>
              @elseif ( $section_fields['right_card_choice'] == "donation")
                <a href="#" onclick="return false" id="donation-popup-trigger">{{ $section_fields['right_card_donation_popup_button_text'] }}</a>
              @endif
            </div>
        </div>
    </div>
</div>
{{-- donations modal --}}
@include('partials.component-modal-donations')