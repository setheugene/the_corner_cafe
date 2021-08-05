@php $section_fields = App::getSectionAboutFields(); 

$link = $section_fields['about_section_bottom_signage'];
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;

$largeImage = $section_fields['about_section_large_photo'];
$smallImage = $section_fields['about_section_small_photo'];

@endphp
       
<div class="about-section">
    <div class="about-section-top">
        <div class="about-section-top-left">
            <div class="header-offset">
                <h2 class="oleo red">{{$section_fields['about_section_heading_top']}}</h2>
                <h2 class="dark">{{$section_fields['about_section_heading_bottom']}}</h2>
            </div>
            <div class="copy top-third">{!! $section_fields['about_section_top_text'] !!}</div>
        </div>
        <div class="about-section-top-right">
            <div class="images-container">
                <div class="large-image">
                    <img src="{{ esc_url($largeImage['url']) }}" alt="{{ esc_attr($largeImage['alt']) }}" />
                </div>
                <div class="small-image">
                    <img src="{{ esc_url($smallImage['url']) }}" alt="{{ esc_attr($smallImage['alt']) }}" />
                </div>
            </div>
        </div>
    </div>
    <div class="about-section-middle">
        <div class="about-section-middle-left">
            {{-- start landmark modal --}}
            @include('partials.component-modal-landmarks')
            {{-- end landmark modal --}}
        </div>
        <div class="about-section-middle-right">
            <div class="copy">{!! $section_fields['about_section_middle_text'] !!}</div>
        </div>
    </div>
    <div class="about-section-bottom">
        <div class="about-section-bottom-left">
            <div class="copy">{!! $section_fields['about_section_bottom_text'] !!}</div>
        </div>
        <div class="about-section-bottom-right">
            <div class="button-signage">
                <a href="{{ esc_url( $link_url )}}" target="{{esc_attr( $link_target )}}"><span>{{esc_html( $link_title )}}</span></a>
            </div>
        </div>
    </div>
</div>
       
       
