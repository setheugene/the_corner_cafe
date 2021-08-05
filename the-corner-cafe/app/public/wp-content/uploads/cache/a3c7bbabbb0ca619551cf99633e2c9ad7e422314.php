<?php
  $riverside_information = get_field('riverside_location', 'option');
  $liberty_information = get_field('liberty_location', 'option');
  $independence_information = get_field('independence_location', 'option');
?>

<footer class="footer">
  <div class="footer-links">
    <div class="footer-heading">Quick Links</div>
    <div class="footer-menu">
      <?php echo wp_nav_menu(['menu' => 'footer_menu', 'menu_class' => 'footer-nav']); ?>

    </div>
  </div>
  <div class="footer-locations">
    <div class="footer-heading locations-title"><a href="/contact#locations">Our Locations</a></div>
    <div class="information information-riverside">
      <div class="city">RIVERSIDE</div>
      <div class="street"><a href="<?php echo e($riverside_information['address_link']); ?>"><?php echo e($riverside_information['street_address']); ?></a></div>
      <div class="phone"><a href="tel:<?php echo e($riverside_information['phone_number']); ?>"><?php echo e($riverside_information['phone_number']); ?></a></div>
    </div>
    <div class="information information-liberty">
      <div class="city">LIBERTY</div>
      <div class="street"><a href="<?php echo e($liberty_information['address_link']); ?>"><?php echo e($liberty_information['street_address']); ?></a></div>
      <div class="phone"><a href="tel:<?php echo e($liberty_information['phone_number']); ?>"><?php echo e($liberty_information['phone_number']); ?></a></div>
    </div>
    <div class="information information-independence">
      <div class="city">INDEPENDENCE</div>
      <div class="street"><a href="<?php echo e($independence_information['address_link']); ?>"><?php echo e($independence_information['street_address']); ?></a></div>
      <div class="phone"><a href="tel:<?php echo e($independence_information['phone_number']); ?>"><?php echo e($independence_information['phone_number']); ?></a></div>
    </div>
  </div>
  <div class="footer-buttons">
      <a href="/order-online" class="button-slant"><span>order online</span></a>
      <a href="/gift-cards" class="button-slant"><span>gift cards</span></a>
  </div>
</footer>


