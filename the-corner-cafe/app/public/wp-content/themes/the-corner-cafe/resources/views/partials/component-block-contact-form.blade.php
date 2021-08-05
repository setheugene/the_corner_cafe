@php $section_fields = App::getContactFormSectionFields(); @endphp


<div class="section-contact">
    <div class="section-contact__top">{!! $section_fields['copy'] !!}</div>
    <div class="section-contact__bottom">
        <div class="section-contact__bottom-left">
            {!! do_shortcode($section_fields['form_shortcode']) !!}
        </div>
        <div class="section-contact__bottom-right">
            {{-- start landmark modal --}}
            @include('partials.component-modal-landmarks')
            {{-- end landmark modal --}}
        </div>
    </div>
</div>