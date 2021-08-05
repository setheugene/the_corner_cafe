@php $section_fields = App::getSectionLightGinghamFields();

$link = $section_fields['light_section_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
@endphp
<div class="light-section">
<div class="gingham-banner"></div>
<div class="section-light container">
    
    <div class="section-light__left">
        {{-- start landmark modal --}}
        @include('partials.component-modal-landmarks')
        {{-- end landmark modal --}}
    </div>
    <div class="section-light__right">
        <div class="header-offset">
            <h2 class="oleo red">{{$section_fields['light_section_heading_top']}}</h2>
            <h2 class="dark">{{$section_fields['light_section_heading_bottom']}}</h2>
        </div>
        <div class="section-light__right--paragraph">{!! $section_fields['light_section_paragraph'] !!}</div>
        <div class="button-primary">
            <a href="{{ esc_url( $link_url )}}" target="{{esc_attr( $link_target )}}">{{esc_html( $link_title )}}</a>
        </div>
    </div>
</div>
</div>