@php $section_fields = App::getHalfOverlayFields(); 

$link = $section_fields['overlay_link'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
@endphp

<style>
  .half-overlay-bg::before {
    background-image: url( {{ $section_fields['overlay_background'] }} );
  }
</style>

<div class="half-overlay">
    <div class="half-overlay-bg">
        <div class="overlay">
            <div class="header-offset">
                <h2 class="oleo green" @if (! $section_fields['overlay_bottom_heading']):
                    style="margin-bottom: 30px;"@endif>
                    {{ $section_fields['overlay_top_heading']}}</h2>
                <h2 class="dark">{{ $section_fields['overlay_bottom_heading']}}</h2>
            </div>
            <div class="paragraph">{!! $section_fields['overlay_paragraph'] !!}</div>
            <div class="button-primary">
                <a href="{{ esc_url( $link_url )}}" target="{{esc_attr( $link_target )}}">{{esc_html( $link_title )}}</a>
            </div>
        </div>
    </div>
</div>