@php $section_fields = App::getEmploymentFields(); 

$download = $section_fields['downloadable_application'];
$download_url = $download['url'];

@endphp

<div class="section-employment">
    <div class="employment-description">{!! $section_fields['description'] !!}</div>
    <div class="employment-two-column">
        <div class="column-left">
        @php while(have_rows('job_openings')): the_row(); @endphp
            <h4 class="location">{{ the_sub_field('location') }}<span class="circle plus"></span></h4>
            <div class="positions-container">
            @php while(have_rows('positions')): the_row(); @endphp
            <div class="position">
                <h6>{{ the_sub_field('job_position') }}</h6>
                {!! the_sub_field('job_description') !!}
            </div>
        @php endwhile; @endphp
            </div>
        @php endwhile; @endphp
        <div class="button-primary">
            <a target="_new" download href="{{ esc_url( $download_url ) }}">{{ $section_fields['application_download_button_text'] }}</a>
        </div>
        </div>
        <div class="column-right">
            <h4 class="oleo">{{ $section_fields['form_header'] }}</h4>
            {!! do_shortcode($section_fields['form_shortcode']) !!}
        </div>
    </div>
</div>