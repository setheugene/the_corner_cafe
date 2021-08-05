@php $section_fields = App::getSectionPartnershipsFields();

  $partner = [];
    while(have_rows('partners')) {
      the_row();
      $partner[] = [
        'partner_logo' => get_sub_field('partner_logo'),
        'partner_description' => get_sub_field('partner_description'),
        'partner_link' => get_sub_field('partner_link')
    ];
  }
@endphp

<div class="section-partnerships">
    <div class="gingham-banner"></div>
    <div class="section-partnerships__heading">{{ $section_fields['partnerships_heading'] }}</div>
    <div class="section-partnerships__description"><p>{{ $section_fields['partnerships_description'] }}</p></div>
    <div class="partners-container">
        @foreach ($partner as $card)
        @php $logo = $card['partner_logo']; @endphp
        <div class="partner-card">
            <a target="_blank" href="{!! $card['partner_link'] !!}">
                <div class="partner-logo">
                    <img src="{!! esc_url($logo['url']) !!}" alt="{!! esc_attr($logo['alt']) !!}">
                </div>
            </a>
            <div class="partner-description"><p>{!! $card['partner_description'] !!}</p></div>
        </div>
        @endforeach
      </div>
              <div id="donations"></div>
</div>
