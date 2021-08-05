<?php 
$headquarters_info = get_field('headquarters_location', 'option');
?>

<div class="section-headquarters">
    <div class="info-container">
        <div class="inner-container">
            <h3 class="title">OUR HEADQUARTERS:</h3>
            <div class="middle">
                <div class="phone"><a href="tel:<?php echo e($headquarters_info['phone_number']); ?>"><?php echo e($headquarters_info['phone_number']); ?></a></div>
                <div class="email"><a href="emailto:<?php echo e($headquarters_info['email']); ?>"><?php echo e($headquarters_info['email']); ?></a></div>
            </div>
            <a href="<?php echo e($headquarters_info['address_link']); ?>" class="right">
                <div class="street"><?php echo e($headquarters_info['street_address']); ?></div>
                <div class="city"><?php echo e($headquarters_info['city_state_and_zip']); ?></div>
            </a>
        </div>
    </div>
</div>