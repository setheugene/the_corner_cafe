@php 
$riverside_info = get_field('riverside_location', 'option');
$independence_info = get_field('independence_location', 'option');
$liberty_info = get_field('liberty_location', 'option');
@endphp

<div id="locations" class="section-locations">
    <div class="gingham-banner"></div>
    <h2 class="oleo">Our Locations</h2>
    <div class="locations-container">

        <div class="location">
            <div class="title">RIVERSIDE</div>
            <div class="photo"><img src="{{$riverside_info['photo']}}" alt="riverside missouri building"></div>
            <div class="social-icons">
                <a target="_blank" href="{{$riverside_info['facebook_link']}}"><div class="facebook-icon"></div></a>
                <a target="_blank" href="{{$riverside_info['twitter_link']}}"><div class="twitter-icon"></div></a>
                <a target="_blank" href="{{$riverside_info['instagram_link']}}"><div class="instagram-icon"></div></a>
            </div>
            <div class="phone"><a href="tel:{{$riverside_info['phone_number']}}">{{$riverside_info['phone_number']}}</a></div>
            <div class="email"><a href="mailto:{{$riverside_info['email']}}">{{$riverside_info['email']}}</a></div>
            <a target="_blank" href="{{$riverside_info['address_link']}}" class="address-link">
                <div class="address-line-one">{{$riverside_info['street_address']}}</div>
                <div class="address-line-two">{{$riverside_info['city_state_and_zip']}}</div>
            </a>
        </div>

        <div class="location">
            <div class="title">LIBERTY</div>
            <div class="photo"><img src="{{$liberty_info['photo']}}" alt="liberty missouri building"></div>
            <div class="social-icons">
                <a target="_blank" href="{{$liberty_info['facebook_link']}}"><div class="facebook-icon"></div></a>
                <a target="_blank" href="{{$liberty_info['twitter_link']}}"><div class="twitter-icon"></div></a>
                <a target="_blank" href="{{$liberty_info['instagram_link']}}"><div class="instagram-icon"></div></a>
            </div>
            <div class="phone"><a href="tel:{{$liberty_info['phone_number']}}">{{$liberty_info['phone_number']}}</a></div>
            <div class="email"><a href="mailto:{{$liberty_info['email']}}">{{$liberty_info['email']}}</a></div>
            <a target="_blank" href="{{$liberty_info['address_link']}}" class="address-link">
                <div class="address-line-one">{{$liberty_info['street_address']}}</div>
                <div class="address-line-two">{{$liberty_info['city_state_and_zip']}}</div>
            </a>
        </div>

        <div class="location">
            <div class="title">INDEPENDENCE</div>
            <div class="photo"><img src="{{$independence_info['photo']}}" alt="independence missouri building"></div>
            <div class="social-icons">
                <a target="_blank" href="{{$independence_info['facebook_link']}}"><div class="facebook-icon"></div></a>
                <a target="_blank" href="{{$independence_info['twitter_link']}}"><div class="twitter-icon"></div></a>
                <a target="_blank" href="{{$independence_info['instagram_link']}}"><div class="instagram-icon"></div></a>
            </div>
            <div class="phone"><a href="tel:{{$independence_info['phone_number']}}">{{$independence_info['phone_number']}}</a></div>
            <div class="email"><a href="mailto:{{$independence_info['email']}}">{{$independence_info['email']}}</a></div>
            <a target="_blank" href="{{$independence_info['address_link']}}" class="address-link">
                <div class="address-line-one">{{$independence_info['street_address']}}</div>
                <div class="address-line-two">{{$independence_info['city_state_and_zip']}}</div>
            </a>
        </div>

    </div>
</div>