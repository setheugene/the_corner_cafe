@php $modal_fields = App::getLandmarkModalFields(); @endphp

<div class="landmark-modal">
    <img src="{{$modal_fields['landmark_image']}}" alt="restaurant landmark item">
    <div id="trigger" class="neon-clock-tooltip trigger">+</div>
    <div class="tooltip-modal">
        <div class="content">
            <div class="header">{{$modal_fields['modal_header']}}</div>
            <div class="paragraph">{!! $modal_fields['modal_paragraph'] !!}</div>
            <div id="landmark-exit" class="button-primary"><a onclick="return false" href="">Close</a></div>
        </div>
    </div>
</div>
