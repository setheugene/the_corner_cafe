<?php
  $riverside_information = get_field('riverside_location', 'option');
  $liberty_information = get_field('liberty_location', 'option');
  $independence_information = get_field('independence_location', 'option');
  $order_online_link = get_field('order_online_link', 'option');
  if( $order_online_link ): 
    $link_url = $order_online_link['url'];
    $link_title = $order_online_link['title'];
    $link_target = $order_online_link['target'] ? $order_online_link['target'] : '_self';
endif;
$delivery_link = get_field('delivery_link', 'option');
  if( $delivery_link ): 
    $delivery_link_url = $delivery_link['url'];
    $delivery_link_title = $delivery_link['title'];
    $delivery_link_target = $delivery_link['target'] ? $delivery_link['target'] : '_self';
endif;
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
      <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>" class="button-slant"><span><?php echo e(esc_html( $link_title )); ?></span></a>
      <a href="<?php echo e(esc_url( $delivery_link_url )); ?>" target="<?php echo e(esc_attr( $delivery_link_target )); ?>" class="button-slant button-left"><span><?php echo e(esc_html( $delivery_link_title )); ?></span></a>
      <a href="/gift-cards" class="button-slant"><span>gift cards</span></a>
  </div>
</footer>
<div class="sub-footer">
  <div class="left">
      <div class="privacy"><a href="/privacy-policy/">Privacy Policy</a></div>
      <div>|</div>
      <div class="copyright">&copy; <?php echo date("Y"); ?> Corner Cafe</div>
  </div>
  <div class="make-tagline">
  <a href="https://makedigitalgroup.com/" target='_blank' <?php if(basename($_SERVER['REQUEST_URI']) != ""): ?> : rel='nofollow' <?php endif; ?>>
    <div class="text">web design and marketing by</div>
    <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/make-logo-18-horiz-teal-white.png" alt="MAKE Digital Group Logo">
  </a>
</div>
</div>
