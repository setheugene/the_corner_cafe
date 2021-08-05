@php $section_fields = App::getSectionPrimaryCTAFields(); 

$link = $section_fields['primary_cta_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
@endphp

<style>
    .section-primary-cta::before {
        background: url( {{ $section_fields['primary_cta_background_image'] }} );
        background-position-y:{{ $section_fields['primary_cta_image_position'] }} ;
       
    }
</style>

<div class="section-primary-cta {{ $section_fields['primary_cta_overlay_color'] }}">
    <div class="text">{{$section_fields['primary_cta_text']}}</div>
    <div class="button-primary">
        <a href="{{ esc_url( $link_url )}}" target="{{esc_attr( $link_target )}}">{{esc_html( $link_title )}}</a>
    </div>
</div>