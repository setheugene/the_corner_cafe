@php 
$headquarters_info = get_field('headquarters_location', 'option');
@endphp

<div class="section-headquarters">
    <div class="info-container">
        <div class="inner-container">
            <h3 class="title">OUR HEADQUARTERS:</h3>
            <div class="middle">
                <div class="phone"><a href="tel:{{$headquarters_info['phone_number']}}">{{$headquarters_info['phone_number']}}</a></div>
                <div class="email"><a href="emailto:{{$headquarters_info['email']}}">{{$headquarters_info['email']}}</a></div>
            </div>
            <a href="{{$headquarters_info['address_link']}}" class="right">
                <div class="street">{{$headquarters_info['street_address']}}</div>
                <div class="city">{{$headquarters_info['city_state_and_zip']}}</div>
            </a>
        </div>
    </div>
</div>