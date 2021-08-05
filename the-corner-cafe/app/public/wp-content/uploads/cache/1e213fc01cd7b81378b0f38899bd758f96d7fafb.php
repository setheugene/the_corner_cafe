<?php
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
<nav class="primary-nav">
  <div class="nav__logo">
    <a href="/">
      <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Corner-Cafe-logo.svg" alt="corner cafe logo">
    </a>
  </div>
    <?php if(has_nav_menu('primary_navigation')): ?>
      <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'top-nav']); ?>

    <?php endif; ?>
  <div class="nav__right">
    <div class="nav__right--top">
      <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>" class="button-slant button-left"><span><?php echo e(esc_html( $link_title )); ?></span></a>
      <a href="<?php echo e(esc_url( $delivery_link_url )); ?>" target="<?php echo e(esc_attr( $delivery_link_target )); ?>" class="button-slant button-left"><span><?php echo e(esc_html( $delivery_link_title )); ?></span></a>
      <a href="/gift-cards" class="button-slant"><span>gift cards</span></a>
    </div>
    <div class="nav__right--bottom">
      <div class="location"><a href="/contact#locations">find a location</a></div>
      <div class="search"><span>|</span><i class="search-icon far fa-search"></i><?php echo e(get_search_form()); ?></div>
    </div>
  </div>
</nav>

<div class="mobile-nav">
  <div class="top-bar">
    <a href="/">
      <img src="/wp-content/themes/the-corner-cafe/resources/assets/images/Corner-Cafe-logo.svg" alt="corner cafe logo">
    </a>
    <div class="button-hamburger">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
  </div>
  <div class="nav-panel">
    <div class="mobile-search">
      <div><?php echo e(get_search_form()); ?></div>
    </div>

    <?php echo wp_nav_menu([
      'menu' => 'mobile', 
      'menu_class' => 'top-nav',
      'container_class' => 'menu-main-menu-container',
      'menu_id'         => 'menu-main-menu'
      ]); ?>


    <hr>
    <div class="locations"><a href="/contact#locations">find a location</a></div>
  <div class="nav-panel-buttons">
      <a href="<?php echo e(esc_url( $link_url )); ?>" target="<?php echo e(esc_attr( $link_target )); ?>" class="button-slant"><span><?php echo e(esc_html( $link_title )); ?></span></a>
      <a href="<?php echo e(esc_url( $delivery_link_url )); ?>" target="<?php echo e(esc_attr( $delivery_link_target )); ?>" class="button-slant button-left"><span><?php echo e(esc_html( $delivery_link_title )); ?></span></a>
      <a href="/gift-cards" class="button-slant"><span>gift cards</span></a>
  </div>
  </div>
</div>
  