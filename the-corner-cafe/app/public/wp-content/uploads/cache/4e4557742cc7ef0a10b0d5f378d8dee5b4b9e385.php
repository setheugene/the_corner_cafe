<?php 
$riverside_info = get_field('riverside_location', 'option');
$independence_info = get_field('independence_location', 'option');
$liberty_info = get_field('liberty_location', 'option');
?>

<div class="section-locations">
    <div class="gingham-banner"></div>
    <h2 class="oleo">Our Locations</h2>
    <div class="locations-container">

        <div class="location">
            <div class="title">RIVERSIDE</div>
            <div class="photo"><img src="<?php echo e($riverside_info['photo']); ?>" alt="riverside missouri building"></div>
            <div class="social-icons">
                <a target="_blank" href="<?php echo e($riverside_info['facebook_link']); ?>"><div class="facebook-icon"></div></a>
                <a target="_blank" href="<?php echo e($riverside_info['twitter_link']); ?>"><div class="twitter-icon"></div></a>
            </div>
            <div class="phone"><a href="tel:<?php echo e($riverside_info['phone_number']); ?>"><?php echo e($riverside_info['phone_number']); ?></a></div>
            <div class="email"><a href="mailto:<?php echo e($riverside_info['email']); ?>"><?php echo e($riverside_info['email']); ?></a></div>
            <a target="_blank" href="<?php echo e($riverside_info['address_link']); ?>" class="address-link">
                <div class="address-line-one"><?php echo e($riverside_info['street_address']); ?></div>
                <div class="address-line-two"><?php echo e($riverside_info['city_state_and_zip']); ?></div>
            </a>
        </div>

        <div class="location">
            <div class="title">INDEPENDENCE</div>
            <div class="photo"><img src="<?php echo e($independence_info['photo']); ?>" alt="independence missouri building"></div>
            <div class="social-icons">
                <a target="_blank" href="<?php echo e($independence_info['facebook_link']); ?>"><div class="facebook-icon"></div></a>
                <a target="_blank" href="<?php echo e($independence_info['twitter_link']); ?>"><div class="twitter-icon"></div></a>
            </div>
            <div class="phone"><a href="tel:<?php echo e($independence_info['phone_number']); ?>"><?php echo e($independence_info['phone_number']); ?></a></div>
            <div class="email"><a href="mailto:<?php echo e($independence_info['email']); ?>"><?php echo e($independence_info['email']); ?></a></div>
            <a target="_blank" href="<?php echo e($independence_info['address_link']); ?>" class="address-link">
                <div class="address-line-one"><?php echo e($independence_info['street_address']); ?></div>
                <div class="address-line-two"><?php echo e($independence_info['city_state_and_zip']); ?></div>
            </a>
        </div>

        <div class="location">
            <div class="title">LIBERTY</div>
            <div class="photo"><img src="<?php echo e($liberty_info['photo']); ?>" alt="liberty missouri building"></div>
            <div class="social-icons">
                <a target="_blank" href="<?php echo e($liberty_info['facebook_link']); ?>"><div class="facebook-icon"></div></a>
                <a target="_blank" href="<?php echo e($liberty_info['twitter_link']); ?>"><div class="twitter-icon"></div></a>
            </div>
            <div class="phone"><a href="tel:<?php echo e($liberty_info['phone_number']); ?>"><?php echo e($liberty_info['phone_number']); ?></a></div>
            <div class="email"><a href="mailto:<?php echo e($liberty_info['email']); ?>"><?php echo e($liberty_info['email']); ?></a></div>
            <a target="_blank" href="<?php echo e($liberty_info['address_link']); ?>" class="address-link">
                <div class="address-line-one"><?php echo e($liberty_info['street_address']); ?></div>
                <div class="address-line-two"><?php echo e($liberty_info['city_state_and_zip']); ?></div>
            </a>
        </div>
    </div>
</div>