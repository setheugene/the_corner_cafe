@php $section_fields = App::getDonationModalFields(); @endphp

<div id="donations" class="modal-donations">
    <div class="donations-modal-content">
        <div class="exit"></div>
        <h4 class="oleo">{{ $section_fields['form_header'] }}</h4>
        {!! do_shortcode($section_fields['form_shortcode']) !!}
    </div>
</div>